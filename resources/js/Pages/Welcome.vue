<script setup>
// import 
import { animate } from "motion"
import { onMounted } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import GuestLayout from "@/Layouts/GuestLayout.vue";
//  define all props
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

// lifeCyle 
onMounted(() => {
    animate("#create", { scale: 1.1 }, {
        duration: 0.5,
        easing: "ease-in-out",
        repeat: Infinity,
        direction: "alternate"
    })
});
</script>

<style scoped>
.bg-gray-100 {
    background-color: #f2f2f2;
}
</style>

<template>
    <GuestLayout>

        <Head title="Welcome" />
        <div
            class="container bg-[url(image/kiss.png)] bg-no-repeat bg-cover bg-blend-screen min-h-screen w-full mx-auto p-4 flex items-center justify-center">
            <Link :href="route('social.register')"
                class="h-14 bg-gradient-to-r from-primary to-[#FB92FF] mx-4 px-20 py-4 text-white rounded-lg text-lg"
                id="create">
            Créer votre compte
            </Link>
        </div>
    </GuestLayout>
</template>
