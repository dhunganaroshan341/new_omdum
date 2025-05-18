const colors = require('tailwindcss/colors');

export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        'realm-yellow': '#f5ca44',
        'realm-yellow-light': '#f9dd79',
        'realm-yellow-lighter': '#fceba8',
        'realm-yellow-dark': '#c9a537',
        'realm-yellow-darker': '#a1842c',
        'realm-blue': '#292771',
        'realm-blue-light': '#4a4992',
        'realm-blue-dark': '#1f1e59',
        'realm-text-light': '#ffffff',
        'realm-text': '#333333',
        'realm-success': '#4caf50',
        'realm-error': '#f44336',
        'realm-warning': '#ff9800',
        'realm-info': '#2196f3',
      }
    },
  },
  plugins: [],
};
