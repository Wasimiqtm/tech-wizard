<template>
  <div>
    <!-- hero section image -->
    <img src="Rectangle 4817 (1).png" alt="user" class="w-full md:h-[430px] h-[200px]" />
    <!-- service section -->
    <h1 class=" wow animate__animated animate__fadeInDown text-headingclr lg:text-5xl text-4xl font-bold font-bevietnam text-center mt-20">
      {{ $t("our_services_title") }}
      
    </h1>
    <p class=" wow animate__animated animate__fadeInUp font-bevietnam text-center max-w-[1200px] px-2 mx-auto mt-4 font-normal text-lg text-textcolor">
      {{ $t("our_services_des") }}
    </p>
    
  </div>
</template>

<script>
import WOW from 'wow.js'; // Import WOW.js
import 'animate.css'; // Import Animate.css
export default {
  name: "serviceHero",
  data() {
    return {
      // 
    };
  },
  mounted() {
    // Initialize WOW.js
    new WOW().init();
  }
};
</script>
