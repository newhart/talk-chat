<script setup>

import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Head , Link} from "@inertiajs/vue3";
</script>

<template>
    <GuestLayout>
        <Head title="Register" />
        <div class="text-center">
            <p>
                « Bonjour, pour nous assurer que vous avez l'âge requis pour utiliser notre site, nous vous demandons de nous
                <br>fournir votre date de naissance. Vous pouvez refuser de nous fournir cette information, mais dans ce cas, vous ne
                <br> pourrez pas accéder à certains contenus ou services. »
            </p>

            <form action="" class="my-20">
                <div class="flex items-center m-3">
                    <select name="" id="" class="input-transparent rounded-full">
                        <option value="default">Jours</option>
                        <option value="default">Mahamasina</option>
                        <option value="default">Toliara</option>
                    </select>

                    <select name="" id="" class="input-transparent rounded-full ml-15 ml-8">
                        <option value="default">Mois</option>
                        <option value="default">Madagascar</option>
                        <option value="default">Francais</option>
                    </select>

                    <select name="" id="" class="input-transparent rounded-full ml-15 ml-8">
                        <option value="default">Annees</option>
                        <option value="default">Madagascar</option>
                        <option value="default">Francais</option>
                    </select>

                    <Link :href="route('register.bio')" class="bg-primary w-[150px] mx-5 text-white rounded-full h-9 text-4xl px-3 py-4">
                        <img src="/image/icon/left.png" alt="" class="relative left-1 top-[-60px]">
                    </Link>
                </div>
                <div class="flex items-center mt-4 w-full">
                    <div class="w-[70%] bg-red-300"></div>
                    <Link href="underline-text" style="text-decoration: underline;" class="mr-4 mt-16">Ignorer cette etape</Link>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>

