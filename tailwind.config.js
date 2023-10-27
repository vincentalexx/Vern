/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                borbor: "#606061",
                Primary: "#242424",
                OrangeA: "#F6AA40",
                OrangeB: "#D9822D",
                White: "#F7F9FA",
                Gray: "#4A4B4B",
                lighGray: "#C6C7C8",
                borderColor: "#E5E7EB",
                homeGray: "#000000",
                homeInput: "#f3f3f3",
                sortBorder: "#00000099",
            },
        },
    },
    plugins: [],
};
