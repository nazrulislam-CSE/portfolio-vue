<template>
  <section id="contact" class="relative bg-white py-20 px-6 md:px-10 lg:px-40">
    <div class="max-w-7xl mx-auto">
      <!-- Section Title -->
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-12 text-center animate-slide-fade-up">
        Contact Me
      </h2>

      <div class="grid md:grid-cols-2 gap-12">
        <!-- Contact Info -->
        <div class="space-y-6 animate-slide-fade-up">
          <p class="text-gray-600">
            Feel free to reach out for collaborations or just a friendly hello 👋
          </p>
          <div class="flex items-center space-x-4">
  <span class="text-indigo-600 text-xl">
    <i class="fas fa-map-marker-alt"></i>
  </span>
  <span>Tongi, Gazipur, Dhaka, Bangladesh</span>
</div>

<div class="flex items-center space-x-4">
  <span class="text-indigo-600 text-xl">
    <i class="fas fa-envelope"></i>
  </span>
  <span>kazisumon896@gmail.com</span>
</div>

<div class="flex items-center space-x-4">
  <span class="text-indigo-600 text-xl">
    <i class="fas fa-phone"></i>
  </span>
  <span>+880 1630555232</span>
</div>

          <!-- Social Icons -->
          <!-- <div class="flex space-x-4 mt-4">
            <a href="#" class="text-gray-700 hover:text-indigo-600 transition text-2xl">🐦</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600 transition text-2xl">💼</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600 transition text-2xl">📷</a>
          </div> -->
        </div>

        <!-- Contact Form -->
        <form class="space-y-6 animate-slide-fade-up">
          <div>
            <label class="block text-gray-700 font-medium mb-2">Name</label>
            <input type="text" placeholder="Your Name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none" />
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" placeholder="Your Email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-indigo-600 focus:border-indigo-600 outline-none" />
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-2">Message</label>
            <textarea placeholder="Your Message" class="w-full border border-gray-300 rounded-lg px-4 py-2 h-32 focus:ring-indigo-600 focus:border-indigo-600 outline-none"></textarea>
          </div>
          <button type="submit" class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition duration-300">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </section>
</template>

<script setup>
// You can handle form submission with Vue methods or API later
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
