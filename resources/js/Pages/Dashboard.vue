<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Link, useForm } from '@inertiajs/vue3';


const props = defineProps({
    posts: Array,
    doctors: Array,
    hospitals: Array,
})
const form = useForm({ Post: Object });
const deletePost = (PostID) => {
    form.delete(route('post.destroy', { id: PostID }))
};
const deleteDoctor = (DoctorID) => {
    form.delete(route('doctor.destroy', { id: DoctorID }))
};
const deleteHospital = (HospitalID) => {
    form.delete(route('hospital.destroy', { id: HospitalID }))
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
                                            <div>
                                                <h2>Posts Table</h2>

                                                <table class="w-full mt-4 mb-10">

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
                                                                <Link
                                                                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded"
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

                                            <div>
                                                <h2>Doctors Table</h2>

                                                <table class="w-full mt-4 mb-10">
                                                    <thead>
                                                        <tr class="text-left font-bold">
                                                            <th>Name</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="doctor in doctors" :key="doctor.id">
                                                            <td class="border px-4 py-2">{{ doctor.name }}</td>
                                                            <td class="border px-4 py-2 flex items-center">
                                                                <Link
                                                                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded"
                                                                    :href="route('doctor.edit', { id: doctor.id })">
                                                                Update
                                                                </Link>
                                                                <Link
                                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-2"
                                                                    @click="deleteDoctor(doctor.id)">
                                                                Delete
                                                                </Link>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div>
                                                <h2>Hospitals Table</h2>

                                                <table class="w-full mt-4 mb-10" v-if="hospitals">
                                                    <thead>
                                                        <tr class="text-left font-bold">
                                                            <th>Name</th>
                                                            <th>Location</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="hospital in hospitals" :key="hospital.id">
                                                            <td class="border px-4 py-2">{{ hospital.name }}</td>
                                                            <td class="border px-4 py-2">{{ hospital.location }}</td>
                                                            <td class="border px-4 py-2 flex items-center">
                                                                <Link
                                                                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded"
                                                                    :href="route('hospital.edit', { id: hospital.id })">
                                                                Update
                                                                </Link>
                                                                <Link
                                                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-2"
                                                                    @click="deleteHospital(hospital.id)">
                                                                Delete
                                                                </Link>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div v-else>Not Authorized</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </AuthenticatedLayout>
</template>
