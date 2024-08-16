/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        sans: [
          "HelveticaNeue-Light",
          "Helvetica Neue Light",
          "Helvetica Neue",
          "Helvetica",
          "Arial",
          "Lucida Grande",
          "sans-serif",
        ],
      },
    },
  },
  plugins: [],
  safelist: ["opacity-0"],
};
