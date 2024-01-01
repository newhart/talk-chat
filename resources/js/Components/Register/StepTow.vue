<script setup>

import {ref} from "vue";
const choiced = ref('')
const setChoiced = (choice) => {
    choiced.value = choice
}

const emit = defineEmits(['chageState']) // declare emit

const handleSetState = () => {
    emit('chageState', 3)
}
</script>

<template>
    <div class="text-center">
        <p>
            « L'amour est partout. <br>
            Il suffit de savoir où le chercher. »
        </p>
        <h3 class="text-4xl">
            Etes-vous un homme , <br> ou une femme
        </h3>
        <div class="block leading-6 my-10">
            <button :class="choiced === 'woman' ?  'w-[200px] h-10 rounded-full bg-primary text-white' : 'w-[200px] h-10 rounded-full bg-white'" @click="setChoiced('woman')"> Je suis une femme</button>
            <br>
            <button :class="choiced === 'man' ?  'w-[200px] h-10 rounded-full bg-primary text-white my-8' : 'w-[200px] h-10 rounded-full bg-white my-8'" @click="setChoiced('man')">Je suis une homme</button>
            <br>
            <button :class="choiced === 'other' ?  'w-[200px] h-10 rounded-full bg-primary text-white' : 'w-[200px] h-10 rounded-full bg-white'" @click="setChoiced('other')">Je suis non binaire</button>
            <br>
            <div class="mt-10">
                <button @click="handleSetState()" class="bg-primary w-[100px] h-10 py-2 px-4 rounded-full text-white my-7">Continuer</button>
            </div>

        </div>

    </div>
</template>

<style scoped>

</style>
