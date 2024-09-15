<template>
  <div>
    <nav class="bg-white w-full start-0 border-t-8 border-navbgcolor shadow-lg fixed top-0 z-20">
      <div class="max-w-screen-xl flex items-center justify-between mx-auto p-1 lg:px-6 px-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="TECH.png" alt="user" class="md:w-36 w-20" />
        </a>

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

        <!-- Container for Quote Button and Language Dropdown -->
        <div class="hidden md:flex space-x-4 items-center">
          <router-link to="/contact">
            <button type="button"
              class="px-3 py-2 text-md font-medium text-center text-white bg-navbgcolor rounded-lg hover:bg-black">
             {{ $t('get_a_quote') }}
            </button>
          </router-link>

          <div class="relative inline-block text-left">
            <!-- Dropdown Button -->
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
                French
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- mobile navbar -->
    <div class="w-full h-full fixed z-20 top-[65px] bg-navbgcolor md:hidden sm:block" v-if="isToggled">
      <div class="px-4">
        <ul class="py-4 font-medium rounded-lg">
          <li v-for="value in pagesLinks" :key="value.title" @click="toggle">
            <router-link :to="value.link" :class="{ 'border-b': $route.path === value.link }"
              class="pt-2 mb-2 mx-2 font-bevietnam font-normal text-white inline-block text-lg">
              {{ value.title }}
            </router-link>
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
      dialogBox: false,
      isToggled: false,
      isDropdownOpen: false,
      languages: {
        en: 'English',
        fr: 'French',
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
    toggle2() {
      this.dialogBox = !this.dialogBox;
    },
    closeModal() {
      this.dialogBox = false;
    },
    toggleDropdown() {
      this.isDropdownOpen = !this.isDropdownOpen;
    },
    changeLanguage(locale) {
      this.currentLanguage = locale; // Update the selected language
      this.$i18n.locale = locale; // Change the locale
      this.isDropdownOpen = false; // Close the dropdown
    }
  },
};
</script>
