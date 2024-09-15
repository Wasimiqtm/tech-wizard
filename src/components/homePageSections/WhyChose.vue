<template>
    <div class="">
        <div class="max-w-[1200px] mx-auto py-16 px-2">
            <h1 class="text-headingclr text-4xl font-bold font-bevietnam text-center">
                <span class="text-navbgcolor"> {{ $t("why_choose_title") }}</span> Tech Wizard?
            </h1>

            <hr class="bg-[#CFCFCF] mt-10" />
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5 mt-16">
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInLeft">
                    <img src="Expertise.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        {{ $t("expertise_title") }}
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        {{ $t("expertise_des") }}
                    </p>
                </div>
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInRight">
                    <img src="Customized Solutions.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        {{ $t("customized_solutions_title") }}
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        {{ $t("customized_solutions_des") }}
                    </p>
                </div>
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInUp">
                    <img src="Security First.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        {{ $t("security_first_title") }}
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        {{ $t("security_first_des") }}
                    </p> 
                </div>
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInDown">
                    <img src="Continuous Support.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        {{ $t("continuous_support_title") }}
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        {{ $t("continuous_support_des") }}
                    </p>
                </div>
            </div>
            
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
            //   
        };
    },
    mounted() {
    // Initialize WOW.js
    new WOW().init();
  }
};
</script>