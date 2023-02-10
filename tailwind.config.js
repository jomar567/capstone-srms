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
        'light': '#FFFFFF',
        'redpink': '#ED0131',
        'blue': '#0A142F',
        'gray': '#9ca3af',
        'student': '#427AA1',
        'subject': '#ED0131',
        'class': '#F77F00',
        'result': '#006D77',
        'breadcrumb': '#717171'
      },
      letterSpacing: {
        'wide': '8px',
        'wider': '30px'
      },
      backgroundImage: {
        'hero': "url('https://media.istockphoto.com/id/1278496180/photo/exam-at-school-with-students-taking-educational-admission-test-in-class-thinking-hard-writing.jpg?s=612x612&w=0&k=20&c=JwMsJq9KYgu3zc1_5EdWSz_Y9n9i-qAziRpZIU5RauI=')",
        'login': "url('https://media.istockphoto.com/id/1216453954/photo/empty-classroom.jpg?s=612x612&w=0&k=20&c=HT2jBTNGKfxbFab3_c59hTqO_h36bc915PGYX5I1rNU=')",
        'loginAdmin': "url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')"
      },
      fontSize: {
        'icons': '27px',
        'subIcons': '17px'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
],
}
