import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',

                'resources/js/estrellas.js',
                'resources/js/estrellas2.js',
                'resources/js/imagen.js',

                'resources/sass/cabecera.scss',
                'resources/sass/descargar.scss',
                'resources/sass/index.scss',
                'resources/sass/main.scss',
                'resources/sass/sesion.scss',
            ],
            refresh: true,
        }),
    ],
});
