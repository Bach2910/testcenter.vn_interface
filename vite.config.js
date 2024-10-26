import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/js/account.js','resources/js/interface.js','resources/js/resource.js'],
            refresh: true,
        }),
    ],
});
