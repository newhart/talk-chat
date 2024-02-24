<script setup>
import { Link } from "@inertiajs/vue3";
import { onMounted } from "vue";

onMounted(() => {
    const app = () => {
        const burgerBtn = document.getElementById("burger-button");
        const mobileMenu = document.getElementById("mobil-menu");
        const toggleMenu = () => {
            mobileMenu.classList.toggle("hidden");
            mobileMenu.classList.toggle("flex");
        };

        burgerBtn.addEventListener("click", toggleMenu);
        mobileMenu.addEventListener("click", toggleMenu);
    };
    app()
});
</script>

<template>
    <div>
        <header class="relative z-50 w-full flex-none text-sm font-semibold leading-6 text-slate-900 shadow-lg">
            <nav class="mx-auto max-w-container px-4 sm:px-6 lg:px-8">
                <div class="relative hidden md:flex items-center justify-around py-1 mx-auto">
                    <Link :href="route('home')">
                    <img src="/image/logo.png" class="h-24 object-cover mx-auto" alt="" width="150" height="150" />
                    </Link>
                    <div class="flex">
                        <a href="#" class="text-[16px]">Abonement</a>
                        <a href="#" class="ml-8 text-[16px]">A porpos</a>
                        <a href="#" class="ml-8 text-[16px]">Securite</a>
                    </div>
                    <div class="flex">
                        <select
                            class="appearance-none border-none focus:border-none w-[110px] rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="fr">Français</option>
                            <option value="en">English</option>
                            <option value="es">Español</option>
                            <!-- Ajoutez d'autres options de langue selon vos besoins -->
                        </select>
                        <Link type="button" :href="route('login')"
                            class="bg-primary text-white w-[150px] h-[38px] px-5 py-5 rounded-xl mx-3 my-3"
                            style="padding: 7px 39px">
                        Connexion
                        </Link>
                    </div>
                </div>
                <div class="relative md:hidden flex items-center justify-between py-1 mx-auto">
                    <div class="md:hidden">
                        <Link :href="route('home')">
                        <img src="/image/sary.png" alt="" width="80" height="80">
                        </Link>
                    </div>
                    <div class="md:hidden">
                        <button id="burger-button" class="md:hidden text-3xl focus:outline-none">
                            &#9776
                        </button>
                    </div>
                </div>
                <div id="mobil-menu"
                    class="absolute top-0 bg-teal-50 w-full text-2xl flex-col justify-center h-screen hidden origin-top animate-open-menu">
                    <div class="flex justify-between items-center p-6">
                        <h1 class="text-3xl font-medium">
                            <Link :href="route('home')">
                            <img src="/image/sary.png" alt="" width="80" height="80">
                            </Link>
                        </h1>
                        <button class="text-4xl self-end px-6 py-6">&times</button>
                    </div>

                    <hr class="mx-auto bg-black dark:bg-white w-1/2">

                    <nav class="flex flex-col h-full leading-8 items-center py-14" aria-label="mobile">
                        <Link href="#" class="hover:opacity-90 py-2">Accueil</Link>
                        <Link href="#" class="hover:opacity-90 py-3">Securite</Link>
                        <Link href="#" class="hover:opacity-90 py-3">A porpos</Link>
                        <Link type="button" :href="route('login')"
                            class="bg-primary text-white w-[150px] hover:opacity-90 h-[38px]  py-1 px-5 rounded-xl mx-3 my-3">
                        Connexion
                        </Link>
                        <select
                            class="appearance-none border-none focus:border-none w-[110px] hover:opacity-90  rounded py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option value="fr">Français</option>
                            <option value="en">English</option>
                            <option value="es">Español</option>
                            <!-- Ajoutez d'autres options de langue selon vos besoins -->
                        </select>
                    </nav>
                </div>
            </nav>
        </header>

        <div>
            <slot />
        </div>
    </div>
</template>
