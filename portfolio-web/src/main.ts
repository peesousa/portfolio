import { createApp } from "vue";
import App from "./App.vue";
import "./registerServiceWorker";
import router from "./router";
import store from "./store";

import { createI18n } from "vue-i18n";
import { pt_BR } from "@/locales/pt_BR";
import { en } from "@/locales/en";

const languages = {
  pt_BR,
  en,
};

const i18n = createI18n({
  locale: "pt_BR",
  fallbackLocale: "pt_BR",
  messages: languages,
});

createApp(App).use(store).use(router).use(i18n).mount("#app");
