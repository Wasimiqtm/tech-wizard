<template>
  <div class="bg-black p-3">
    <div class="max-w-[1200px] mx-auto">
      <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-4 mt-14">
        <div class="md:col-span-2">
          <img src="Asset.svg" alt="user" class="w-28" />
          <p class="text-white text-base font-bevietnam opacity-[0.7] mt-4 md:pr-5">
            {{ $t("footer.description") }}
          </p>
        </div>
        <div>
          <h2 class="text-lg font-bevietnam text-white font-semibold">
            {{ $t("footer.our_links") }}
          </h2>
          <ul class="text-white text-sm font-bevietnam opacity-[0.7] cursor-pointer">
            <li class="mt-2">
              <router-link to="/">{{ $t("footer.home") }}</router-link>
            </li>
            <li class="mt-2">
              <router-link to="/services">{{ $t("footer.services") }}</router-link>
            </li>
            <li class="mt-2">
              <router-link to="/contact">{{ $t("footer.contact_us") }}</router-link>
            </li>
          </ul>
        </div>
        <div>
          <h2 class="text-lg font-bevietnam text-white font-semibold">
            {{ $t("footer.get_in_touch") }}
          </h2>
          <ul class="text-white text-sm font-bevietnam opacity-[0.7]">
            <li class="mt-2 flex">
              <img src="icon.png" alt="user" class="h-4" />
              <a class="ml-3">{{ $t("footer.phone") }}</a>
            </li>
            <li class="mt-3 flex">
              <img src="mail.png" alt="user" class="h-4" />
              <a class="ml-3">{{ $t("footer.email") }}</a>
            </li>
            <li class="mt-3 flex">
              <img src="map-marker.png" alt="user" class="h-4" />
              <a class="ml-3">{{ $t("footer.address") }}</a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="bg-white mt-7" />
      <p class="text-center text-white text-sm font-bevietnam opacity-[0.7] mt-5 mb-3">
        {{ $t("footer.copyright") }}
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
