
module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.{blade.php,md,html,vue}',
  ]),
  theme: {
    fontFamily: {
      sans: ['Karla', 'sans-serif'],
      serif: ['Spectral', 'serif'],
      mono: ['Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'monospace'],
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
    },
    extend: {
      colors: {
        'transparent': 'transparent',
        'black': '#22292f',
        'grey-darker': '#606f7b',
        'grey-light': '#dae1e7',
        'white': '#ffffff',
        'brand-brown': '#282224',
        'brand-darkblue': '#071735',
        'brand-cyan-lighter': '#B7FFF2',
        'brand-cyan': '#61FFE3',
        'brand-cyan-darker': '#2C7467',
        'brand-white': '#EBEBEB',
        'brand-white-darker': '#B1AFAF'
      },
      letterSpacing: {
        'wider': '0.1em',
        'widest': '0.15em',
      },
    }
  },
}
