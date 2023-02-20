import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import "bootstrap";
import "./assets/app.scss";

import $ from "jquery";
window.jQuery = $;
window.$ = $

createApp(App).use(router).mount("#app");
