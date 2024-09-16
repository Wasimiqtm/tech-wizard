<template>
  <div>
    <nav class="bg-white w-full start-0 border-t-8 border-navbgcolor shadow-lg fixed top-0 z-20">
      <div class="max-w-screen-xl flex items-center justify-between mx-auto p-1 lg:px-6 px-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="TECH.png" alt="user" class="md:w-36 w-20" />
        </a>

        <!-- Mobile menu icon -->
        <div class="md:hidden">
          <button type="button"
            class="inline-flex font-bevietnam items-center p-2 w-10 h-10 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2"
            @click="toggle">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15" />
            </svg>
          </button>
        </div>

        <!-- Desktop navigation -->
        <div class="hidden md:block">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
            <li v-for="value in translatedPagesLinks" :key="value.title">
              <router-link :to="value.link" :class="{ 'border-b-4 border-navbgcolor': $route.path === value.link }"
                class="block pt-2 mb-2 font-bevietnam font-semibold text-black text-lg">
                {{ value.title }}
              </router-link>
            </li>
          </ul>
        </div>

        <!-- Desktop buttons (Get a Quote and Language Dropdown) -->
        <div class="hidden md:flex space-x-4 items-center">
          <router-link to="/contact">
            <button type="button"
              class="px-3 py-2 text-md font-medium text-center text-white bg-navbgcolor rounded-lg hover:bg-black">
              {{ $t('get_a_quote') }}
            </button>
          </router-link>

          <div class="relative inline-block text-left">
            <button @click="toggleDropdown" type="button"
              class="px-3 py-2 text-md font-medium text-center text-white bg-navbgcolor rounded-lg hover:bg-black">
              {{ currentLanguageLabel }}
            </button>

            <!-- Dropdown Menu -->
            <div v-if="isDropdownOpen" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
              <button @click="changeLanguage('en')"
                class="block px-4 py-2 text-left text-sm font-medium text-black hover:bg-gray-100 w-full">
                English
              </button>
              <button @click="changeLanguage('fr')"
                class="block px-4 py-2 text-left text-sm font-medium text-black hover:bg-gray-100 w-full">
                Français
              </button>
              <button @click="changeLanguage('es')"
                class="block px-4 py-2 text-left text-sm font-medium text-black hover:bg-gray-100 w-full">
                Español
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Mobile navbar -->
    <div class="w-64 h-full fixed z-20 top-[65px] bg-navbgcolor transform transition-transform duration-300"
         :class="isToggled ? 'translate-x-0' : '-translate-x-full'">
      <div class="px-4">
        <ul class="py-4 font-medium rounded-lg">
          <li v-for="value in pagesLinks" :key="value.title" @click="toggle">
            <router-link :to="value.link" :class="{ 'border-b': $route.path === value.link }"
              class="pt-2 mb-2 mx-2 font-bevietnam font-normal text-white inline-block text-lg">
              {{ value.title }}
            </router-link>
          </li>

          <!-- Get a Quote button -->
          <li class="mt-4">
            <router-link to="/contact">
              <button @click="toggle" type="button"
                class="w-full px-3 py-2 text-md font-medium text-left text-white bg-white bg-opacity-20 rounded-lg hover:bg-opacity-30">
                {{ $t('get_a_quote') }}
              </button>
            </router-link>
          </li>

          <!-- Language Dropdown button -->
          <li class="mt-2">
            <button @click="toggleDropdown" type="button"
              class="w-full px-3 py-2 text-md font-medium text-left text-white bg-white bg-opacity-20 rounded-lg hover:bg-opacity-30">
              {{ currentLanguageLabel }}
            </button>

            <!-- Language dropdown list -->
            <div v-if="isDropdownOpen" class="mt-2 w-full bg-white rounded-lg shadow-lg">
              <button @click="changeLanguage('en'); toggle"
                class="block px-4 py-2 text-left text-sm font-medium text-black hover:bg-gray-100 w-full">
                English
              </button>
              <button @click="changeLanguage('fr'); toggle"
                class="block px-4 py-2 text-left text-sm font-medium text-black hover:bg-gray-100 w-full">
                Français
              </button>
              <button @click="changeLanguage('es'); toggle"
                class="block px-4 py-2 text-left text-sm font-medium text-black hover:bg-gray-100 w-full">
                Español
              </button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PageNavbar",
  data() {
    return {
      isToggled: false,
      isDropdownOpen: false,
      languages: {
        en: 'English',
        fr: 'French',
        es: 'Español',
      },
      currentLanguage: 'en', // Default language
      pagesLinks: [
        { title: "Home", link: "/" },
        { title: "Our Services", link: "/services" },
        { title: "Contact Us", link: "/contact" },
      ],
    };
  },
  computed: {
    currentLanguageLabel() {
      return this.languages[this.currentLanguage];
    },
    translatedPagesLinks() {
      return [
        { title: this.$t("home"), link: "/" },
        { title: this.$t("services"), link: "/services" },
        { title: this.$t("contact_us"), link: "/contact" }
      ];
    }
  },
  methods: {
    toggle() {
      this.isToggled = !this.isToggled;
    },
    toggleDropdown() {
      this.isDropdownOpen = !this.isDropdownOpen;
    },
    changeLanguage(locale) {
      this.currentLanguage = locale;
      this.$i18n.locale = locale;
      this.isDropdownOpen = false; // Close the dropdown
      this.isToggled = false; // Close the sidebar
    }
  },
};
</script>
