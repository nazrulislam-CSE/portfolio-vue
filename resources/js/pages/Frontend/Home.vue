<script setup>
import { ref, onMounted } from 'vue'
import { Head } from '@inertiajs/vue3'

// Components
import Header from '@/Frontend/Components/Header.vue'
import Hero from '@/Frontend/Components/Hero.vue'
import About from '@/Frontend/Components/About.vue'
import Educational from '@/Frontend/Components/Educational.vue'
import Service from '@/Frontend/Components/Service.vue'
import Skill from '@/Frontend/Components/Skill.vue'
import Work from '@/Frontend/Components/Work.vue'
import Experience from '@/Frontend/Components/Experience.vue'
import Team from '@/Frontend/Components/Team.vue'
import Gallery from '@/Frontend/Components/Gallery.vue'
import Video from '@/Frontend/Components/Video.vue'
import Blog from '@/Frontend/Components/Blog.vue'
import Contact from '@/Frontend/Components/Contact.vue'
import Footer from '@/Frontend/Components/Footer.vue'

defineProps({
  pageTitle: { type: String, default: 'Home' }
})

// Mobile menu toggle
const open = ref(false)

// Scroll-to-top button
const showTop = ref(false)
const scrollToTop = () => window.scrollTo({ top: 0, behavior: 'smooth' })

// Header shadow and visibility
const headerShadow = ref(false)
const headerVisible = ref(false)

onMounted(() => {
  // Header slide animation on page load
  setTimeout(() => headerVisible.value = true, 100)

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e){
      e.preventDefault()
      const target = document.querySelector(this.getAttribute('href'))
      if(target) open.value = false
      target?.scrollIntoView({ behavior: 'smooth', block: 'start' })
    })
  })

  // Scroll events
  window.addEventListener('scroll', () => {
    const current = window.scrollY
    showTop.value = current > 300
    headerShadow.value = current > 20
  })
})
</script>

<template>
  <div class="min-h-screen bg-gray-50 text-gray-900 relative font-sans">

    <Head :title="pageTitle" />

    <!-- Header -->
    <transition name="fade">
      <Header v-show="headerVisible" :class="headerShadow ? 'shadow-md bg-white/90 backdrop-blur-md' : 'bg-transparent'" />
    </transition>

    <Hero />
    <About />
    <Educational />
    <Service />
    <Skill />
    <Work />
    <Experience />
    <Team />
    <Gallery />
    <Video />
    <Blog />
    <Contact />
    <Footer />

    <!-- Scroll to Top Button -->
    <button 
      v-show="showTop"
      @click="scrollToTop"
      class="fixed bottom-6 right-6 bg-indigo-600 text-white p-3 rounded-full shadow-xl hover:bg-indigo-700 transition transform hover:scale-110 duration-300">
      ↑
    </button>

  </div>
</template>

<style scoped>
/* Fade animation for header */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease, transform 0.5s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
  transform: translateY(-20px);
}

/* Smooth scroll behavior for the whole page */
html {
  scroll-behavior: smooth;
}

/* Scroll to top button animation */
button[ v-show ] {
  transition: all 0.3s ease;
}
</style>
