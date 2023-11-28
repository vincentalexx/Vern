import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                biruBagus: "#219AF6",
                Black: "#000000",
                Red: "#B30E16",
                Blue: "#035096",
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

    plugins: [forms],
};
