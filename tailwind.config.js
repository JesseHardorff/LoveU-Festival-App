/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./assets/**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        primary: "#000000",
        base: "#FFFFFF",
        accent: "#F03228",
        secondary: "#247BA0",
        light: "#E3B505",
      },
      fontFamily: {
        sansation: ["Sansation", "sans-serif"],
      },
    },
  },
  plugins: [],
  darkMode: "class",
};
