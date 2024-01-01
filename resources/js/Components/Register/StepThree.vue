<script setup>

const emit = defineEmits(['chageState']) // declare emit

const handleSetState = () => {
    emit('chageState', 4)
}
</script>

<template>
    <div class="text-center">
        <p>
            « Bonjour, pour nous assurer que vous avez l'âge requis pour utiliser notre site, nous vous demandons de nous
            <br>fournir votre date de naissance. Vous pouvez refuser de nous fournir cette information, mais dans ce cas, vous ne
            <br> pourrez pas accéder à certains contenus ou services. »
        </p>

        <form action="" class="my-20">
            <div class="flex items-center m-3">
                <select name="" id="" class="input-transparent rounded-full">
                    <option value="01">Jour</option>
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

                <button @click="handleSetState()" class="bg-primary w-[150px] mx-5 text-white rounded-full h-9 text-4xl px-3 py-4">
                    <img src="/image/icon/left.png" alt="" class="relative left-1 top-[-60px]">
                </button>
            </div>
            <div class="flex items-center mt-4 w-full">
                <div class="w-[70%] bg-red-300"></div>
                <button @click="handleSetState()" style="text-decoration: underline;" class="mr-4 mt-16">Ignorer cette etape</button>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
