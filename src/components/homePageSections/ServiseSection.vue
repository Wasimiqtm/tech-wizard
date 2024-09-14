<template>
  <div class="bg-themebgcolor mt-16">
    <div class="max-w-[1200px] mx-auto py-16 px-2">
      <h1 class="text-headingclr text-4xl font-bold font-bevietnam text-center">
        Our Services
      </h1>
     
      <hr class="bg-[#CFCFCF] mt-10" />
      <div class=" grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-5 mt-20">
        <div v-for="(card, index) in serviseCards" :key="index" class="bg-white wow animate__animated animate__zoomIn rounded-xl p-3 shadow-lg cursor-pointer"
          @click="$router.push('/services')">
          <div class="flex justify-between px-3 py-2 items-center">
            <h2 class="text-xl font-bold font-bevietnam text-cardheadingclr max-w-[165px]">
              {{ card.title }}
            </h2>
            <img :src="card.icon" alt="user" class="h-12" />
          </div>
          <img :src="card.img" alt="user" class="mt-3 w-full" />
        </div>
      </div>
      <button
        class="bg-navbgcolor font-bevietnam rounded px-4 py-2 flex text-white mx-auto mt-12 font-medium text-md items-center hover:bg-black"
        @click="$router.push('/services')">
        View More<img src="Arrow 4.png" alt="user" class="ml-2 h-3.5" />
      </button>
    </div>
  </div>
</template>

<script>
import WOW from 'wow.js'; // Import WOW.js
import 'animate.css'; // Import Animate.css
export default {
  name: "serviseSection",
  data() {
    return {
      serviseCards: [
        {
          icon: "Group 1000002025.png",
          title: "Software Design and Development",
          img: "one.png",
        },
        {
          icon: "Group 1000002025.png",
          title: "Application Security",
          img: "two.png",
        },
        {
          icon: "Group 1000002025.png",
          title: "Penetration Testing",
          img: "three.png",
        },
        {
          icon: "Group 1000002025.png",
          title: "Compliance Assistance",
          img: "four.png",
        },
      ],
    };
  },
  mounted() {
    // Initialize WOW.js
    new WOW().init();
  }
};
</script>
