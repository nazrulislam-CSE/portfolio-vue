<template>
    <AdminLayout :pageTitle="pageTitle">
        <!-- Full width wrapper -->
        <div class="w-full">
            <!-- Breadcrumb + Page Actions -->
            <div class="mb-6 flex flex-col items-start justify-between space-y-2 md:flex-row md:items-center md:space-y-0">
                <!-- Breadcrumb (left) -->
                <nav class="flex flex-wrap text-sm text-gray-600" aria-label="Breadcrumb">
                    <ol class="list-reset flex flex-wrap">
                        <li><a href="#" class="hover:text-indigo-600">Home</a></li>
                    </ol>
                </nav>

                <!-- Page Actions (right) -->
                <div class="flex flex-wrap space-x-2">
                    <ol class="list-reset flex flex-wrap">
                        <li><a href="#" class="hover:text-indigo-600">Home</a></li>
                        <li><span class="mx-2">/</span></li>
                        <li class="font-semibold text-gray-900">{{ pageTitle }}</li>
                    </ol>
                </div>
            </div>

            <!-- Page Title -->
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-800">{{ pageTitle }}</h1>
                <p class="mt-1 text-gray-600">Overview of your portfolio admin panel.</p>
            </div>

            <!-- Statistics Cards (Full Width Grid) -->
            <div class="mb-6 grid w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Card 1 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Users</span>
                        <span class="text-2xl font-bold text-indigo-600">1,234</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">+12% from last month</div>
                </div>

                <!-- Card 2 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Projects</span>
                        <span class="text-2xl font-bold text-purple-600">89</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">+5% from last month</div>
                </div>

                <!-- Card 3 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Clients</span>
                        <span class="text-2xl font-bold text-green-600">45</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">+10% from last month</div>
                </div>

                <!-- Card 4 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Revenue</span>
                        <span class="text-2xl font-bold text-yellow-600">$12,345</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">+20% from last month</div>
                </div>

                <!-- Card 5 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Completed Tasks</span>
                        <span class="text-2xl font-bold text-teal-600">320</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">+15% from last month</div>
                </div>

                <!-- Card 6 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Pending Tasks</span>
                        <span class="text-2xl font-bold text-red-600">45</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">-5% from last month</div>
                </div>

                <!-- Card 7 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Feedbacks</span>
                        <span class="text-2xl font-bold text-indigo-500">78</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">+8% from last month</div>
                </div>

                <!-- Card 8 -->
                <div class="flex flex-col justify-between rounded-lg bg-white p-5 shadow">
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">Active Campaigns</span>
                        <span class="text-2xl font-bold text-pink-600">12</span>
                    </div>
                    <div class="mt-2 text-xs text-gray-400">+2% from last month</div>
                </div>
            </div>

            <!-- Recent Activity Table -->
            <div class="w-full rounded-lg bg-white p-6 shadow">
                <h2 class="mb-4 text-xl font-semibold">Recent Projects</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">Project</th>
                                <th class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">Client</th>
                                <th class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">Budget</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr v-for="(project, index) in recentProjects" :key="index">
                                <td class="px-6 py-4 whitespace-nowrap">{{ project.name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ project.client }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span :class="statusClass(project.status)">{{ project.status }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ project.budget }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup lang="ts">
import AdminLayout from '../../layouts/AdminLayout.vue';

const pageTitle = 'Dashboard';

const recentProjects = [
    { name: 'Portfolio Website', client: 'ABC Corp', status: 'Completed', budget: '$2,500' },
    { name: 'E-commerce App', client: 'XYZ Ltd', status: 'In Progress', budget: '$4,000' },
    { name: 'Blog Platform', client: 'John Doe', status: 'Pending', budget: '$1,200' },
    { name: 'Admin Panel', client: 'Startup Inc', status: 'Completed', budget: '$3,000' },
];

const statusClass = (status: string) => {
    switch (status) {
        case 'Completed':
            return 'px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800';
        case 'In Progress':
            return 'px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800';
        case 'Pending':
            return 'px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800';
        default:
            return '';
    }
};
</script>

<style scoped>
/* Full-width layout adjustments */
</style>
