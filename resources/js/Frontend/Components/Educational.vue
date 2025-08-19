<template>
  <section id="education" class="relative bg-gray-50 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 text-center animate-slide-fade-left">
        Educational Qualifications
      </h2>

      <!-- Education Grid: 2 per row on md+ screens -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 animate-slide-fade-left hover:shadow-2xl transition duration-500">
          <div class="flex items-center mb-4">
            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 font-bold text-xl mr-4">
              BSC
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800">Bachelor of Science in Civil Engineering</h3>
              <p class="text-gray-600">Uttara University, Running</p>
            </div>
          </div>
          <!-- <p class="text-gray-500">CGPA: 3.85 / 4.00</p> -->
        </div>

        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 animate-slide-fade-left animate-delay-100 hover:shadow-2xl transition duration-500">
          <div class="flex items-center mb-4">
            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 font-bold text-sm mr-4">
              DIPLOMA
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800">Diploma In Engineering</h3>
              <p class="text-gray-600">Civil Engineering, 2019 - 2024</p>
               <p class="text-gray-600">Uttara Engineering Collage</p>
            </div>
          </div>
          <!-- <p class="text-gray-500">GPA: 5.00 / 5.00</p> -->
        </div>

        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 animate-slide-fade-left animate-delay-200 hover:shadow-2xl transition duration-500">
          <div class="flex items-center mb-4">
            <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center text-indigo-600 font-bold text-xl mr-4">
              SSC
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-800">Secondary School Certificate</h3>
              <p class="text-gray-600">Hazi Fojor Ali Adhorsho Biddaniketon School, 2017 - 2019</p>
            </div>
          </div>
          <!-- <p class="text-gray-500">GPA: 5.00 / 5.00</p> -->
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
@keyframes slideFadeLeft {
  0% { opacity: 0; transform: translateX(-50px); }
  100% { opacity: 1; transform: translateX(0); }
}

.animate-slide-fade-left { animation: slideFadeLeft 1s ease forwards; }
.animate-delay-100 { animation-delay: 0.3s; }
.animate-delay-200 { animation-delay: 0.6s; }
</style>
