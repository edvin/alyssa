<script setup>
import {computed, onMounted} from "vue";
import {Link} from "@inertiajs/vue3";
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
        <section class="bg-slate-50 w-1/2 border-l-gray-300 border-l-10 pl-5 py-16 flex place-content-center text-lg">

            <blockquote>
                <div>
                    <svg class="w-8 h-8 text-gray-400 dark:text-gray-600 mb-4" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                    </svg>
                    <span v-html="quote.text"/>
                </div>
                <small>- Alyssa, {{ age }} år</small>
            </blockquote>

        </section>
    </div>

    <div class="flex place-content-center py-4">
        <Link href="/">
            <button
                class="bg-gradient-to-b from-blue-700 to-sky-900 border-b-blue-950 border-1 hover:from-blue-600 hover:to-sky-800 hover:border-b-blue-900 rounded-md text-white text-sm px-4 py-2"
            >
                Hit me again, Alyssa!
            </button>
        </Link>
    </div>

</template>
