<!-- components/contact.vue -->
<template>
  <div class="bg-themebgcolor pb-20">
    <!-- service section -->
    <div class="contact-main md:py-56 py-24">
      
     
    </div>
    <h1
        class="pt-16 font-bevietnam text-center font-bold md:text-5xl text-xl text-black"
      >
        {{ $t("contact_us") }}
      </h1>
    <p class="mt-5 wow animate__animated animate__zoomIn text-lg text-center font-normal font-bevietnam text-textcolor max-w-[1100px] mx-auto ">
      {{ $t("contact_text") }}
    </p>
  </div>
</template>

<script>
import WOW from 'wow.js'; // Import WOW.js
import 'animate.css'; // Import Animate.css
export default {
  name: "contactHeroSection",
  data() {
    return {
      //
    };
  },
  methods: {},
  mounted() {
    // Initialize WOW.js
    new WOW().init();
  }
};
</script>

<style scoped>
/* Add any additional styling here */
.contact-main {
  background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)),url("/public/banner-9.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
