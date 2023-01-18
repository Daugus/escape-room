import App from "./App.vue"; import { createApp } from "vue"; import { ZiggyVue
} from "ziggy-vue"; const VueApp = createApp(App); VueApp.use(ZiggyVue);
VueApp.mount("#vue");
