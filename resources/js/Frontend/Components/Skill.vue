<template>
  <section id="skills" class="relative bg-gray-50 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

     <!-- Left: Animated Profile / Skills Image -->
<div class="flex justify-center md:justify-start">
  <img
    src="/upload/images/skills.jpg"
    alt="Skills Illustration"
    class="w-full max-w-sm md:max-w-md rounded-xl shadow-2xl object-cover animate-float transition-transform duration-500 hover:scale-105  hover:shadow-3xl"
  />
</div>

      <!-- Right: Skills List -->
      <div class="flex flex-col justify-center space-y-6">
        <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 animate-slide-fade-left">
          My Civil Engineering Skills
        </h2>
        <p class="text-gray-600 text-base md:text-lg lg:text-xl animate-slide-fade-left animate-delay-100">
          I specialize in civil engineering projects and design. Here are some of my key skills:
        </p>

        <!-- Skills -->
        <div class="space-y-4 mt-4">
          <div v-for="(skill, index) in skills" :key="index" class="animate-slide-fade-left" :style="{ animationDelay: `${index * 0.2}s` }">
            <div class="flex justify-between mb-1">
              <span class="text-gray-700 font-medium">{{ skill.name }}</span>
              <span class="text-gray-500">{{ skill.level }}%</span>
            </div>
            <div class="w-full bg-gray-300 rounded-full h-3">
              <div class="bg-indigo-600 h-3 rounded-full transition-all duration-1000" :style="{ width: skill.level + '%' }"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<script setup>
const skills = [
  { name: 'Structural Design', level: 90 },
  { name: 'Construction Management', level: 85 },
  { name: 'Surveying & Site Layout', level: 80 },
  { name: 'AutoCAD / Revit', level: 95 },
  { name: 'Material Science', level: 85 },
  { name: 'Project Estimation & Costing', level: 80 },
];
</script>

<style scoped>
/* Slide in from left animation */
@keyframes slideFadeLeft {
  0% { opacity: 0; transform: translateX(-50px); }
  100% { opacity: 1; transform: translateX(0); }
}
.animate-slide-fade-left {
  animation: slideFadeLeft 1s ease forwards;
}

/* Floating animation for photo */
@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-15px); }
}
.animate-float {
  animation: float 4s ease-in-out infinite;
}
</style>
