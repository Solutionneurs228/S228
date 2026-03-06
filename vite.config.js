import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/js/app.js'
            ],
            build: {
        outDir: 'public/build',  // Par défaut, mais vérifiez
        emptyOutDir: true,
    },
            refresh: true, // hot reload
        }),
    ],
});

