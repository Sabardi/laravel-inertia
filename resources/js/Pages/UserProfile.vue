<script setup>
import { Head } from '@inertiajs/vue3'

    defineProps({
        user: String
    })
</script>
<template>
    <Head :title=" `| ${$page.component}`" />
    <p>ini user profile {{ user }}</p>
</template>
