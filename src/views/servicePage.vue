<template>
  <div class="md:pt-20 pt-16">
    <!-- hero section -->
    <heroSection />
    <!-- cards is here -->
    <ServiceCards />
    <!-- call To Action section is here -->
    <CallToActionSection />
  </div>
</template>

<script>
import heroSection from "@/components/servicePageSections/ServiceHero.vue";
import ServiceCards from "@/components/servicePageSections/ServiceCards.vue";
import CallToActionSection from "@/components/CallToActionSection.vue";

export default {
  name: "servicePage",
  components: {
    heroSection,
    ServiceCards,
    CallToActionSection,
  },
  data() {
    return {
      //
    };
  },
};
</script>
