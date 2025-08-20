<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Form, Head } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
  status?: string;
}>();
</script>

<template>
  <!-- Background -->
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-200 via-pink-200 to-purple-200 animate-gradient px-4">
    <Head title="Forgot password" />

    <!-- Card -->
    <div class="w-full max-w-md p-8 bg-white/30 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/40 animate-fadeIn">
      <h2 class="text-2xl font-bold text-center text-gray-800">Forgot password</h2>
      <p class="mt-2 text-center text-gray-600 text-sm">Enter your email to receive a reset link</p>

      <!-- Status message -->
      <transition
        enter-active-class="transition ease-out duration-500"
        enter-from-class="opacity-0 -translate-y-2"
        enter-to-class="opacity-100 translate-y-0"
      >
        <div v-if="status" class="mt-4 text-center text-sm font-medium text-green-700">
          {{ status }}
        </div>
      </transition>

      <!-- Form -->
      <div class="mt-6 space-y-6">
        <Form method="post" :action="route('password.email')" v-slot="{ errors, processing }">
          <div class="grid gap-2">
            <Label for="email" class="text-gray-700">Email address</Label>
            <Input
              id="email"
              type="email"
              name="email"
              autocomplete="off"
              autofocus
              placeholder="email@example.com"
              class="transition-all duration-300 focus:ring-2 focus:ring-indigo-500 focus:scale-[1.02]"
            />
            <InputError :message="errors.email" />
          </div>

          <div class="my-6">
            <Button
              class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg"
              :disabled="processing"
            >
              <LoaderCircle v-if="processing" class="h-4 w-4 animate-spin mr-2" />
              Email password reset link
            </Button>
          </div>
        </Form>

        <!-- Link back -->
        <div class="space-x-1 text-center text-sm text-gray-600">
          <span>Or, return to</span>
          <TextLink :href="route('login')" class="text-indigo-600 hover:text-indigo-700 font-medium">
            log in
          </TextLink>
        </div>
      </div>
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
