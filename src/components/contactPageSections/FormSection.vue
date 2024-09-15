<template>
  <div class="bg-themebgcolor px-3 pb-16">
    <div class="grid grid-cols-7 gap-14 max-w-[1200px] mx-auto">
      <!-- Contact Form Section -->
      <div class="bg-white md:col-span-5 col-span-7 px-6 py-10 wow animate__animated animate__fadeInLeft">
        <form @submit.prevent="submitContactForm">
          <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">{{ $t("contact.full_name") }}*</label><br />
              <input v-model="formData.name" type="text" :placeholder="$t('contact.enter_full_name')" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">{{ $t("contact.email") }}*</label><br />
              <input v-model="formData.email" type="email" :placeholder="$t('contact.enter_email')" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
          </div>

          <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">{{ $t("contact.phone_number") }}*</label><br />
              <input v-model="formData.phone" type="number" :placeholder="$t('contact.enter_phone_number')" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
            <div>
              <label class="font-bevietnam text-headingclr font-light text-lg">{{ $t("contact.subject") }}*</label><br />
              <input v-model="formData.subject" type="text" :placeholder="$t('contact.subject')" class="bg-themebgcolor px-4 py-3 mt-2 mb-6 w-full" required />
            </div>
          </div>

          <label class="font-bevietnam text-headingclr font-light text-lg">{{ $t("contact.message") }}*</label><br />
          <textarea v-model="formData.message" :placeholder="$t('contact.type_message')" class="bg-themebgcolor px-4 py-3 mt-2 w-full h-40" required></textarea>

          <button class="bg-navbgcolor font-bevietnam rounded px-4 py-2 text-white mt-4 font-bold text-sm hover:bg-black">
            {{ $t("contact.send_message") }}
          </button>
          <p v-if="successMessage" class="mt-4 text-green-500">{{ successMessage }}</p>
        </form>
      </div>

      <!-- Contact Details Section -->
      <div class="bg-white md:col-span-2 col-span-7 flex flex-col px-6 divide-y wow animate__animated animate__fadeInRight">
        <div class="py-6">
          <img src="music.png" alt="user" class="mx-auto" />
          <h3 class="font-bevietnam text-center text-headingclr font-bold text-2xl mt-2">
            {{ $t("contact.our_contact") }}
          </h3>
          <p class="font-bevietnam text-center text-[#333] font-light text-lg mt-2">{{ $t("contact.phone") }}</p>
        </div>
        <div class="py-6">
          <img src="Group 9156.png" alt="user" class="mx-auto" />
          <h3 class="font-bevietnam text-center text-headingclr font-bold text-2xl mt-2">
            {{ $t("contact.mail_us") }}
          </h3>
          <p class="font-bevietnam text-center text-[#333] font-light text-lg mt-2">{{ $t("contact.email_address") }}</p>
        </div>
        <div class="py-6">
          <img src="Group 9023.png" alt="user" class="mx-auto" />
          <h3 class="font-bevietnam text-center text-headingclr font-bold text-2xl mt-2">
            {{ $t("contact.our_location") }}
          </h3>
          <p class="font-bevietnam text-center text-[#333] font-light text-lg mt-2">{{ $t("contact.address") }}</p>
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
        const formData = new FormData();
        formData.append('name', this.formData.name);
        formData.append('email', this.formData.email);
        formData.append('phone', this.formData.phone);
        formData.append('subject', this.formData.subject);
        formData.append('message', this.formData.message);

        const response = await axios.post("/action.php", formData, {
          headers: {
            'Content-Type': 'multipart/form-data', // Make sure this header is set
          },
        });

        if (response.data.success) {
          this.successMessage = "Your message has been sent successfully!";
        } else {
          this.successMessage = "Failed to send message. Please try again.";
        }
      } catch (error) {
        console.error("Error sending message:", error);
        this.successMessage = "An error occurred. Please try again.";
      }
    }
  },
  mounted() {
    new WOW().init();
  }
};
</script>
