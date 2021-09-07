const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor: ['responsive', 'hover', 'focus', 'checked'],
            borderColor: ['checked'],
            outline: ['hover', 'active', 'focus', 'checked'],
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
              }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
