<template>
    <header class="sticky top-0 z-40 flex h-16 items-center justify-between bg-white px-6 shadow">
        <!-- Mobile Sidebar Toggle -->
        <button class="mr-2 text-gray-600 lg:hidden" @click="$emit('toggleSidebar')">☰</button>

        <!-- Home Button + Search -->
        <div class="mx-6 flex max-w-md flex-1 items-center space-x-2">
            <!-- Home Button -->
            <Link
                :href="route('home')"
                class="flex cursor-pointer items-center rounded bg-indigo-600 px-3 py-1 text-sm text-white transition hover:bg-indigo-700"
            >
                <span class="material-icons mr-1 text-base">home</span>
                Home
            </Link>

            <!-- Search Input -->
            <input
                type="text"
                placeholder="Search..."
                class="w-full rounded-lg border px-3 py-1 text-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            />
        </div>

        <!-- Right Actions -->
        <div class="flex items-center space-x-4">
            <!-- Notifications -->
            <button class="relative text-gray-600 hover:text-indigo-600 focus:outline-none">
                <span class="material-icons">notifications</span>
                <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-xs text-white"> 3 </span>
            </button>

            <!-- Profile Dropdown -->
            <div class="relative">
                <button @click="openProfile = !openProfile" class="flex items-center space-x-2 focus:outline-none">
                    <img src="https://i.pravatar.cc/40" class="h-8 w-8 rounded-full" />
                    <span class="hidden text-gray-700 md:block">Admin</span>
                    <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div v-if="openProfile" class="absolute right-0 mt-2 w-40 rounded-lg border bg-white py-2 shadow-lg">
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Settings</a>
                    <Link  :href="route('admin.logout')" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Logout</Link>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const openProfile = ref(false);
</script>

<style>
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');
</style>
