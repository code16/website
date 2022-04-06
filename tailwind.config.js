const content = require('fast-glob').sync([
  'source/**/*.{blade.php,md,html,vue}',
]);

module.exports = {
  content,
  theme: {
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
      letterSpacing: {
        'wider': '0.1em',
        'widest': '0.15em',
      },
      boxShadow: {
        'md-brand': '0 15px 30px 0 rgba(44,116,103,0.22), 0 5px 15px 0 rgba(44,116,103,0.16)',
      }
    }
  },
}
