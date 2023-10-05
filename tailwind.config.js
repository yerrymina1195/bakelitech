/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'media',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        'mamso':'rgba(0, 150, 136, 0.8)',
      },
      backgroundColor:{
        'bg1': '#009688',
      }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

