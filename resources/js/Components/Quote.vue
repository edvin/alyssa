<script setup>
import {computed} from "vue";
import {Link} from "@inertiajs/vue3";
import QuoteSymbol from "./QuoteSymbol.vue";

const props = defineProps({
    quote: {
        type: Object
    }
})

const age = computed(() => {
    if (!props.quote?.ts) return "N/A";

    const birth = new Date(props.quote.ts);
    const today = new Date();
    let age = today.getFullYear() - birth.getFullYear();

    const birthdayHasOccurred =
        today.getMonth() > birth.getMonth() ||
        (today.getMonth() === birth.getMonth() && today.getDate() >= birth.getDate());

    if (!birthdayHasOccurred)
        age--;

    return age;
});

</script>

<template>
    <div class="flex place-content-center pt-16 w-full">
        <section
            class="bg-slate-50 w-11/12 md:w-1/2 border-l-gray-300 border-l-10 pl-5 py-16 flex place-content-center text-lg">

            <blockquote>
                <div>
                    <QuoteSymbol/>
                    <span v-html="quote.text"/>
                </div>
                <small>- Alyssa, {{ age }} år</small>
            </blockquote>

        </section>
    </div>

    <div class="flex place-content-center py-4">
        <Link href="/" preserve-scroll>
            <button
                class="bg-gradient-to-b from-blue-700 to-sky-900 border-b-blue-950 border-1 hover:from-blue-600 hover:to-sky-800 hover:border-b-blue-900 rounded-md text-white text-sm px-4 py-2"
            >
                Hit me again, Alyssa!
            </button>
        </Link>
    </div>

</template>
