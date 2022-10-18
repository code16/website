<?php

namespace Components\Ui;

use Illuminate\View\Component;

class Tabs extends Component
{
    public array $tabs = [];
    public self $tabsComponent;

    public function __construct()
    {
        $this->tabsComponent = $this;
    }

    public function addTab($title)
    {
        $this->tabs[] = (object)['title' => $title];
    }

    public function render()
    {
        return view('_components.ui.tabs', [
            'self' => $this,
        ]);
    }
}
