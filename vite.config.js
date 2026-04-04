import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/assistance.css',
                'resources/css/formation.css',
                'resources/css/galerie.css',
                'resources/css/portfolio.css',
                'resources/js/app.js',
                'resources/js/assistance.js',
                'resources/js/formation.js',
                'resources/js/galerie.js',
                'resources/js/portfolio.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
        rollupOptions: {
            output: {
                manualChunks: undefined,
            },
        },
    },
});
