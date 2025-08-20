<template>
  <section id="team" class="relative bg-gray-50 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 text-center animate-slide-fade-up">
        My Team
      </h2>

      <!-- Team Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        <div v-for="(member, index) in team" :key="index"
             class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-500 animate-slide-fade-up"
             :style="{ animationDelay: `${index * 0.2}s` }">

          <!-- Photo with floating animation -->
<div class="relative overflow-hidden">
  <a :href="member.website" target="_blank">
    <img 
      :src="member.photo" 
      :alt="member.name" 
      class="w-full h-64 object-cover animate-floating transition-transform duration-500 hover:scale-105 rounded-t-xl shadow-md" 
    />
  </a>
  <!-- Social Icons -->
  <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-4 opacity-0 hover:opacity-100 transition duration-300">
    <a v-for="icon in member.social" :key="icon.name" :href="icon.link" target="_blank" class="bg-indigo-600 text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg hover:bg-indigo-500 transition">
      <i :class="icon.icon"></i>
    </a>
  </div>
</div>


          <!-- Info -->
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold text-gray-800">{{ member.name }}</h3>
            <p class="text-indigo-600 font-medium text-sm">{{ member.role }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const team = [
  {
    name: 'Bkolpo Construction Ltd',
    role: 'Finance Director',
    photo: '/upload/images/team/bkolpo.jpg',
    website: 'https://www.bkolpo.com.bd',
    social: [
      { name: 'Facebook', icon: 'fab fa-facebook', link: 'https://www.facebook.com/BKOLPOConstruction' },
    ],
  },
  {
    name: 'Bkolpo Technologies Ltd',
    role: 'Finance Director',
    photo: '/upload/images/team/technologies.jpg',
    website: 'https://www.bkolpo.com',
    social: [
      { name: 'Facebook', icon: 'fab fa-facebook', link: 'https://www.facebook.com/share/19oYodzZYr/' },
    ],
  },
  {
    name: 'Bkolpo Landmark Ltd',
    role: 'Finance Director',
    photo: '/upload/images/team/landmark.jpg',
    website: 'https://www.landmark.com',
    social: [
      { name: 'Facebook', icon: 'fab fa-facebook', link: '#' },
    ],
  },
]

</script>

<style scoped>
/* Slide Up Animation */
@keyframes slideFadeUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-slide-fade-up {
  animation: slideFadeUp 1s ease forwards;
}

/* Floating Photo Animation */
@keyframes floating {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}
.animate-floating {
  animation: floating 4s ease-in-out infinite;
}
</style>
