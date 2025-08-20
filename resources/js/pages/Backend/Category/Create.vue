<template>
  <AdminLayout :pageTitle="pageTitle">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow border border-gray-200">
      <h2 class="text-2xl font-semibold mb-6">{{ pageTitle }}</h2>

      <form @submit.prevent="submitForm" class="space-y-4">
        <!-- Category Name -->
        <div>
          <label class="block text-gray-700 font-medium mb-1" for="name">Category Name</label>
          <input 
            type="text" 
            v-model="form.name" 
            id="name"
            placeholder="Enter category name"
            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300"
          />
          <span v-if="errors.name" class="text-red-500 text-sm mt-1">{{ errors.name }}</span>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
          <button 
            type="submit" 
            class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors"
            :disabled="loading"
          >
            {{ loading ? 'Saving...' : 'Create Category' }}
          </button>
        </div>
      </form>
    </div>
  </AdminLayout>
</template>

<script setup>
import { reactive, ref } from 'vue';
import AdminLayout from '../../../layouts/AdminLayout.vue';
import { defineProps } from 'vue';


const props = defineProps({
  pageTitle: String
});

const form = reactive({
  name: ''
});

const errors = reactive({});
const loading = ref(false);

function submitForm() {
  loading.value = true;
  errors.name = null;

  Inertia.post(route('categories.store'), form, {
    onSuccess: () => {
      loading.value = false;
      form.name = ''; // reset form
    },
    onError: (err) => {
      loading.value = false;
      Object.assign(errors, err);
    }
  });
}
</script>
