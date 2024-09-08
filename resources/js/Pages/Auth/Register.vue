<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register"/>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name"/>

                <v-text-field id="name" v-model="form.name" class="mt-1" required variant="underlined"/>

                <InputError :message="form.errors.name" class="mt-2"/>
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email"/>

                <v-text-field id="email" v-model="form.email" class="mt-1" required type="email" variant="underlined"/>

                <InputError :message="form.errors.email" class="mt-2"/>
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password"/>

                <v-text-field id="password" v-model="form.password" class="mt-1" required type="password"
                              variant="underlined"/>

                <InputError :message="form.errors.password" class="mt-2"/>
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password"/>

                <v-text-field id="password_confirmation" v-model="form.password_confirmation" required type="password"
                              variant="underlined"/>

                <InputError :message="form.errors.password_confirmation" class="mt-2"/>
            </div>

            <div class="d-flex align-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="text-subtitle-2 text-decoration-none"
                >
                    Already registered?
                </Link>

                <v-btn
                    :loading="form.processing"
                    class="ms-4"
                    type="submit"
                >
                    Register
                </v-btn>
            </div>
        </form>
    </GuestLayout>
</template>
