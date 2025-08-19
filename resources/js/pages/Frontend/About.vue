<script setup>
import { defineProps } from 'vue'
import { Head } from '@inertiajs/vue3'
import Header from '@/Frontend/Components/Header.vue'
import Footer from '@/Frontend/Components/Footer.vue'
import Home from './Home.vue'

defineProps({
  pageTitle: { type: String, default: 'About Us' }
})
</script>

<template>
  <div class="min-h-screen flex flex-col bg-gray-50">
    <!-- Head / SEO -->
    <Head :title="pageTitle" />

    <!-- Header -->
    <Header :pageTitle="pageTitle" />

    <!-- Page Content -->
    <main class="flex-1">
      <!-- Hero Section -->
      <section class="bg-gradient-to-r from-blue-600 to-indigo-800 text-white py-20">
        <div class="container mx-auto px-4 text-center">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">About Our Company</h1>
          <p class="text-xl max-w-3xl mx-auto">We're dedicated to delivering exceptional services and creating meaningful solutions for our clients.</p>
        </div>
      </section>

      <!-- Our Story -->
      <section class="py-16 container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12">
          <div class="md:w-1/2">
            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=1400&auto=format&fit=crop" alt="Our Story" class="rounded-lg shadow-xl w-full h-auto">
          </div>
          <div class="md:w-1/2">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Story</h2>
            <p class="text-lg text-gray-600 mb-4">
              Founded in 2015, our company began as a small team with a big vision. What started as a passion project has grown into a thriving business serving clients across multiple industries.
            </p>
            <p class="text-lg text-gray-600">
              We've remained committed to our core values of integrity, innovation, and customer satisfaction throughout our journey.
            </p>
          </div>
        </div>
      </section>

      <!-- Mission & Values -->
      <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
          <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Our Mission & Values</h2>
          
          <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
              <div class="text-blue-600 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3 text-gray-800">Innovation</h3>
              <p class="text-gray-600">We constantly push boundaries to deliver cutting-edge solutions that drive results.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
              <div class="text-blue-600 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15l8-8m0 0l-8-8m8 8H4" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3 text-gray-800">Growth</h3>
              <p class="text-gray-600">We're committed to the continuous improvement of our team, services, and community.</p>
            </div>
            
            <div class="bg-white p-8 rounded-lg shadow-md text-center">
              <div class="text-blue-600 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <h3 class="text-xl font-semibold mb-3 text-gray-800">Community</h3>
              <p class="text-gray-600">We believe in building strong relationships with our clients, partners, and employees.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Team Section -->
      <section class="py-16 container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Meet Our Team</h2>
        
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?q=80&w=1200&auto=format&fit=crop" alt="Team Member" class="w-full h-64 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">John Doe</h3>
              <p class="text-blue-600 mb-2">CEO & Founder</p>
              <p class="text-gray-600 text-sm">Visionary leader with 15+ years of industry experience.</p>
            </div>
          </div>
          
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?q=80&w=1200&auto=format&fit=crop" alt="Team Member" class="w-full h-64 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">Jane Smith</h3>
              <p class="text-blue-600 mb-2">CTO</p>
              <p class="text-gray-600 text-sm">Technology expert driving our innovative solutions.</p>
            </div>
          </div>
          
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=1200&auto=format&fit=crop" alt="Team Member" class="w-full h-64 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">Mike Johnson</h3>
              <p class="text-blue-600 mb-2">Head of Operations</p>
              <p class="text-gray-600 text-sm">Ensuring seamless delivery of all our services.</p>
            </div>
          </div>
          
          <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=1200&auto=format&fit=crop" alt="Team Member" class="w-full h-64 object-cover">
            <div class="p-6">
              <h3 class="text-xl font-semibold text-gray-800">Sarah Williams</h3>
              <p class="text-blue-600 mb-2">Customer Success</p>
              <p class="text-gray-600 text-sm">Dedicated to ensuring client satisfaction.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class="bg-blue-700 text-white py-16">
        <div class="container mx-auto px-4 text-center">
          <h2 class="text-3xl font-bold mb-6">Ready to work with us?</h2>
          <p class="text-xl mb-8 max-w-2xl mx-auto">We'd love to hear about your project and how we can help bring your vision to life.</p>
          <a href="/contact" class="bg-white text-blue-700 px-8 py-3 rounded-lg font-semibold inline-block hover:bg-gray-100 transition duration-300">
            Get in Touch
          </a>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <Footer />
  </div>
</template>