import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import path from "path";
import glob from "glob";

let jsFiles = glob.sync("./resources/js/**/*.js");

export default defineConfig({
    plugins: [
        laravel({
            input: jsFiles.concat(["./resources/css/app.scss"]),
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        extensions: [".js", ".vue", ".css", ".scss"],
        alias: {
            "@": path.resolve(__dirname, "./public"),
            "#": path.resolve(__dirname, "./resources/js"),
            ziggy: "/vendor/tightenco/ziggy/src/js",
            "ziggy-vue": "/vendor/tightenco/ziggy/src/js/vue",
        },
    },
});
