<template>
  <section id="videos" class="relative bg-gray-50 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto text-center">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 animate-slide-fade-up">
        My Videos
      </h2>

      <!-- Video Thumbnails Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div
          v-for="(video, index) in videos"
          :key="index"
          class="relative group cursor-pointer overflow-hidden rounded-xl shadow-lg animate-slide-fade-up"
          :style="{ animationDelay: `${index * 0.1}s` }"
          @click="openLightbox(index)"
        >
          <img
            :src="video.thumbnail"
            :alt="video.title"
            class="w-full h-64 md:h-64 object-cover rounded-xl transition-transform duration-500 group-hover:scale-105"
          />
          <div class="absolute inset-0 flex items-center justify-center">
            <div
              class="bg-indigo-600 bg-opacity-80 text-white rounded-full w-16 h-16 flex items-center justify-center text-3xl hover:bg-indigo-700 transition"
            >
              ▶
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Video Lightbox -->
    <transition name="fade">
      <div
        v-if="lightboxOpen"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 p-4"
      >
        <button
          @click="closeLightbox"
          class="absolute top-4 right-4 text-white text-3xl z-50"
        >&times;</button>

        <button
          @click="prevVideo"
          class="absolute left-4 md:left-10 text-white text-3xl z-50"
        >&larr;</button>

        <iframe
          :src="videos[currentIndex].url"
          class="w-full max-w-4xl h-64 md:h-[500px] rounded-lg shadow-lg"
          frameborder="0"
          allow="autoplay; encrypted-media"
          allowfullscreen
        ></iframe>

        <button
          @click="nextVideo"
          class="absolute right-4 md:right-10 text-white text-3xl z-50"
        >&rarr;</button>
      </div>
    </transition>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const videos = [
  {
    title: 'Video 1',
    thumbnail: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200&auto=format&fit=crop',
    url: 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1'
  },
  {
    title: 'Video 2',
    thumbnail: 'https://images.unsplash.com/photo-1503602642458-232111445657?q=80&w=1200&auto=format&fit=crop',
    url: 'https://www.youtube.com/embed/9bZkp7q19f0?autoplay=1'
  },
  {
    title: 'Video 3',
    thumbnail: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200&auto=format&fit=crop',
    url: 'https://www.youtube.com/embed/3JZ_D3ELwOQ?autoplay=1'
  },
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

const prevVideo = () => {
  currentIndex.value = (currentIndex.value - 1 + videos.length) % videos.length
}

const nextVideo = () => {
  currentIndex.value = (currentIndex.value + 1) % videos.length
}
</script>

<style scoped>
@keyframes slideFadeUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-slide-fade-up {
  animation: slideFadeUp 0.8s ease forwards;
}

/* Lightbox fade */
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>
