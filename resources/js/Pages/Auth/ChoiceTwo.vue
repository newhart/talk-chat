<script setup>

import GuestLayout from "@/Layouts/GuestLayout.vue";
import {Head, Link} from "@inertiajs/vue3";
import {ref} from "vue";
const choiced = ref('')
const setChoiced = (choice) => {
    choiced.value = choice
}
</script>

<template>
    <GuestLayout>
        <Head title="Register" />
        <div class="text-center">
            <p>
                "Trouvez l'amour, l'amitié ou une relation de couple <br>
                avec des personnes qui vous ressemblent."

            </p>
            <h3 class="text-4xl">
                Que cherchez-vous?
            </h3>
            <div class="block leading-6 my-10">
                <button :class="choiced === 'woman' ? 'bg-primary w-[200px] h-10 rounded-full text-white' : 'bg-white w-[200px] h-10 rounded-full' " @click="setChoiced('woman')"> Je cherche une femme</button>
                <br>
                <button :class="choiced === 'man'  ? 'bg-primary w-[200px] h-10 rounded-full my-8 text-white' : 'bg-white w-[200px] h-10 rounded-full my-8'" @click="setChoiced('man')">Je cherche un homme</button>
                <br>
                <button :class="choiced === 'all' ? 'bg-primary text-white w-[200px] h-10 rounded-full' : 'bg-white w-[200px] h-10 rounded-full'" @click="setChoiced('all')">Je cherche  les deux</button>
                <br>
                <div class="my-10">
                    <Link :href="route('register.choiceOne')" class="bg-primary w-[100px] h-10 py-4 px-3 rounded-full text-white">Continuer</Link>
                </div>

            </div>

        </div>
    </GuestLayout>
</template>

