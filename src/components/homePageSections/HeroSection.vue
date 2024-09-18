<template>
  <div>
    <!-- hero section image -->
    <carousel :autoplay="true" :dots="true" :center="true" :slideBy="1" :items="1" :nav="false" :loop="true">
      <div class="main-img relative" v-for="(item, index) in carouselImages" :key="index">
        <img :src="item.img" alt="user" class="w-full md:h-[90vh] xs:h-[200px]" />
        <div class="absolute top-[27%] md:top-[40%] left-1/2 transform -translate-x-1/2">
          <p class="text-center text-white text-xl md:text-3xl italic font-light">{{ $t("welcome_to") }}</p>
          <h1 class="text-center text-white font-bevietnam font-bold text-3xl md:text-6xl md:mt-2">Tech Wizard</h1>
        </div>
      </div>
    </carousel>
    

    <p class=" wow animate__animated animate__fadeInLeft font-bevietnam text-center max-w-[1200px] mx-auto mt-4 px-2 pt-8 font-normal text-lg text-textcolor"> 
      {{ $t("home_page_des") }}
    </p>
  
  </div>
</template>

<script>
import WOW from 'wow.js'; // Import WOW.js
import 'animate.css'; // Import Animate.css
import carousel from "vue-owl-carousel";
export default {
  name: "heroSection",
  components: { carousel },
  data() {
    return {
      carouselImages: [
        { img: "banner-final-1.jpg" },
        { img: "banner-final-2.jpg" },
      ],
    
    };
  },
  mounted() {
    // Initialize WOW.js
    new WOW().init();
  }
};
</script>
<style>
.owl-theme .owl-dots .owl-dot span {
  width: 35px !important;
  margin-top: -5px !important;
}

.owl-theme .owl-dots .owl-dot.active span {
  background-color: #1e6ef9 !important;
}
</style>
