/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ '../**/*.php' ],
  theme: {
    fontFamily: {
      'theme-heading': [ '"Titillium Web"', 'sans-serif' ],
      'theme-text': [ '"Open Sans"', 'sans-serif' ]
    },
    colors: {
      'theme-primary': '#1f1f1f'
    },
    extend: {},
  },
  plugins: [],
}
