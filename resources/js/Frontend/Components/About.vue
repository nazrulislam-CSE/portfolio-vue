<template>
  <section id="about" class="relative py-20 px-6 md:px-10 lg:px-40 overflow-hidden rounded-2xl shadow-xl">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 bg-gradient-animated opacity-40 -z-10 transition-all duration-1000 ease-in-out"></div>

    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
      <!-- Left Photo -->
      <div class="flex justify-center md:justify-start">
        <img
          src="/upload/images/sumon.png"
          alt="Profile Photo"
          class="w-full h-auto rounded-2xl shadow-xl animate-float transition-transform duration-700 hover:scale-105"
        />
      </div>

      <!-- Right Info -->
      <div class="flex flex-col justify-center space-y-6">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 animate-slide-fade-left">
          About Me
        </h2>
       <p class="text-gray-600 text-base md:text-lg lg:text-xl animate-slide-fade-left animate-delay-100">
  I am a Finance Director with years of experience in financial planning, budgeting, and strategic management. 
  Skilled in optimizing financial operations and driving sustainable growth for the organization.
</p>


        <div class="grid grid-cols-2 gap-x-6 gap-y-4 text-gray-700 font-medium animate-slide-fade-left animate-delay-200">
          <div><span class="font-semibold">Name:</span> Naimul Islam Sumon</div>
          <div><span class="font-semibold">Country:</span> Bangladesh</div>
          <div><span class="font-semibold">Businessman</span></div>
          <div><span class="font-semibold">University:</span> Uttara University</div>
          <div><span class="font-semibold">Languages:</span> Bangla, English</div>
          <div><span class="font-semibold">Address:</span> Tongi,Gazipur,Dhaka, Bangladesh</div>
        </div>

        <!-- <div class="mt-4 animate-slide-fade-left animate-delay-300">
          <a
            href="#"
            class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition duration-500 hover:scale-105"
          >
            Download CV
          </a>
        </div> -->
      </div>
    </div>

    <!-- Cursor / Mouse Reactive Bottom Carousel -->
    <div class="absolute bottom-0 left-0 w-full flex justify-center space-x-4 pb-6">
      <div
        v-for="n in 6"
        :key="n"
        class="w-3 h-3 rounded-full bg-indigo-500 opacity-70 animate-bounce"
        :style="{ animationDelay: `${n * 0.2}s` }"
      ></div>
    </div>
  </section>
</template>

<style scoped>
/* Slide Animations */
@keyframes slideFadeLeft {
  0% { opacity: 0; transform: translateX(-50px); }
  100% { opacity: 1; transform: translateX(0); }
}
.animate-slide-fade-left { animation: slideFadeLeft 1s ease forwards; }
.animate-delay-100 { animation-delay: 0.3s; }
.animate-delay-200 { animation-delay: 0.6s; }
.animate-delay-300 { animation-delay: 0.9s; }

/* Floating animation for photo */
@keyframes float {
  0%,100% { transform: translateY(0); }
  25% { transform: translateY(-10px); }
  50% { transform: translateY(-15px); }
  75% { transform: translateY(-10px); }
}
.animate-float { animation: float 6s ease-in-out infinite; }

/* Gradient Background Animation */
@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  25% { background-position: 50% 50%; }
  50% { background-position: 100% 50%; }
  75% { background-position: 50% 50%; }
  100% { background-position: 0% 50%; }
}
.bg-gradient-animated {
  background: linear-gradient(270deg, #a5b4fc, #fcd34d, #f472b6, #60a5fa, #34d399, #facc15);
  background-size: 1200% 1200%;
  animation: gradientMove 25s ease-in-out infinite;
  transition: all 1s ease-in-out;
}

/* Bottom bouncing dots */
@keyframes bounce {
  0%,100% { transform: translateY(0); opacity: 0.7; }
  50% { transform: translateY(-10px); opacity: 1; }
}
.animate-bounce { animation: bounce 1s infinite ease-in-out; }
</style>
