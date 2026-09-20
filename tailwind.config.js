import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
        fontFamily: {
            display: ["Instrument Sans", "sans-serif"],
            body: ["Inter", "sans-serif"],
        },
        colors: {
            bg: "#0b0f19",
            surface: "#111827",
            "surface-2": "#1a2235",
            border: "#1f2d44",
            "border-hover": "#3d4f6e",
            accent: "#10b981",
            "accent-dim": "#0d9268",
            "accent-glow": "rgba(16, 185, 129, 0.15)",
            text: "#f0f4ff",
            muted: "#6b7a99",
            "muted-2": "#3d4f6e",
            indigo: "#818cf8",
            amber: "#f59e0b",
        },
        boxShadow: {
            "glow-accent": "0 0 32px rgba(16,185,129,0.3)",
            "glow-accent-lg": "0 0 40px rgba(16,185,129,0.45)",
            "glow-accent-card": "0 0 48px rgba(16,185,129,0.1)",
        },
        },
    },

    plugins: [forms],
};
