<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'

const open = ref(false) // mobile menu toggle
const router = useRouter()

function goHome(event) {
  event.preventDefault() // prevent full page reload
  router.push('/')       // SPA navigation
}
</script>

<template>
  <header class="fixed top-0 left-0 w-full z-50 bg-white shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4 md:p-6">
      <!-- Logo -->
<div 
  @click="goHome" 
  class="text-2xl md:text-3xl font-extrabold tracking-wide font-serif text-indigo-600 cursor-pointer"
>
  Naimul Islam Sumon
</div>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex items-center space-x-6 font-medium text-zinc-700">
        <a href="/" @click="goHome" class="hover:text-indigo-600 transition duration-300">Home</a>
        <a href="#about" class="hover:text-indigo-600 transition duration-300">About</a>
        <a href="#team" class="hover:text-indigo-600 transition duration-300">Team</a>
        <a href="#work" class="hover:text-indigo-600 transition duration-300">Work</a>
        <a href="#gallery" class="hover:text-indigo-600 transition duration-300">Gallery</a>
        <a href="#contact" class="hover:text-indigo-600 transition duration-300">Contact</a>
        <a href="#contact"
           class="ml-4 px-4 py-2 rounded-lg shadow-lg bg-indigo-600 text-white hover:bg-indigo-700 transition duration-300">
          Hire Me
        </a>
      </nav>

      <!-- Mobile Menu Button -->
      <button
        @click="open = !open"
        class="md:hidden flex items-center justify-center w-10 h-10 rounded-full shadow bg-gray-100"
      >
        <svg v-if="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-700" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-700" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <transition name="slide-fade">
      <div v-show="open" class="md:hidden bg-white shadow-lg">
        <nav class="flex flex-col items-center py-6 space-y-4 font-medium text-zinc-700">
          <a href="#hero" @click="open=false" class="hover:text-indigo-600 transition duration-300">Home</a>
          <a href="#about" @click="open=false" class="hover:text-indigo-600 transition duration-300">About</a>
          <a href="#team" @click="open=false" class="hover:text-indigo-600 transition duration-300">Team</a>
          <a href="#work" @click="open=false" class="hover:text-indigo-600 transition duration-300">Work</a>
          <a href="#gallery" @click="open=false" class="hover:text-indigo-600 transition duration-300">Gallery</a>
          <a href="#contact" @click="open=false" class="hover:text-indigo-600 transition duration-300">Contact</a>
          <a href="#contact" @click="open=false"
             class="mt-2 px-6 py-2 rounded-lg shadow-lg bg-indigo-600 text-white hover:bg-indigo-700 transition duration-300">
            Hire Me
          </a>
        </nav>
      </div>
    </transition>
  </header>
</template>

<style scoped>
.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 0.3s ease;
}
.slide-fade-enter-from, .slide-fade-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>
