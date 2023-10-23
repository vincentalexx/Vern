/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'Primary': '#242424',
            'Orange': '#F4B155',
            'White': '#F7F9FA',
            'Gray': '#4A4B4B',
            'lighGray': '#C6C7C8',
            'borderColor': '#E5E7EB'
        },
    },
  },
  plugins: [],
}
