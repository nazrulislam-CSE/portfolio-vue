<template>
  <aside
    :class="[
      'fixed inset-y-0 left-0 w-64 bg-gray-900 text-white flex flex-col transform transition-transform duration-300 ease-in-out z-50',
      isOpen ? 'translate-x-0' : '-translate-x-full',
      'lg:translate-x-0 lg:static lg:flex'
    ]"
  >
    <!-- Sidebar Header -->
    <div class="relative p-6 border-b border-gray-700 flex items-center">
      <span class="absolute left-1/2 transform -translate-x-1/2 text-lg font-bold text-white">
        Admin Panel
      </span>
      <button class="ml-auto lg:hidden text-gray-300 hover:text-white" @click="$emit('toggle')">
        ✕
      </button>
    </div>

    <!-- Sidebar Navigation -->
    <nav class="flex-1 px-2 py-4 space-y-2 overflow-y-auto">
      <inertia-link
        v-for="(item, index) in menuItems"
        :key="index"
        :href="item.href"
        :class="[
          'block px-4 py-2 rounded text-white transition',
          isActive(item) ? 'bg-indigo-600 font-bold' : 'hover:bg-gray-700'
        ]"
      >
        {{ item.name }}
      </inertia-link>
    </nav>
  </aside>
</template>

<script setup>
import { usePage } from '@inertiajs/vue3';
import { Link as InertiaLink } from '@inertiajs/vue3';

defineProps({
  isOpen: Boolean
});

// Current Inertia page
const { props } = usePage();

// Sidebar menu
const menuItems = [
  { name: "Dashboard", href: route('admin.dashboard'), routeName: 'admin.dashboard' },
  { name: "Category", href: route('admin.category.index'), routeName: 'admin.category.index' },


];

// Check if link is active based on route name (reactive, no reload needed)
const isActive = (item) => {
  return props.value?.ziggy?.current?.name === item.routeName;
}
</script>

<style scoped>
aside::-webkit-scrollbar {
  width: 6px;
}
aside::-webkit-scrollbar-thumb {
  background-color: #4b5563;
  border-radius: 3px;
}
aside::-webkit-scrollbar-thumb:hover {
  background-color: #6b7280;
}
</style>
