<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Form, Head } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();
</script>

<template>
    <!-- Background with animated gradient -->
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-200 via-pink-200 to-purple-200 animate-gradient">
        <Head title="Login" />

        <div class="w-full max-w-md p-8 bg-white/30 backdrop-blur-xl rounded-2xl shadow-2xl border border-white/40 animate-fadeIn">
            <h2 class="text-2xl font-bold text-center text-gray-800">Log in to your account</h2>
            <p class="mt-2 text-center text-gray-600 text-sm">Enter your email and password below</p>

            <!-- Status Message -->
            <transition
                enter-active-class="transition ease-out duration-500"
                enter-from-class="opacity-0 -translate-y-2"
                enter-to-class="opacity-100 translate-y-0"
            >
                <div v-if="status" class="mt-4 text-sm font-medium text-center text-green-700">
                    {{ status }}
                </div>
            </transition>

            <!-- Login Form -->
            <Form
                method="post"
                :action="route('login')"
                :reset-on-success="['password']"
                v-slot="{ errors, processing }"
                class="mt-6 flex flex-col gap-6"
            >
                <!-- Email -->
                <div>
                    <Label for="email" class="text-gray-700">Email address</Label>
                    <Input
                        id="email"
                        type="email"
                        name="email"
                        required
                        autofocus
                        autocomplete="email"
                        placeholder="you@example.com"
                        class="mt-2 transition-all duration-300 focus:ring-2 focus:ring-indigo-500 focus:scale-[1.02]"
                    />
                    <InputError :message="errors.email" />
                </div>

                <!-- Password -->
                <div>
                    <div class="flex items-center justify-between">
                        <Label for="password" class="text-gray-700">Password</Label>
                        <TextLink
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="text-sm text-indigo-600 hover:text-indigo-700 transition"
                        >
                            Forgot password?
                        </TextLink>
                    </div>
                    <Input
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Password"
                        class="mt-2 transition-all duration-300 focus:ring-2 focus:ring-indigo-500 focus:scale-[1.02]"
                    />
                    <InputError :message="errors.password" />
                </div>

                <!-- Remember -->
                <div class="flex items-center">
                    <Checkbox id="remember" name="remember" />
                    <Label for="remember" class="ml-2 text-gray-700">Remember me</Label>
                </div>

                <!-- Submit Button -->
                <Button
                    type="submit"
                    class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-lg"
                    :disabled="processing"
                >
                    <LoaderCircle v-if="processing" class="w-4 h-4 animate-spin mr-2" />
                    Log in
                </Button>

                <!-- Register -->
                <p class="text-sm text-center text-gray-600 mt-4">
                    Don’t have an account?
                    <TextLink :href="route('register')" class="text-indigo-600 hover:text-indigo-700 font-medium">
                        Sign up
                    </TextLink>
                </p>
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

/* Fade In Card */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(15px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn {
  animation: fadeIn 1s ease forwards;
}
</style>
