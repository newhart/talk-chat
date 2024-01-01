<script setup>
import { Head, Link } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <GuestLayout>
        <Head title="Welcome" />
        <div class="container bg-[url(image/kiss.png)] bg-no-repeat bg-cover bg-blend-screen min-h-screen w-full mx-auto p-4 flex items-center justify-center">
            <div
                class="h-14 bg-gradient-to-r from-primary to-[#FB92FF] mx-4 px-20 py-4 text-white rounded-lg"
            >
                <Link :href="route('social.register')" class="text-lg">
                    Creer votre compte
                </Link>
            </div>
        </div>
    </GuestLayout>
</template>
