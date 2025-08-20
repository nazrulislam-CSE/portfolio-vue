<template>
  <footer class="h-12 bg-white shadow-inner flex items-center justify-between px-6 text-sm text-gray-500">
    <span>© {{ currentYear }} Portfolio Admin</span>
    <span>
      Developed by 
      <a href="https://snazrul.speakupbd.com" target="_blank" class="text-indigo-600 hover:underline">
        Nazrul Islam Suzon
      </a>
    </span>
  </footer>
</template>

<script setup>
const currentYear = new Date().getFullYear();
</script>
