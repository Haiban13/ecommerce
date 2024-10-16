/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'pc': "url('http://127.0.0.1:8000/storage/products/cc.png')",
        'mobile': "url('http://127.0.0.1:8000/storage/products/me.png')",
      }
    },
  },
  plugins: [],
}

