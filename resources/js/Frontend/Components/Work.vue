<template>
  <section id="work" class="relative bg-gray-100 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 text-center animate-slide-fade-up">
        My Work
      </h2>

      <!-- Projects Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project Card -->
        <div v-for="(project, index) in projects" :key="index" 
             class="relative bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-500 animate-slide-fade-up"
             :style="{ animationDelay: `${index * 0.2}s` }">
          <img :src="project.image" :alt="project.title" class="w-full h-52 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ project.title }}</h3>
            <p class="text-gray-600 text-sm">{{ project.description }}</p>
          </div>
          <!-- Overlay on hover -->
          <div class="absolute inset-0 bg-black/30 opacity-0 hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">
            View Project
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const projects = [
  { 
    title: 'Residential Complex Design', 
    description: 'Design and supervision of a multi-story residential building', 
    image: '/upload/images/work/work1.png' 
  },
  { 
    title: 'Bridge Construction', 
    description: 'Structural design and project management for a small bridge', 
    image: '/upload/images/work/work2.png' 
  },
  { 
    title: 'Highway Road Project', 
    description: 'Planning, design, and construction supervision of a highway', 
    image: '/upload/images/work/work3.png' 
  },
  { 
    title: 'Commercial Building', 
    description: 'Civil engineering design and site management for a commercial complex', 
    image: '/upload/images/work/work4.jpg' 
  },
  { 
    title: 'Water Treatment Plant', 
    description: 'Design and construction oversight for a municipal water treatment plant', 
    image: '/upload/images/work/work5.jpg' 
  },
  { 
    title: 'Industrial Facility Construction', 
    description: 'Civil engineering work for industrial plant setup including PEB structures', 
    image: '/upload/images/work/work6.jpg' 
  },
];

</script>

<style scoped>
/* Slide up animation */
@keyframes slideFadeUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-slide-fade-up {
  animation: slideFadeUp 1s ease forwards;
}
</style>
