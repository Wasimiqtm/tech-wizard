/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,vue,js,ts}",
    // Add other file types or directories as needed
  ],
  theme: {
    fontFamily: {
      bevietnam: ["bevietnam"],
    },
    extend: {
      colors: {
        themebgcolor: "#F2F6FA",
        navbgcolor: "#1e6ef9",
        bgcolor: "#1661d2",
        headingclr: "#000",
        headingblue: "#1563e9",
        cardheadingclr: "#000",
        textcolor: "#333333",
        borderclr: "#F1F1F3",
      },
    },
  },
  plugins: [],
};
