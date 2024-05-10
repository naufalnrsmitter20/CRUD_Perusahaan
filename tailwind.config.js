/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./pemasok/**/*.{html,js,php}", "index.php", "./node_modules/flowbite/**/*.js", "./components/**/*.{html,js,php}"],
  theme: {
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
