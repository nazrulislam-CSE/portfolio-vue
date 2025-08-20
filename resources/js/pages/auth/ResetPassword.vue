<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Form, Head } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';
import { ref } from 'vue';

const props = defineProps<{
    token: string;
    email: string;
}>();

const inputEmail = ref(props.email);
</script>

<template>
  <!-- Background -->
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-200 via-pink-200 to-purple-200 animate-gradient px-4">
    <Head title="Reset password" />

    <!-- Card -->
    <div class="w-full max-w-md p-8 bg-white/30 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/40 animate-fadeIn">
      <h2 class="text-2xl font-bold text-center text-gray-800">Reset password</h2>
      <p class="mt-2 text-center text-gray-600 text-sm">Please enter your new password below</p>

      <!-- Form -->
      <Form
        method="post"
        :action="route('password.store')"
        :transform="(data) => ({ ...data, token, email: inputEmail })"
        :reset-on-success="['password', 'password_confirmation']"
        v-slot="{ errors, processing }"
        class="mt-6 flex flex-col gap-6"
      >
        <!-- Email (readonly) -->
        <div class="grid gap-2">
          <Label for="email" class="text-gray-700">Email</Label>
          <Input
            id="email"
            type="email"
            name="email"
            autocomplete="email"
            v-model="inputEmail"
            class="block w-full mt-1 transition-all duration-300 focus:ring-2 focus:ring-indigo-500"
            readonly
          />
          <InputError :message="errors.email" class="mt-2" />
        </div>

        <!-- New Password -->
        <div class="grid gap-2">
          <Label for="password" class="text-gray-700">Password</Label>
          <Input
            id="password"
            type="password"
            name="password"
            autocomplete="new-password"
            class="block w-full mt-1 transition-all duration-300 focus:ring-2 focus:ring-indigo-500 focus:scale-[1.02]"
            placeholder="Password"
            autofocus
          />
          <InputError :message="errors.password" />
        </div>

        <!-- Confirm Password -->
        <div class="grid gap-2">
          <Label for="password_confirmation" class="text-gray-700">Confirm Password</Label>
          <Input
            id="password_confirmation"
            type="password"
            name="password_confirmation"
            autocomplete="new-password"
            class="block w-full mt-1 transition-all duration-300 focus:ring-2 focus:ring-indigo-500 focus:scale-[1.02]"
            placeholder="Confirm password"
          />
          <InputError :message="errors.password_confirmation" />
        </div>

        <!-- Submit -->
        <Button
          type="submit"
          class="w-full mt-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg"
          :disabled="processing"
        >
          <LoaderCircle v-if="processing" class="w-4 h-4 animate-spin mr-2" />
          Reset password
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
