<template>
    <div class="">
        <!-- cards -->
        <section class="bg-themebgcolor px-2 py-20 mt-20">
            <div class="max-w-[1200px] mx-auto">
                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-5 px-2 items-center">
                    <div class="lg:pr-2  wow animate__animated animate__fadeInLeft">
                        <img src="big-1.png" alt="user" class="w-full" />
                    </div>
                    <div class="lg:pl-2  wow animate__animated animate__fadeInRight">
                        <h2 class="text-black text-4xl font-bold font-bevietnam">
                            <span class="text-headingblue"> {{ $t("service_one_title1") }}</span> {{ $t("service_one_title2") }}
                        </h2>
                        <p class="font-bevietnam mt-4 font-normal text-lg text-textcolor">
                            {{ $t("service_one_des") }}
                        </p>
                        <div class="self-center">
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("requirements_analysis") }}: </b> {{ $t("requirements_analysis_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("architecture_design") }}: </b> {{ $t("architecture_design_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("development_and_testing") }}: </b> {{ $t("development_and_testing_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("deployment_and_maintenance") }} </b> {{ $t("deployment_and_maintenance_des") }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 px-2">
            <div class="max-w-[1200px] mx-auto wow animate__animated animate__fadeInDown">
                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-5 px-2 items-center">
                    <div class="lg:pr-2 lg:order-1 order-2">
                        <h2 class="text-black text-4xl font-bold font-bevietnam">
                            <span class="text-headingblue">{{ $t("service_two_title1") }}</span> {{ $t("service_two_title2") }}
                        </h2>
                        <p class="font-bevietnam mt-4 font-normal text-lg text-textcolor">
                            {{ $t("service_two_des") }}
                            
                        </p>
                        <div class="self-center">
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("code_scanning_and_review") }}: </b> {{ $t("code_scanning_and_review_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("security_consulting") }}: </b> {{ $t("security_consulting_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("threat_modeling") }}: </b> {{ $t("threat_modeling_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("security_training") }}: </b> {{ $t("security_training_des") }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:pl-2  lg:order-2 order-1">
                        <img src="big-2.png" alt="user" class="w-full" />
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-themebgcolor px-2 py-20">
            <div class="max-w-[1200px] mx-auto">
                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-5 px-2 items-center">
                    <div class="lg:pr-2  wow animate__animated animate__fadeInLeft">
                        <img src="big-3.png" alt="user" class="w-full" />
                    </div>
                    <div class="lg:pl-2  wow animate__animated animate__fadeInRight">
                        <h2 class="text-black text-4xl font-bold font-bevietnam">
                            <span class="text-headingblue">{{ $t("service_three_title1") }}</span> {{ $t("service_three_title2") }}
                        </h2>
                        <p class="font-bevietnam mt-4 font-normal text-lg text-textcolor">
                            {{ $t("service_three_des") }}
                            
                        </p>
                        <div class="self-center">
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b> {{ $t("dynamic_website_testing") }} </b> {{ $t("dynamic_website_testing_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b>{{ $t("network_penetration_testing") }}: </b> {{ $t("network_penetration_testing") }} </p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b> {{ $t("mobile_app_testing") }}: </b> {{ $t("mobile_app_testing_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b> {{ $t("reporting_and_remediation") }}: </b> {{ $t("reporting_and_remediation_des") }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 px-2">
            <div class="max-w-[1200px] mx-auto wow animate__animated animate__fadeInUp">
                <div class="grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-5 px-2 items-center">
                    <div class="lg:pr-2 lg:order-1 order-2">
                        <h2 class="text-black text-4xl font-bold font-bevietnam">
                            <span class="text-headingblue">{{ $t("service_four_title1") }}</span> {{ $t("service_four_title2") }}
                        </h2>
                        <p class="font-bevietnam mt-4 font-normal text-lg text-textcolor">
                            {{ $t("service_four_des") }}
                        </p>
                        <div class="self-center">
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b> {{ $t("regulatory_analysis") }}: </b> {{ $t("regulatory_analysis_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b> {{ $t("compliance_audits") }}: </b> {{ $t("compliance_audits_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b> {{ $t("policy_development") }}: </b> {{ $t("policy_development_des") }}</p>
                            </div>
                            <div class="flex my-4 items-start">
                                <img src="Group-1000002024.png" alt="user" class="h-7 mr-3 mt-1" />
                                <p class="text-lg font-bevietnam"><b> {{ $t("ongoing_monitoring") }}: </b>{{ $t("ongoing_monitoring") }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="lg:pl-2 lg:order-2 order-1">
                        <img src="big-4.png" alt="user" class="w-full" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import WOW from 'wow.js'; // Import WOW.js
import 'animate.css'; // Import Animate.css
export default {
    name: "ServiceCards",
    data() {
        return {
            // servises: [

            //   {
            //     title: "Embroidery Digitizing",
            //     img: "Rectangle 4808.png",
            //     priceTitle: "Price",
            //     price: "$15",
            //   },
            //   {
            //     title: "Embroidery Digitizing",
            //     img: "Rectangle 4810.png",
            //     priceTitle: "Price",
            //     price: "$15",
            //   },


            // ],
        };
    },
    mounted() {
    // Initialize WOW.js
    new WOW().init();
  }
};

</script>

