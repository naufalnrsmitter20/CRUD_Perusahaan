/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./pemasok/**/*.{html,js,php}", "index.php", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
