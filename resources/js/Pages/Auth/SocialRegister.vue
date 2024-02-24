<script setup>

import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
defineProps({
    url: {
        type: String
    }
})
</script>

<template>
    <GuestLayout>

        <Head title="Register user" />
        <div
            class="container bg-[url(image/kiss.png)] bg-no-repeat bg-cover bg-blend-screen min-h-screen w-full mx-auto p-4 flex items-center justify-center">
            <div class="bg-white bg-opacity-50 text-center w-full">
                <img src="/image/sary.png" alt="" class="mx-auto" width="150" height="150">
                <h3 class="text-4xl">Creer une compte</h3>
                <p>En cliquant sur <a href="" class="text-blue-700">connexion</a>, vous acceptez nos <a href=""
                        class="text-blue-700">Condition d'utilisation </a>
                    <br>
                    Consultez notre <a href="" class="text-blue-700">Politique de confidentialite</a> et notre <a href=""
                        class="text-blue-700">Politique relative aux cookie</a> pour savoir comment nous traitons vos
                    donnees
                </p>
                <div class="mx-auto px-[80px] my-10">
                    <div class="flex itemsx`-center">
                        <img src="/image/google.png" alt="" height="50" width="50" class="mx-1">
                        <a :href="url"
                            class="bg-white px-3 py-4 rounded-lg w-[400px] hover:scale-110 transition-transform duration-500">Continuer
                            avec google</a>
                    </div>
                    <div class="flex items-center my-3">
                        <img src="/image/social/whatsap.png" alt="" height="40" width="40" class="mx-1">
                        <Link :href="route('register.choiceTwo')"
                            class="bg-white px-3 py-4 rounded-lg w-[400px] hover:scale-110 transition-transform duration-500">
                        Connexion avec whatsap</Link>
                    </div>
                    <div class="flex items-center">
                        <img src="/image/social/log-fb.png" alt="" height="70" width="70" class="mx-1">
                        <Link :href="route('register.choiceTwo')"
                            class="bg-white px-3 py-4 rounded-lg w-[400px] hover:scale-110 transition-transform duration-500">
                        Connexion avec Facebook</Link>
                    </div>
            </div>
        </div>
    </div>
</GuestLayout></template>

<style scoped></style>
