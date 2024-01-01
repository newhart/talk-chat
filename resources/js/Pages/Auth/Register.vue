<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { useForm, Head } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import StepOne from "@/Components/Register/StepOne.vue";
import StepTow from "@/Components/Register/StepTow.vue";
import StepThree from "@/Components/Register/StepThree.vue";
import StepFor from "@/Components/Register/StepFor.vue";

const { register } = defineProps({
    register: {
        type: Object,
    },
});

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
}); //  form state  by inertia js

const step = ref(1); // state

const className = ref(
    "container bg-[url('/image/kiss.png')] bg-no-repeat bg-cover bg-blend-screen min-h-screen w-full mx-auto p-4 flex items-center justify-center"
);

const emit = defineEmits(["upState"]);

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
const setStep = (value) => {
    step.value = value;
    if (step.value === 1 || step.value === 2) {
        className.value =
            "container bg-[url(/image/bg-first.png)] bg-no-repeat bg-cover bg-blend-screen min-h-screen w-full mx-auto p-4 flex items-center justify-center";
    } else {
        className.value =
            "container bg-[url('/image/kiss.png')] bg-no-repeat bg-cover bg-blend-screen min-h-screen w-full mx-auto p-4 flex items-center justify-center";
    }
    emit("upState", value);
};

const getChoice = (value) => {
    console.log(value);
    form.find = value;
};

onMounted(() => {
    if (step.value === 1 || step.value === 2) {
        className.value =
            "container bg-[url(/image/bg-first.png)] bg-no-repeat bg-cover bg-blend-screen min-h-screen w-full mx-auto p-4 flex items-center justify-center";
    }

    form.name = register.name;
    form.email = register.email;
});
</script>

<template>
    <GuestLayout>
        <div :class="className">
            <StepOne
                v-if="step === 1"
                @chageState="setStep"
                @choiceFind="getChoice"
            ></StepOne>
            <StepTow v-if="step === 2" @chageState="setStep"></StepTow>
            <StepThree v-if="step === 3" @chageState="setStep"></StepThree>
            <StepFor v-if="step === 4"></StepFor>
        </div>
    </GuestLayout>
</template>
