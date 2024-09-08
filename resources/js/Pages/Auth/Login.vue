<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import {Head, Link, useForm} from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in"/>

        <div v-if="status" class="mb-4 text-subtitle-2">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
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
                <v-checkbox v-model="form.remember" label="Remember me"/>
            </div>

            <div class="d-flex align-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-subtitle-2 text-decoration-none"
                >
                    Forgot your password?
                </Link>

                <v-btn
                    :loading="form.processing"
                    class="ms-4"
                    type="submit"
                >
                    Log in
                </v-btn>
            </div>
        </form>
    </GuestLayout>
</template>
