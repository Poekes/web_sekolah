import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/func/editorQuill.js",
            ],
            refresh: true,
        }),
    ],
    // server: {
    //     host: "192.168.43.98",
    // },
});
