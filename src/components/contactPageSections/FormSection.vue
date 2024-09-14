<template>
  <div class="bg-themebgcolor px-3 pb-16">
    <div class="grid grid-cols-7 gap-14 max-w-[1200px] mx-auto">
      <!-- Contact Form Section -->
      <div class="bg-white md:col-span-5 col-span-7 px-6 py-10 wow animate__animated animate__fadeInLeft">
        <form @submit.prevent="submitContactForm">
          <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">Full Name*</label><br />
              <input v-model="formData.name" type="text" placeholder="Enter Your Full Name" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">Email*</label><br />
              <input v-model="formData.email" type="email" placeholder="Enter Your Email" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
          </div>

          <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">Phone Number*</label><br />
              <input v-model="formData.phone" type="number" placeholder="Enter Your Phone Number" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">Subject*</label><br />
              <input v-model="formData.subject" type="text" placeholder="Subject" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
          </div>

          <label class="font-bevietnam text-headingclr font-light text-lg">Message*</label><br />
          <textarea v-model="formData.message" placeholder="Type Message Here" class="bg-themebgcolor px-4 py-3 mt-2 w-full h-40" required></textarea>

          <button class="bg-navbgcolor font-bevietnam rounded px-4 py-2 text-white mt-4 font-bold text-sm hover:bg-black">
            Send Message
          </button>
          <p v-if="successMessage" class="mt-4 text-green-500">{{ successMessage }}</p>
        </form>
      </div>

      <!-- Contact Details Section -->
      <div class="bg-white md:col-span-2 col-span-7 flex flex-col px-6 divide-y wow animate__animated animate__fadeInRight">
        <div class="py-6">
          <img src="music.png" alt="user" class="mx-auto" />
          <h3 class="font-bevietnam text-center text-headingclr font-bold text-2xl mt-2">
            Our Contact
          </h3>
          <p class="font-bevietnam text-center text-[#333] font-light text-lg mt-2">+1 (463) 289-7828</p>
        </div>
        <div class="py-6">
          <img src="Group 9156.png" alt="user" class="mx-auto" />
          <h3 class="font-bevietnam text-center text-headingclr font-bold text-2xl mt-2">
            Mail Us
          </h3>
          <p class="font-bevietnam text-center text-[#333] font-light text-lg mt-2">contact@teckywizard.com</p>
        </div>
        <div class="py-6">
          <img src="Group 9023.png" alt="user" class="mx-auto" />
          <h3 class="font-bevietnam text-center text-headingclr font-bold text-2xl mt-2">
            Our Location
          </h3>
          <p class="font-bevietnam text-center text-[#333] font-light text-lg mt-2">1682 Copeland Farms Dr, Greenfield IN 46140</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import WOW from 'wow.js';
import 'animate.css';
import axios from "axios";

export default {
  name: "contactFormSection",
  data() {
    return {
      formData: {
        name: "",
        email: "",
        phone: "",
        subject: "",
        message: ""
      },
      successMessage: null,
    };
  },
  methods: {
    async submitContactForm() {
      try {
        const baseURL = process.env.VUE_APP_BASE_URL; // Access the base URL from the environment file
        const response = await axios.post(`${baseURL}/action.php`, this.formData);
        
        if (response.data.success) {
          this.successMessage = "Your message has been sent successfully!";
        } else {
          this.successMessage = "Failed to send message. Please try again.";
        }
      } catch (error) {
        console.error("Error sending message:", error);
        this.successMessage = "An error occurred. Please try again.";
      }
    },
  },
  mounted() {
    new WOW().init();
  }
};
</script>
