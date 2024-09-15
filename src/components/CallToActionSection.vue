<template>
  <div class="bg-themebgcolor py-16">
    <section class="max-w-[1200px] md:mx-auto bg-white mx-2">
    <div class=" md:p-12 p-6 mx-4">
      <h1 class="text-navbgcolor text-4xl font-bold font-bevietnam text-center">
        
        {{ $t("call_to_action") }}
      </h1>
      <p class="font-bevietnam text-center max-w-[1010px] mx-auto mt-4 font-normal text-lg text-textcolor">
        "{{ $t("call_to_action_des") }}"
      </p>
      <button
        class="bg-navbgcolor font-bevietnam rounded px-4 py-2 flex text-white mx-auto mt-8 font-bold text-sm items-center hover:bg-black"
        @click="$router.push('/contact')">
        {{ $t("contact_us_btn") }}
      </button>
    </div>
  </section>
  </div>
</template>
