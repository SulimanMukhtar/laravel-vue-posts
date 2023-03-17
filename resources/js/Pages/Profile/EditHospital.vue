<script setup>
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, usePage } from '@inertiajs/vue3';


const props = defineProps({
    hospital: Object
})
const hospital = usePage().props.hospital;

const form = useForm({
    name: hospital.name,
    location: hospital.location,
});

</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>

        <section>
            <header>
                <h2 class="text-lg font-medium text-gray-900">Update a Hospital</h2>
            </header>

            <form @submit.prevent="form.patch(route('hospital.update', { id: props.hospital.id }))" class="mt-6 space-y-6">
                <div>
                    <InputLabel for="name" value="name" />

                    <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus />
                </div>

                <div>
                    <InputLabel for="location" value="location" />

                    <TextInput id="location" type="text" class="mt-1 block w-full" v-model="form.location" required />
                </div>



                <div class="flex items-center gap-4">
                    <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                    <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                        <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                    </Transition>
                </div>
            </form>
        </section>
    </AuthenticatedLayout>
</template>