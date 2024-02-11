import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "css/main.min.css",
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
