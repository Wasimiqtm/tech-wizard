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
import es from "./locales/es.json"; // Import Spanish language file

// Set up Axios
axios.defaults.baseURL = "https://teckywizard.com";
axios.defaults.withCredentials = true;

Vue.config.productionTip = false;

// Use Vue I18n
Vue.use(VueI18n);

// Create Vue I18n instance with options
const i18n = new VueI18n({
  locale: 'en', // Set default locale
  fallbackLocale: 'en', // Fallback locale
  messages: {
    en, // English
    fr, // French
    es  // Spanish
  }
});

// Function to get user's country and set locale
async function setLocaleBasedOnCountry() {
  try {
    const response = await axios.get("/ipinfo.php"); // Request to your PHP proxy
    const countryCode = response.data.country;

    let locale = 'en'; // Default locale

    if (countryCode === 'FR') {
      locale = 'fr'; // French
    } else if (countryCode === 'ES') {
      locale = 'es'; // Spanish
    }

    i18n.locale = locale;
  } catch (error) {
    console.error("Error fetching country data:", error);
  }
}

// Set locale based on user's country and then create Vue instance
setLocaleBasedOnCountry().then(() => {
  new Vue({
    router,
    store,
    i18n, // Inject i18n instance into Vue
    render: (h) => h(App),
  }).$mount("#app");
});
