<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';


const form = useForm({
    name: ''
});


</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>

        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900">Add a Doctor</h2>
            </header>

            <form @submit.prevent="form.post(route('doctors.store'))" class="mt-6 space-y-6">
                <div>
                    <InputLabel for="name" value="name" />

                    <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus />
                </div>


                <div class="flex items-center gap-4">
                    <PrimaryButton :disabled="form.processing">Add</PrimaryButton>

                    <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
        </section>
    </AuthenticatedLayout>
</template>