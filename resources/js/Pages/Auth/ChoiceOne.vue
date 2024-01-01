<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Head , Link} from "@inertiajs/vue3";
import {ref} from "vue";
const choiced  =  ref('')
const setSchoiced = (choice) => {
    choiced.value = choice
}
</script>

<template>
<GuestLayout>
    <Head title="Register" />
    <div class="text-center">
        <p>
            « L'amour est partout. <br>
            Il suffit de savoir où le chercher. »
        </p>
        <h3 class="text-4xl">
            Etes-vous un homme , <br> ou une femme
        </h3>
        <div class="block leading-6 my-10">
            <button :class="choiced === 'woman' ?  'w-[200px] h-10 rounded-full bg-primary text-white' : 'w-[200px] h-10 rounded-full bg-white'" @click="setSchoiced('woman')"> Je suis une femme</button>
            <br>
            <button :class="choiced === 'man' ?  'w-[200px] h-10 rounded-full bg-primary text-white my-8' : 'w-[200px] h-10 rounded-full bg-white my-8'" @click="setSchoiced('man')">Je suis une homme</button>
            <br>
            <button :class="choiced === 'other' ?  'w-[200px] h-10 rounded-full bg-primary text-white' : 'w-[200px] h-10 rounded-full bg-white'" @click="setSchoiced('other')">Je suis non binaire</button>
            <br>
            <div class="mt-10">
                <Link :href="route('register.date')" class="bg-primary w-[100px] h-10 py-4 px-3 rounded-full text-white my-7">Continuer</Link>
            </div>

        </div>

    </div>
</GuestLayout>
</template>

