<template>
 <section
  id="hero"
  class="relative flex flex-col-reverse md:flex-row items-center px-4 sm:px-6 md:px-10 lg:px-40 
         pt-[150px] pb-12 md:pt-0 md:pb-0 text-gray-900 min-h-[70vh] md:min-h-screen overflow-hidden"
>


    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-100 via-pink-100 to-purple-100 animate-gradient"></div>

    <div
      class="relative z-10 w-full max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center justify-between"
    >
      <!-- Left Content -->
      <div class="mt-6 md:mt-0 md:w-1/2 text-center md:text-left">
        <h2 class="mb-4 sm:mb-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif font-bold">
          <span class="block text-gray-800 animate-[fadeInLeft_1s_ease-out] drop-shadow-[2px_2px_6px_rgba(0,0,0,0.25)]">
            Hi, I'm
          </span>
          <span class="inline-block text-indigo-600 font-serif animate-[slideUp_1s_ease-out_0.3s_forwards] drop-shadow-[0_0_8px_rgba(79,70,229,0.7)] transition-all duration-700 hover:scale-105 hover:drop-shadow-[0_0_12px_rgba(79,70,229,0.9)]">
            Naimul Islam Sumon
          </span>
        </h2>

        <p class="mb-6 text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 animate-[fadeInLeft_1s_ease-out_0.5s_forwards] leading-relaxed">
          Finance Director with extensive experience in financial planning, budgeting, and strategic management. Skilled in overseeing financial operations to drive growth and ensure compliance.
        </p>

        <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start animate-[fadeInLeft_1s_ease-out_0.7s_forwards]">
          <a href="#work" class="rounded-lg bg-indigo-600 px-5 py-2 sm:px-6 sm:py-3 text-white shadow-lg transition duration-300 hover:bg-indigo-700">
            View My Work
          </a>
          <a href="#contact" class="rounded-lg border border-indigo-600 px-5 py-2 sm:px-6 sm:py-3 text-indigo-600 transition duration-300 hover:bg-indigo-600 hover:text-white">
            Hire Me
          </a>
        </div>
      </div>

      <!-- Right Illustration -->
      <div class="relative md:w-1/2 flex justify-center md:justify-end mb-6 md:mb-0 animate-[fadeInRight_1s_ease-out_0.5s_forwards]">
        <img src="/upload/images/hero4.jpg" alt="Hero Illustration" 
          class="w-36 h-36 sm:w-44 sm:h-44 md:w-64 md:h-64 lg:w-80 lg:h-80 rounded-2xl shadow-xl animate-circle border-4 border-indigo-100 object-cover"
        />
      </div>
    </div>
  </section>
</template>


<style>
/* Slide Animations */
@keyframes fadeInLeft {
  0% { opacity: 0; transform: translateX(-30px); }
  100% { opacity: 1; transform: translateX(0); }
}
@keyframes fadeInRight {
  0% { opacity: 0; transform: translateX(30px); }
  100% { opacity: 1; transform: translateX(0); }
}
@keyframes slideUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Floating animation for image */
@keyframes circle {
  0%   { transform: translate(0, 0); }
  25%  { transform: translate(6px, -6px); }
  50%  { transform: translate(0, -12px); }
  75%  { transform: translate(-6px, -6px); }
  100% { transform: translate(0, 0); }
}

/* Animated gradient background */
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

/* Utility Classes */
.animate-circle { animation: circle 4s ease-in-out infinite; }
.animate-gradient {
  background-size: 200% 200%;
  animation: gradientMove 8s ease infinite;
}

/* Tailwind-like animation syntax */
.animate-\[fadeInLeft_1s_ease-out\] { animation: fadeInLeft 1s ease-out forwards; }
.animate-\[fadeInRight_1s_ease-out_0\.5s_forwards\] { animation: fadeInRight 1s ease-out 0.5s forwards; }
.animate-\[slideUp_1s_ease-out_0\.3s_forwards\] { animation: slideUp 1s ease-out 0.3s forwards; }
</style>
