<script setup>
import { ref, computed, watch } from 'vue';
import AdminLayout from '../../../layouts/AdminLayout.vue';
import { Link } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';
// Define props
const props = defineProps({
  pageTitle: String,
  categories: {
    type: Array,
    default: () => []  // Ensure default empty array if not passed
  }
});

// Search & pagination
const search = ref('');
const perPage = ref(5);
const currentPage = ref(1);

// Use props.categories instead of categories
const filteredCategories = computed(() => {
  return props.categories.filter(cat =>
    cat.name.toLowerCase().includes(search.value.toLowerCase())
  );
});

const totalPages = computed(() => Math.ceil(filteredCategories.value.length / perPage.value));

const paginatedData = computed(() => {
  const start = (currentPage.value - 1) * perPage.value;
  const end = start + perPage.value;
  return filteredCategories.value.slice(start, end);
});

const startIndex = computed(() => (currentPage.value - 1) * perPage.value);
const endIndex = computed(() => Math.min(startIndex.value + perPage.value, filteredCategories.value.length));

function prevPage() {
  if (currentPage.value > 1) currentPage.value--;
}
function nextPage() {
  if (currentPage.value < totalPages.value) currentPage.value++;
}

// Reset page when search or perPage changes
watch([search, perPage], () => currentPage.value = 1);
</script>

<template>
  <AdminLayout :pageTitle="pageTitle">
    <div class="w-full">
    <Head title="Categories" />
      
      <!-- Breadcrumb + Page Actions -->
      <div class="mb-6 flex flex-col items-start justify-between space-y-2 md:flex-row md:items-center md:space-y-0">
        <nav class="flex flex-wrap text-sm text-gray-600" aria-label="Breadcrumb">
          <ol class="list-reset flex flex-wrap">
            <li><a href="#" class="hover:text-indigo-600">Home</a></li>
          </ol>
        </nav>

        <div class="flex flex-wrap space-x-2">
          <ol class="list-reset flex flex-wrap">
            <li><a href="#" class="hover:text-indigo-600">Home</a></li>
            <li><span class="mx-2">/</span></li>
            <li class="font-semibold text-gray-900">{{ pageTitle }}</li>
          </ol>
        </div>
      </div>

      <!-- Top Card: Title + Add Button -->
      <div class="mb-4 flex flex-col sm:flex-row justify-between items-center bg-white p-4 rounded-lg shadow border border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Categories List</h3>
      <Link 
      :href="route('admin.category.create')" 
      class="mt-2 sm:mt-0 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors"
    >
      Add New Category
    </Link>
      </div>

      <!-- Controls: Search & Items per page -->
      <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 space-y-2 sm:space-y-0">
        <input 
          type="text" 
          v-model="search" 
          placeholder="Search categories..." 
          class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300"
        />

        <select 
          v-model.number="perPage" 
          class="px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300"
        >
          <option v-for="n in [5, 10, 20, 50]" :key="n" :value="n">{{ n }} per page</option>
        </select>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto rounded-lg shadow border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Category Name
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr 
              v-for="category in paginatedData" 
              :key="category.id" 
              class="hover:bg-gray-100 transition-colors duration-200 cursor-pointer"
            >
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ category.id }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ category.name }}</td>
            </tr>
            <tr v-if="filteredCategories.length === 0">
              <td colspan="2" class="text-center py-4 text-gray-500">No categories found.</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-4 flex justify-between items-center">
        <span class="text-gray-700">
          Showing {{ startIndex + 1 }} to {{ endIndex }} of {{ filteredCategories.length }} entries
        </span>
        <div class="flex space-x-1">
          <button 
            @click="prevPage" 
            :disabled="currentPage === 1"
            class="px-3 py-1 border rounded hover:bg-gray-200 disabled:opacity-50"
          >
            Previous
          </button>

          <button 
            v-for="page in totalPages" 
            :key="page" 
            @click="currentPage = page"
            :class="page === currentPage ? 'bg-blue-500 text-white' : 'bg-white text-gray-700 hover:bg-gray-200'"
            class="px-3 py-1 border rounded"
          >
            {{ page }}
          </button>

          <button 
            @click="nextPage" 
            :disabled="currentPage === totalPages"
            class="px-3 py-1 border rounded hover:bg-gray-200 disabled:opacity-50"
          >
            Next
          </button>
        </div>
      </div>

    </div>
  </AdminLayout>
</template>
