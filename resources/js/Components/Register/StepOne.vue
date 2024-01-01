<script setup>
import { ref } from "vue";
const choiced = ref("");
const emit = defineEmits(["chageState", "choiceFind"]);
const setChoiced = (choice) => {
    choiced.value = choice;
    emit("choiceFind", choice);
};

const handleSetState = () => {
    if (!choiced.value == "") {
        emit("chageState", 2);
    }
};
</script>

<template>
    <div class="text-center">
        <p>
            "Trouvez l'amour, l'amitié ou une relation de couple <br />
            avec des personnes qui vous ressemblent."
        </p>
        <h3 class="text-4xl">Que cherchez-vous?</h3>
        <div class="block leading-6 my-10">
            <button
                :class="
                    choiced === 'woman'
                        ? 'bg-primary w-[200px] h-10 rounded-full text-white'
                        : 'bg-white w-[200px] h-10 rounded-full'
                "
                @click="setChoiced('woman')"
            >
                Je cherche une femme
            </button>
            <br />
            <button
                :class="
                    choiced === 'man'
                        ? 'bg-primary w-[200px] h-10 rounded-full my-8 text-white'
                        : 'bg-white w-[200px] h-10 rounded-full my-8'
                "
                @click="setChoiced('man')"
            >
                Je cherche un homme
            </button>
            <br />
            <button
                :class="
                    choiced === 'all'
                        ? 'bg-primary text-white w-[200px] h-10 rounded-full'
                        : 'bg-white w-[200px] h-10 rounded-full'
                "
                @click="setChoiced('all')"
            >
                Je cherche les deux
            </button>
            <br />
            <div class="my-10">
                <button
                    class="bg-primary w-[100px] h-10 py-2 px-4 rounded-full text-white"
                    @click="handleSetState()"
                >
                    Continuer
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
