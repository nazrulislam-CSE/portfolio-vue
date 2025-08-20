<script setup lang="ts">
import { ref } from 'vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Form, Head } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

// Add a reactive status property, default to empty or fetch from props/page
const status = ref('');

</script>

<template>
  <!-- Background -->
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-200 via-pink-200 to-purple-200 animate-gradient px-4">
    <Head title="Email verification" />

    <!-- Card -->
    <div class="w-full max-w-md p-8 bg-white/30 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/40 animate-fadeIn">
      <h2 class="text-2xl font-bold text-center text-gray-800">Verify your email</h2>
      <p class="mt-2 text-center text-gray-600 text-sm">
        Please verify your email address by clicking on the link we just emailed to you.
      </p>

      <!-- Status Message -->
      <transition
        enter-active-class="transition ease-out duration-500"
        enter-from-class="opacity-0 -translate-y-2"
        enter-to-class="opacity-100 translate-y-0"
      >
        <div v-if="status === 'verification-link-sent'" class="mt-4 text-center text-sm font-medium text-green-700">
          A new verification link has been sent to your email address.
        </div>
      </transition>

      <!-- Form -->
      <Form method="post" :action="route('verification.send')" class="mt-6 space-y-4 text-center" v-slot="{ processing }">
        <Button
          :disabled="processing"
          class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg"
        >
          <LoaderCircle v-if="processing" class="h-4 w-4 animate-spin mr-2" />
          Resend verification email
        </Button>

        <TextLink
          :href="route('logout')"
          method="post"
          as="button"
          class="mx-auto block text-sm text-indigo-600 hover:text-indigo-700 font-medium transition-colors"
        >
          Log out
        </TextLink>
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
