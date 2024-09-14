<template>
  <div class="bg-black p-3">
    <div class="max-w-[1200px] mx-auto">
      <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4 mt-14">
        <div class="md:col-span-2">
          <img src="Asset.svg" alt="user" class="w-28" />
          <p class="text-white text-base font-bevietnam opacity-[0.7] mt-4 md:pr-5">
            Tech Wizard - Building and Securing the Future of Technology.
          </p>
        </div>
        <div>
          <h2 class="text-lg font-bevietnam text-white font-semibold">
            Our Links
          </h2>
          <ul class="text-white text-sm font-bevietnam opacity-[0.7] cursor-pointer">
            <li class="mt-2">
              <router-link to="/">Home</router-link>
            </li>
            <li class="mt-2">
              <router-link to="/services">Our Services</router-link>
            </li>
            <li class="mt-2">
              <router-link to="/contact">Contact Us</router-link>
            </li>
          </ul>
        </div>
        
        <div >
          <h2 class="text-lg font-bevietnam text-white font-semibold">
            Get In Touch
          </h2>
          <ul class="text-white text-sm font-bevietnam opacity-[0.7]">
            <li class="mt-2 flex">
              <img src="icon.png" alt="user" class="h-4" />
              <a class="ml-3">+1 (463) 289-7828</a>
            </li>
            <li class="mt-3 flex">
              <img src="mail.png" alt="user" class="h-4" />
              <a class="ml-3">contact@teckywizard.com</a>
            </li>
            <li class="mt-3 flex">
              <img src="map-marker.png" alt="user" class="h-4" />
              <a class="ml-3"
                >1682 Copeland Farms Dr, Greenfield IN 46140</a
              >
            </li>
          </ul>
        </div>
      </div>
      <hr class="bg-white mt-7" />
      <p
        class="text-center text-white text-sm font-bevietnam opacity-[0.7] mt-5 mb-3"
      >
        Copyright © 2024 All rights reserved
      </p>
    </div>
  </div>
</template>
<script>
export default {
  name: "pageFooter",
  data() {
    return {
      //
    };
  },
};
</script>
