<script setup>
import Quote from "../Components/Quote.vue";

defineProps({
    quote: Object
})

</script>

<template>
    <Quote :quote="quote"/>
</template>
