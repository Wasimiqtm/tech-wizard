<!-- components/contact.vue -->
<template>
  <div class="bg-themebgcolor pb-20">
    <!-- service section -->
    <div class="contact-main md:py-48 py-20">
      <h1
        class="font-bevietnam text-center font-bold md:text-5xl text-xl text-white"
      >
        Contact Us
      </h1>
     
    </div>
    <p class="wow animate__animated animate__zoomIn text-lg text-center font-normal font-bevietnam text-textcolor max-w-[1100px] mx-auto pt-16">
      Ready to elevate your technology solutions? Contact Tech Wizard today to learn more about how we can help your organization build and secure its software, ensuring compliance and protecting against threats.
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
  background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3)),url("/public/Rectangle 4821 (1).png");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>
