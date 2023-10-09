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
        'greenbakeli':'rgba(0, 150, 136, 1)'
      },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

