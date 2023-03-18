<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';


const form = useForm({
    title: '',
    body: ''
});


</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>

        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900">Add a Post</h2>
            </header>

            <form @submit.prevent="form.post(route('posts.store'))" class="mt-6 space-y-6">
                <div>
                    <InputLabel for="title" value="title" />

                    <TextInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" required autofocus />
                </div>

                <div>
                    <InputLabel for="body" value="body" />

                    <TextInput id="body" type="text" class="mt-1 block w-full" v-model="form.body" required />
                </div>


                <div class="flex items-center gap-4">
                    <PrimaryButton :disabled="form.processing">Add A Post</PrimaryButton>
                </div>
            </form>
        </section>
    </AuthenticatedLayout>
</template>