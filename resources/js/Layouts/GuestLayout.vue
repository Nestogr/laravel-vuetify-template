<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import {Link} from '@inertiajs/vue3';
</script>

<template>
    <v-container class="h-screen d-flex flex-column justify-center align-center bg-grey-lighten-4" fluid>

        <Link href="/">
            <ApplicationLogo height="80" width="80"/>
        </Link>

        <v-col class="bg-white mt-6 px-6 py-4 flex-0-0" cols="12" lg="4" md="6" sm="8" xl="3">
            <slot/>
        </v-col>

    </v-container>
</template>
