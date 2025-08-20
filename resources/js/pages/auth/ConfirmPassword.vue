<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Form, Head } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';
</script>

<template>
  <!-- Background -->
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-200 via-pink-200 to-purple-200 animate-gradient px-4">
    <Head title="Confirm password" />

    <!-- Card -->
    <div class="w-full max-w-md p-8 bg-white/30 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/40 animate-fadeIn">
      <h2 class="text-2xl font-bold text-center text-gray-800">Confirm your password</h2>
      <p class="mt-2 text-center text-gray-600 text-sm">
        This is a secure area of the application. Please confirm your password before continuing.
      </p>

      <!-- Form -->
      <Form method="post" :action="route('password.confirm')" reset-on-success v-slot="{ errors, processing }" class="mt-6 flex flex-col gap-6">
        <div class="grid gap-2">
          <Label for="password" class="text-gray-700">Password</Label>
          <Input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            autofocus
            placeholder="Password"
            class="block w-full mt-1 transition-all duration-300 focus:ring-2 focus:ring-indigo-500 focus:scale-[1.02]"
          />
          <InputError :message="errors.password" />
        </div>

        <Button
          class="w-full py-2 mt-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg"
          :disabled="processing"
        >
          <LoaderCircle v-if="processing" class="w-4 h-4 animate-spin mr-2" />
          Confirm Password
        </Button>
      </Form>
    </div>
  </div>
</template>

<style scoped>
/* Background gradient animation */
@keyframes gradient {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
.animate-gradient {
  background-size: 200% 200%;
  animation: gradient 8s ease infinite;
}

/* Fade In Animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
  animation: fadeIn 1s ease forwards;
}
</style>
