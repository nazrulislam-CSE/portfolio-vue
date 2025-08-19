<template>
  <section id="services" class="relative bg-white py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 text-center animate-slide-fade-left">
        My Services
      </h2>

      <!-- Services Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

  <!-- Consultancy -->
  <div class="bg-indigo-50 rounded-lg p-6 shadow-lg hover:shadow-2xl transition duration-500 animate-slide-fade-left hover:-translate-y-2 flex flex-col items-center text-center">
    <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-4 text-xl transition transform duration-300 hover:scale-110">
      <i class="fas fa-user-tie"></i>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 mb-2">CONSULTANCY</h3>
    <p class="text-gray-600 text-sm">
      We specialize in providing comprehensive consultancy services tailored for the setup (RMG, Footwear, Pharma Industry).
    </p>
  </div>

  <!-- Turn-key Construction -->
  <div class="bg-indigo-50 rounded-lg p-6 shadow-lg hover:shadow-2xl transition duration-500 animate-slide-fade-left animate-delay-100 hover:-translate-y-2 flex flex-col items-center text-center">
    <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-4 text-xl transition transform duration-300 hover:scale-110">
      <i class="fas fa-hard-hat"></i>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 mb-2">TURN-KEY CONSTRUCTION</h3>
    <p class="text-gray-600 text-sm">
      Leaders in heavy civil construction, dedicated to building critical infrastructure that supports communities.
    </p>
  </div>

  <!-- PEB / Pre-engineered Building -->
  <div class="bg-indigo-50 rounded-lg p-6 shadow-lg hover:shadow-2xl transition duration-500 animate-slide-fade-left animate-delay-200 hover:-translate-y-2 flex flex-col items-center text-center">
    <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-4 text-xl transition transform duration-300 hover:scale-110">
      <i class="fas fa-building"></i>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 mb-2">PEB / PRE ENGINEERED BUILDING</h3>
    <p class="text-gray-600 text-sm">
      High-quality pre-engineered building solutions that combine efficiency, durability, and cost-effectiveness.
    </p>
  </div>

  <!-- Interior & Landscaping -->
  <div class="bg-indigo-50 rounded-lg p-6 shadow-lg hover:shadow-2xl transition duration-500 animate-slide-fade-left animate-delay-300 hover:-translate-y-2 flex flex-col items-center text-center">
    <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-4 text-xl transition transform duration-300 hover:scale-110">
      <i class="fas fa-paint-roller"></i>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 mb-2">INTERIOR & LANDSCAPING</h3>
    <p class="text-gray-600 text-sm">
      Creating beautiful and functional spaces through expert interior design and landscaping services.
    </p>
  </div>

  <!-- Real Estate Development -->
  <div class="bg-indigo-50 rounded-lg p-6 shadow-lg hover:shadow-2xl transition duration-500 animate-slide-fade-left animate-delay-400 hover:-translate-y-2 flex flex-col items-center text-center">
    <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-4 text-xl transition transform duration-300 hover:scale-110">
      <i class="fas fa-city"></i>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 mb-2">REAL ESTATE DEVELOPMENT</h3>
    <p class="text-gray-600 text-sm">
      Exceptional real estate services catering to the diverse needs of our clients. Check out previous projects.
    </p>
  </div>

  <!-- Trading of Construction Equipment -->
  <div class="bg-indigo-50 rounded-lg p-6 shadow-lg hover:shadow-2xl transition duration-500 animate-slide-fade-left animate-delay-500 hover:-translate-y-2 flex flex-col items-center text-center">
    <div class="w-12 h-12 bg-indigo-600 text-white rounded-full flex items-center justify-center mb-4 text-xl transition transform duration-300 hover:scale-110">
      <i class="fas fa-truck-loading"></i>
    </div>
    <h3 class="text-xl font-semibold text-gray-800 mb-2">TRADING OF CONSTRUCTION EQUIPMENT</h3>
    <p class="text-gray-600 text-sm">
      Supplying high-quality materials with a commitment to safety, durability, and efficiency.
    </p>
  </div>

</div>

    </div>
  </section>
</template>

<script setup></script>

<style scoped>
@keyframes slideFadeLeft {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}

.animate-slide-fade-left { animation: slideFadeLeft 1s ease forwards; }
.animate-delay-100 { animation-delay: 0.3s; }
.animate-delay-200 { animation-delay: 0.6s; }
.animate-delay-300 { animation-delay: 0.9s; }
.animate-delay-400 { animation-delay: 1.2s; }
.animate-delay-500 { animation-delay: 1.5s; }
</style>
