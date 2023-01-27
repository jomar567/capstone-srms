/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'white': '#EFF6EE',
        'redpink': '#ED0131',
        'blue': '#0A142F',
        'gray': '#9ca3af'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}
