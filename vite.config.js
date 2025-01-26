import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        
    ],
    resolve: {
        alias: {
          '@': path.resolve(__dirname, './resources'),
        },
      },
      css: {
        postcss: {
          plugins: [tailwindcss()],
        },
      },
});
