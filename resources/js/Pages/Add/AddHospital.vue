<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';


const form = useForm({
    name: '',
    location: ''
});


</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>

        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900">Add a Hospital</h2>
            </header>

            <form @submit.prevent="form.post(route('hospitals.store'))" class="mt-6 space-y-6">
                <div>
                    <InputLabel for="name" value="name" />

                    <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus />
                </div>

                <div>
                    <InputLabel for="location" value="location" />

                    <TextInput id="location" type="text" class="mt-1 block w-full" v-model="form.location" required />
                </div>


                <div class="flex items-center gap-4">
                    <PrimaryButton :disabled="form.processing">Add A Hospital</PrimaryButton>
                </div>
            </form>
        </section>
    </AuthenticatedLayout>
</template>