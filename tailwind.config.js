/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'pacifico': ['Pacifico', 'cursive'],
    },
    extend: {
      colors: {
        night: '#0A0E22',
        sred: '#FF2D20',
      },
    },
  },
  plugins: [],
}
