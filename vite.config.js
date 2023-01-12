import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            input: ["./resources/css/app.scss", "./resources/js/main.js"],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        extensions: [".js", ".vue", "css", ".scss"],
        alias: {
            "@": path.resolve(__dirname, "./public"),
        },
    },
});
