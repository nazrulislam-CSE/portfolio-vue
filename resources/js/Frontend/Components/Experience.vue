<template>
  <section id="experience" class="relative bg-gray-50 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-16 text-center animate-slide-fade-up">
        My Experience
      </h2>

      <!-- Timeline -->
      <div class="relative before:absolute before:top-0 before:bottom-0 before:left-1/2 before:w-1 before:bg-indigo-200">
        <div v-for="(exp, index) in experiences" :key="index" 
             class="mb-12 flex flex-col md:flex-row items-center relative"
             :class="index % 2 === 0 ? 'md:flex-row' : 'md:flex-row-reverse'">
          
          <!-- Circle -->
          <div class="z-10 w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white font-semibold shadow-lg -translate-y-2 md:translate-y-0 animate-pulse">
            {{ index + 1 }}
          </div>

          <!-- Content Card -->
          <div class="bg-white shadow-lg rounded-lg p-6 md:w-5/12 ml-0 md:ml-8 mr-0 md:mr-8 animate-slide-fade-up" 
               :style="{ animationDelay: `${index * 0.3}s` }">
            <h3 class="text-xl font-semibold text-gray-800">{{ exp.role }}</h3>
            <p class="text-indigo-600 font-medium text-sm mt-1">{{ exp.company }} | {{ exp.period }}</p>
            <p class="text-gray-600 mt-2 text-sm">{{ exp.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const experiences = [
  { role: 'Finance Director', company: 'Bkkolpo Construction Ltd', period: '2018 - Present', description: 'Overseeing all financial operations including budgeting, reporting, and compliance.' },
  { role: 'Intern', company: 'Bkkolpo Construction Ltd', period: '2023 - 2024', description: 'Assisted the finance team with documentation, reporting, and daily tasks.' },
];
</script>

<style scoped>
/* Slide up animation */
@keyframes slideFadeUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-slide-fade-up { animation: slideFadeUp 1s ease forwards; }

/* Pulsing effect for timeline circle */
@keyframes pulse {
  0%, 100% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.1); opacity: 0.8; }
}
.animate-pulse { animation: pulse 2s ease-in-out infinite; }

/* Vertical line for timeline */
.before\:absolute::before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;
  width: 2px;
  background-color: #c7d2fe; /* light indigo */
}
</style>
