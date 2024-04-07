import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/views/layouts/svetofor/js/script.js',
                'resources/css/app.scss',
                'resources/js/app.js',
                'resources/views/layouts/default/css/style.scss',
                'resources/views/layouts/svetofor/css/style.scss',

            ],
            refresh: true,
        }),
    ],
});
