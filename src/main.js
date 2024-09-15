import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import "./assets/styles.css";
import axios from "axios";
import VueI18n from "vue-i18n";

// Import language files
import en from "./locales/en.json";
import fr from "./locales/fr.json";

// Set up Axios
// axios.defaults.baseURL = process.env.VUE_APP_BASE_URL;
axios.defaults.baseURL = "https://teckywizard.com";
axios.defaults.withCredentials = true;

Vue.config.productionTip = false;

// Use Vue I18n
Vue.use(VueI18n);

// Create Vue I18n instance with options
const i18n = new VueI18n({
  locale: 'en', // Set locale
  fallbackLocale: 'en', // Fallback locale
  messages: {
    en,
    fr
  }
});

new Vue({
  router,
  store,
  i18n, // Inject i18n instance into Vue
  render: (h) => h(App),
}).$mount("#app");
