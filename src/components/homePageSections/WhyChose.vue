<template>
    <div class="">
        <div class="max-w-[1200px] mx-auto py-16 px-2">
            <h1 class="text-headingclr text-4xl font-bold font-bevietnam text-center">
                <span class="text-navbgcolor">Why Choose</span> Tech Wizard?
            </h1>

            <hr class="bg-[#CFCFCF] mt-10" />
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5 mt-16">
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInLeft">
                    <img src="Expertise.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        Expertise
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        Our team comprises industry experts with years of experience in software development, security, and compliance.
                    </p>
                </div>
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInRight">
                    <img src="Customized Solutions.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        Customized Solutions
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        We tailor our services to meet the unique needs of each client.
                    </p>
                </div>
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInUp">
                    <img src="Security First.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        Security First
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        We prioritize the security of your applications and data in every project we undertake.
                    </p>
                </div>
                <div class="bg-themebgcolor rounded-xl p-3 shadow-lg wow animate__animated animate__fadeInDown">
                    <img src="Continuous Support.svg" alt="user" class="w-28 mx-auto block" />
                    <h2 class="text-2xl text-center font-bold font-bevietnam text-cardheadingclr">
                        Continuous Support
                    </h2>
                    <p class="text-lg text-center font-normal font-bevietnam text-textcolor">
                        Our commitment to your success doesn’t end with deployment. We provide ongoing support and maintenance to ensure your systems remain secure and efficient.
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