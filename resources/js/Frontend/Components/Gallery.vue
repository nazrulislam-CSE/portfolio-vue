<template>
  <section id="gallery" class="relative bg-gray-50 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 text-center animate-slide-fade-up">
        My Gallery
      </h2>

      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div
          v-for="(image, index) in images"
          :key="index"
          class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer animate-slide-fade-up"
          :style="{ animationDelay: `${index * 0.1}s` }"
          @click="openLightbox(index)"
        >
          <img
            :src="image.src"
            :alt="image.alt"
            class="w-full h-64 object-cover transform transition duration-500 group-hover:scale-110"
          />
          <div
            class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center"
          >
            <span class="text-white text-2xl px-4 py-2 rounded-lg bg-indigo-600 hover:bg-indigo-700 transition duration-300">
              View
            </span>
          </div>
        </div>
      </div>
    </div>

    <!-- Lightbox Modal -->
    <transition name="fade">
      <div v-if="lightboxOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80">
        <!-- Close Button -->
        <button @click="closeLightbox" class="absolute top-6 right-6 text-white text-4xl hover:text-red-400 transition">&times;</button>

        <!-- Left Arrow -->
        <div
          class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 rounded-full p-3 cursor-pointer transition"
          @click="prevImage"
        >
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </div>

        <!-- Lightbox Image -->
        <img :src="images[currentIndex].src" :alt="images[currentIndex].alt" class="max-h-[80vh] rounded-lg shadow-lg z-10" />

        <!-- Right Arrow -->
        <div
          class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 rounded-full p-3 cursor-pointer transition"
          @click="nextImage"
        >
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </div>
    </transition>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const images = [
  { src: '/upload/images/gallery/gallery1.jpg', alt: 'Project 1' },
  { src: '/upload/images/gallery/gallery7.jpg', alt: 'Project 2' },
  { src: '/upload/images/gallery/gallery3.jpg', alt: 'Project 3' },
  { src: '/upload/images/gallery/gallery4.jpg', alt: 'Project 4' },
  // { src: '/upload/images/gallery/gallery5.jpg', alt: 'Project 5' },
  // { src: '/upload/images/gallery/gallery6.jpg', alt: 'Project 6' },
  { src: '/upload/images/gallery/gallery6.jpg', alt: 'Project 7' },
  { src: '/upload/images/gallery/gallery8.jpg', alt: 'Project 8' },
  { src: '/upload/images/gallery/gallery9.jpg', alt: 'Project 9' },
  { src: '/upload/images/gallery/gallery10.jpg', alt: 'Project 10' },
  { src: '/upload/images/gallery/gallery11.jpg', alt: 'Project 11' },
  { src: '/upload/images/gallery/gallery12.jpg', alt: 'Project 12' },
  { src: '/upload/images/gallery/gallery13.jpg', alt: 'Project 13' },
  // { src: '/upload/images/gallery/gallery14.jpg', alt: 'Project 14' },
  { src: '/upload/images/gallery/gallery15.jpg', alt: 'Project 15' },
]

const lightboxOpen = ref(false)
const currentIndex = ref(0)

const openLightbox = (index) => {
  currentIndex.value = index
  lightboxOpen.value = true
}

const closeLightbox = () => {
  lightboxOpen.value = false
}

const prevImage = () => {
  currentIndex.value = (currentIndex.value - 1 + images.length) % images.length
}

const nextImage = () => {
  currentIndex.value = (currentIndex.value + 1) % images.length
}
</script>

<style scoped>
@keyframes slideFadeUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.animate-slide-fade-up {
  animation: slideFadeUp 0.8s ease forwards;
}

/* Lightbox fade transition */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
