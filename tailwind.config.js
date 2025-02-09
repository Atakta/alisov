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
    },
  },
  plugins: [
      require("daisyui"),
      require('tailwindcss-textshadow'),
  ],
}

