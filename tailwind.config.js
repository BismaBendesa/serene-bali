/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                georgia: ["Georgia", "serif"],
            },
            boxShadow: {
                sidebar: "0px 4px 8px 0px rgba(0,0,0, 15%)",
            },
        },
    },
    plugins: [],
};
