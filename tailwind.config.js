/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container : {
            padding :{
                default :'15px',
            }
        },
        screens : {
            sm:'640px',
            md:'768px',
            lg:'960px',
            xl:'1330px',
        },
        extend: {
            colors: {
                primary: "#242a2b", // Change to your preferred primary color
                secondary: "#808080", // Change to your preferred secondary color
                accent :{
                    DEFAULT : '#1cbccf',
                    secondary: '#18abbc',
                    tertiary : '#90c6cd',
                },
                grey : '#e8f0f1'

            },
            fontFamily: {
                primary: 'Poppins'
            },
            boxShadow:{
                custom1: '0 2 40 0 rgba(8,70,78,0.08)',
                custom2: '0 2 30 0 rgba(8,70,81,0.06)'
            }
        },
    },
    plugins: [],
};

