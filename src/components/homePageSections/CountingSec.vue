<template>
    <div class="bg-themebgcolor py-16">
      <!-- Display the number here -->
      <div class="max-w-[1200px] mx-auto px-2">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10">
          <!-- Counter 1 -->
          <div class="bg-white wow animate__animated animate__zoomIn rounded-xl p-5 shadow-lg">
            <div class="flex justify-center">
              <h2 ref="counter1" class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">
                {{ startVal1 }}
              </h2>
              <h2 class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">+</h2>
            </div>
            <p class="font-bevietnam text-center mt-2 font-bold text-xl text-textcolor">{{ $t('happy_clients') }}</p>
          </div>
  
          <!-- Counter 2 -->
          <div class="bg-white wow animate__animated animate__zoomIn rounded-xl p-5 shadow-lg">
            <div class="flex justify-center">
              <h2 ref="counter2" class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">
                {{ startVal2 }}
              </h2>
              <h2 class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">+</h2>
            </div>
            <p class="font-bevietnam text-center mt-2 font-bold text-xl text-textcolor">{{ $t('projects_completed') }}</p>
          </div>
  
          <!-- Counter 3 -->
          <div class="bg-white wow animate__animated animate__zoomIn rounded-xl p-5 shadow-lg">
            <div class="flex justify-center">
              <h2 ref="counter3" class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">
                {{ startVal3 }}
              </h2>
              <h2 class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">+</h2>
            </div>
            <p class="font-bevietnam text-center mt-2 font-bold text-xl text-textcolor">{{ $t('hours_of_support') }}</p>
          </div>
  
          <!-- Counter 4 -->
          <!-- <div class="bg-white wow animate__animated animate__zoomIn rounded-xl p-5 shadow-lg">
            <div class="flex justify-center">
              <h2 ref="counter4" class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">
                {{ startVal4 }}
              </h2>
              <h2 class="text-5xl font-bold text-center font-bevietnam text-navbgcolor">+</h2>
            </div>
            <p class="font-bevietnam text-center mt-2 font-bold text-xl text-textcolor">{{ $t('hard_workers') }}</p>
          </div> -->
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import { CountUp } from 'countup.js';
  
  export default {
    data() {
      return {
        startVal1: 0,
        endVal1: 100,
        startVal2: 0,
        endVal2: 50,
        startVal3: 0,
        endVal3: 1000,
        startVal4: 0,
        endVal4: 24,
        hasAnimated1: false,
        hasAnimated2: false,
        hasAnimated3: false,
        hasAnimated4: false,
      };
    },
    mounted() {
      this.observeElements(); // Start observing the elements when mounted
    },
    methods: {
      animateNumber(refName, endVal, hasAnimatedKey) {
        const countUp = new CountUp(this.$refs[refName], endVal, {
          duration: 4, // Animation duration in seconds
          separator: ',' // Add comma as a thousands separator
        });
  
        // Start the count animation
        if (!countUp.error) {
          countUp.start();
          this[hasAnimatedKey] = true; // Ensure the animation only runs once
        } else {
          console.error(countUp.error);
        }
      },
      observeElements() {
        // Create an IntersectionObserver to detect when the elements are in view
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              if (entry.target === this.$refs.counter1 && !this.hasAnimated1) {
                this.animateNumber('counter1', this.endVal1, 'hasAnimated1');
              }
              if (entry.target === this.$refs.counter2 && !this.hasAnimated2) {
                this.animateNumber('counter2', this.endVal2, 'hasAnimated2');
              }
              if (entry.target === this.$refs.counter3 && !this.hasAnimated3) {
                this.animateNumber('counter3', this.endVal3, 'hasAnimated3');
              }
              if (entry.target === this.$refs.counter4 && !this.hasAnimated4) {
                this.animateNumber('counter4', this.endVal4, 'hasAnimated4');
              }
            }
          });
        }, { threshold: [0.5] }); // Adjust threshold if needed
  
        // Observe all counters
        this.$refs.counter1 && observer.observe(this.$refs.counter1);
        this.$refs.counter2 && observer.observe(this.$refs.counter2);
        this.$refs.counter3 && observer.observe(this.$refs.counter3);
        this.$refs.counter4 && observer.observe(this.$refs.counter4);
      }
    }
  };
  </script>
  
  <style>
  /* Optional styling */
  </style>
  