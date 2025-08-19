<template>
  <section id="blog" class="relative bg-gray-50 py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto text-center">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 animate-slide-fade-up">
        Latest Blog Posts
      </h2>

      <!-- Blog Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div
          v-for="(post, index) in posts"
          :key="index"
          class="bg-white rounded-xl shadow-lg overflow-hidden animate-slide-fade-up cursor-pointer transition-transform duration-300 hover:scale-105"
          :style="{ animationDelay: `${index * 0.1}s` }"
        >
          <!-- Image -->
          <img :src="post.image" :alt="post.title" class="w-full h-48 object-cover" />

          <!-- Content -->
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ post.title }}</h3>
            <p class="text-gray-600 text-sm mb-4">{{ post.excerpt }}</p>
            <a :href="post.url" class="text-indigo-600 font-medium hover:underline">
              Read More →
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const posts = [
  {
    title: "Modern Techniques in Structural Design",
    excerpt: "Explore innovative methods for designing safe and efficient structures in civil engineering projects...",
    image: "https://images.unsplash.com/photo-1593642532973-d31b6557fa68?q=80&w=1200&auto=format&fit=crop",
    url: "#"
  },
  {
    title: "Sustainable Construction Practices",
    excerpt: "Learn how sustainable materials and energy-efficient designs can reduce environmental impact in construction...",
    image: "https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=1200&auto=format&fit=crop",
    url: "#"
  },
  {
    title: "Project Management for Civil Engineers",
    excerpt: "Tips and strategies for planning, scheduling, and executing civil engineering projects successfully...",
    image: "https://images.unsplash.com/photo-1593642532973-d31b6557fa68?q=80&w=1200&auto=format&fit=crop",
    url: "#"
  },
]
</script>


<style scoped>
@keyframes slideFadeUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-slide-fade-up {
  animation: slideFadeUp 0.8s ease forwards;
}
</style>
