<?php

namespace App\Listeners;

use Highlight\Highlighter;
use Illuminate\Support\Str;
use TightenCo\Jigsaw\Jigsaw;

class ApplySyntaxHighlighting
{
    public function handle(Jigsaw $jigsaw)
    {
        collect($jigsaw->getOutputPaths())->each(function ($path, $key) use ($jigsaw) {
            if (!$this->isAsset($path)) {
                $filename = $path . '/index.html';
                $content = $jigsaw->readOutputFile($filename);
                $updatedContent = $this->applySyntaxHighlighting($content);
                $jigsaw->writeOutputFile($filename, $updatedContent);
            }
        });
    }
    
    private function transform(string $content): string
    {
    
    }
    
    
    private function applySyntaxHighlighting(string $value) : string
    {
        $pattern = '~<pre><code[^>]*>\K.*(?=</code></pre>)~Uis';
        
        return preg_replace_callback($pattern, function ($match) {
            $highlighter = new Highlighter();
            $highlighter->setAutodetectLanguages([
                'php',
            ]);
            $input = htmlspecialchars_decode($match[0]);
            
            return $highlighter->highlightAuto($input)->value;
        }, $value);
    }
    
    private function isAsset($path)
    {
        return Str::startsWith($path, '/assets');
    }
}
