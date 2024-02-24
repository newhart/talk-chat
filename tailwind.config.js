import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                primary: "#D806DD",
            },
            fontFamily: {
                sans: ["arista pro", ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                "open-menu": {
                    "0%": {
                        transform: "scaleX(0)",
                    },
                    "80%": {
                        transform: "scaleX(1.2)",
                    },
                    "100%": {
                        transform: "scaleX(1)",
                    },
                },
            },
            animation: {
                "open-menu": "open-menu 0.5s ease-in-out forwards",
            },
        },
    },

    plugins: [forms],
};
