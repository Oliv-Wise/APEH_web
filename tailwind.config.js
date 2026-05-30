/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                apeh: {
                    blue:    '#1d3650',
                    red:     '#c0392b',
                    gold:    '#d4a017',
                    light:   '#f0f4f8',
                    dark:    '#0f1f30',
                    accent:  '#2980b9',
                },
            },
            fontFamily: {
                sans:    ['Inter', 'ui-sans-serif', 'system-ui'],
                display: ['Playfair Display', 'Georgia', 'serif'],
            },
            backgroundImage: {
                'hero-gradient': 'linear-gradient(135deg, #1d3650 0%, #2980b9 50%, #c0392b 100%)',
            },
        },
    },
    plugins: [],
};
