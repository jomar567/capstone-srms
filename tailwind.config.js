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
      letterSpacing: {
        'wide': '8px',
        'wider': '30px'
      },
      backgroundImage: {
        'hero': "url('https://media.istockphoto.com/id/1278496180/photo/exam-at-school-with-students-taking-educational-admission-test-in-class-thinking-hard-writing.jpg?s=612x612&w=0&k=20&c=JwMsJq9KYgu3zc1_5EdWSz_Y9n9i-qAziRpZIU5RauI=')"
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}
