import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [],
            refresh: true,
        })
    ],
    resolve: {
        alias: {
            '@/images': path.resolve(__dirname, './public/images'),
        },
    },
});
