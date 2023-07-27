/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                130: "35rem",
                160: "40rem",
                200: "50rem",
            },
        },
    },
    plugins: [],
};
