<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link, useForm } from '@inertiajs/vue3';


const props = defineProps({
    posts: Array
})
const form = useForm({ Post: Object });
const deletePost = (PostID) => {
    form.delete(route('post.destroy', { id: PostID }))
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <table class="w-full mt-4">
                            <thead>
                                <tr class="text-left font-bold">
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="post in posts" :key="post.id">
                                    <td class="border px-4 py-2">{{ post.title }}</td>
                                    <td class="border px-4 py-2">{{ post.body }}</td>
                                    <td class="border px-4 py-2 flex items-center">
                                        <Link class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded"
                                            :href="route('post.edit', { id: post.id })">
                                        Update
                                        </Link>
                                        <Link
                                            class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-2"
                                            @click="deletePost(post.id)">
                                        Delete
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
