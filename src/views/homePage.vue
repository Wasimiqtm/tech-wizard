<template>
  <div class="md:pt-20 pt-16">
    <!-- hero section & about section -->
    <heroSection />
    
    <!-- servise section is here -->
    <serviseSection />
 
    <!-- why chose section is here -->
    <WhyChose />

     <!-- servise section is here -->
     <CountingSec />
  </div>
</template>

<script>
import heroSection from "@/components/homePageSections/HeroSection.vue";
import CountingSec from "@/components/homePageSections/CountingSec.vue";
import serviseSection from "@/components/homePageSections/ServiseSection.vue";
import WhyChose from "@/components/homePageSections/WhyChose.vue";
export default {
  name: "homePage",
  components: {
    heroSection,
    CountingSec,
    serviseSection,
    WhyChose,

  },
  data() {
    return {
      //
    };
  },
};
</script>
