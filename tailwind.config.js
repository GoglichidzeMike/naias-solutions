module.exports = {
    purge: {
        enabled: true,
        content: [
            "./resources/css.app.css",
            "./resources/js/app.js",
            "./resources/views/home.blade.php",
            "./resources/views/dashboard.blade.php",
            "./resources/views/auth/login.blade.php",
            "./resources/views/auth/register.blade.php",
            "./resources/views/dashboard/leads/index.blade.php",
            "./resources/views/dashboard/leads/show.blade.php",
            "./resources/views/layouts/home.blade.php",
            "./resources/views/layouts/app.blade.php",
            "./resources/views/includes/contact.blade.php",
        ],
    },
    darkMode: false, // or 'media' or 'class'
    theme: {
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1025px",
            xl: "1280px",
            "2xl": "1536px",
        },
        extend: {
            colors: {
                primary: "#01A4DE",
                dark: "#414F76",
                orange: "#F29826",
                secondary: "#419A3D",
                third: "#0CF4F5",
            },
            minHeight: {
                700: "700px",
            },
            fontFamily: {
                sans: ["Open Sans"],
            },
            inset: {
                101: "14px",
            },
            width: {
                97: "97%",
            },
        },
    },
    variants: {},
    plugins: [],
};
