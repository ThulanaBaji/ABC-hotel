module.exports = {
  content: [
    "./application/views/*.{html,php,js}",
    "./application/views/acc/dashboard.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("flowbite/plugin")({
      charts: true,
    })
  ]
};