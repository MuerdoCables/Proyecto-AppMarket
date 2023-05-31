import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',

                'resources/scss/bootstrap.scss', 
                'resources/scss/bootstrap-grid.scss', 
                'resources/scss/bootstrap-reboot.scss', 
                'resources/scss/bootstrap-utilities.scss', 
                
                'resources/sass/Main.scss', 
                'resources/sass/Index.scss', 
                'resources/sass/Descargar.scss', 
                'resources/sass/FormularioSesion.scss', 
                'resources/sass/cabecera.scss',

                'resources/js/Home.js', 
                'resources/js/mostrarApps.js', 
            ],
            refresh: true,
        }),
    ],
});
