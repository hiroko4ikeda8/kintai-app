const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php', //
        './resources/views/auth/**/*.blade.php', // 認証画面のみTailwindを適用

        // './storage/framework/views/*.php', // 認証画面以外に適用させないためコメント
        // './resources/views/**/*.blade.php', // 認証画面以外に適用させないためコメントアウト

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
