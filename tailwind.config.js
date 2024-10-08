const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  presets: [
    require('./vendor/tallstackui/tallstackui/tailwind.config.js')
  ],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./vendor/tallstackui/tallstackui/src/**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['"Montserrat"', ...defaultTheme.fontFamily.sans],
        'mono': ['"Roboto Mono"', ...defaultTheme.fontFamily.mono],
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
