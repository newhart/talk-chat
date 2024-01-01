<script setup>

import {Link} from "@inertiajs/vue3";
import Checkbox from "@/Components/Checkbox.vue";
</script>

<template>
    <div class="text-center">
        <p>
            "Plus on sait sur vous , plus c'est facile de se recontrer . Une relation durable est toujours bassee sur la
            <br> sincerite"
        </p>
        <form action="" class="my-10">
            <div class="flex items-center gap-2">
                <input type="text" placeholder="Prenom" class="rounded-full mx-3 input-transparent">
                <input type="text" placeholder="Nom" class="input-transparent rounded-full w-[480px]">
            </div>
            <div class="flex items-center gap-2 my-5 mx-3">
                <select name="" id="" class="input-transparent rounded-full w-[50%]">
                    <option value="default">Ville</option>
                    <option value="default">Mahamasina</option>
                    <option value="default">Toliara</option>
                </select>

                <select name="" id="" class="input-transparent rounded-full w-[50%] ml-15">
                    <option value="default">Pays</option>
                    <option value="default">Madagascar</option>
                    <option value="default">Francais</option>
                </select>
            </div>
            <div class="flex items-center mx-3">
                <textarea name="" id="" cols="30" rows="10" class="input-transparent rounded-[15%] w-[85%]" placeholder="Bio">
                </textarea>
                <button class="bg-primary w-[150px] mx-20 text-white rounded-full h-9 text-4xl">
                    <img src="/image/icon/left.png" alt="" class="relative left-1 top-[-40px]">
                </button>
            </div>
            <div class="block mt-4 ml-2">
                <label class="flex items-center">
                    <Checkbox name="remember" class="input-transparent" />
                    <Link class="ms-2 text-black" style="text-decoration: underline;"
                    >J'accepte le condition d'utilisations</Link
                    >
                </label>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
