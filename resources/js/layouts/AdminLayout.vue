<template>
  <div class="flex h-screen">
    <Sidebar :isOpen="isOpen" @toggle="toggleSidebar" />

    <div :class="['flex-1 flex flex-col transition-all duration-300', isOpen ? 'lg:ml-64' : 'lg:ml-0']">
      <Header @toggleSidebar="toggleSidebar" />
      <main class="flex-1 p-6 overflow-y-auto bg-gray-100">
        <slot />
      </main>
      <Footer />
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import Sidebar from '@/Backend/Components/Sidebar.vue'
import Header from '@/Backend/Components/Header.vue'
import Footer from '@/Backend/Components/Footer.vue'

const isOpen = ref(false);

const toggleSidebar = () => {
  isOpen.value = !isOpen.value;
};
</script>
