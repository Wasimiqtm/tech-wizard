<template>
  <div class="md:pt-20 pt-16">
    <!-- contact hero us Section -->
    <contactHeroSection />
    <!-- contact form Section -->
    <contactFormSection />
  
  </div>
</template>

<script>
import contactHeroSection from "@/components/contactPageSections/ContactHeroSection.vue";
import contactFormSection from "@/components/contactPageSections/FormSection.vue";

export default {
  name: "contactUsPage",
  components: {
    contactHeroSection,
    contactFormSection,
  },
  data() {
    return {
      //
    };
  },
};
</script>
