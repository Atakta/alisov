/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  theme: {
    extend: {
        colors: {
            primary: '#E8E8E8',
            secondary: '#36DDA3',
            accent: '#FFCF91',
        },
        textShadow: {
            'custom': '4px 5px rgba(0, 0, 0, 0.8)',
        },
        fontFamily: {
            rubik: ['Rubik', 'sans-serif'],
            'rubik-dirt': ['Rubik Dirt', 'sans-serif'],
            comforter: ['Comforter Brush', 'cursive'],
        },
        boxShadow: {
            'emerald-sm': '0 1px 10px rgba(0, 0, 0, 0.5)',
            'emerald-md': '0 3px 20px rgba(20, 184, 166, 0.5)',
        },
    },
  },
  plugins: [
      require("daisyui"),
      require('tailwindcss-textshadow'),
  ],
}

