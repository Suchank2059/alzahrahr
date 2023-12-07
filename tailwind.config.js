/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#3490dc", // Change to your preferred primary color
                secondary: "#ffed4a", // Change to your preferred secondary color
            },
        },
    },
    plugins: [],
};

