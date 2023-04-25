/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  options: {
    ignore: ['./resources/views/livewire/components/header.blade.php'],
  },
  theme: {
    extend: {},
  },
  plugins: [
  ],
}
