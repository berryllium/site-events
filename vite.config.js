import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/app.js',
                'resources/views/layouts/default/css/style.scss',
                'resources/views/layouts/svetofor/css/style.scss'
            ],
            refresh: true,
        }),
    ],
});
