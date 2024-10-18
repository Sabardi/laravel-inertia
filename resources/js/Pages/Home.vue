<script setup>
import { Head } from '@inertiajs/vue3'
</script>


<template>

    <Head :title=" `| ${$page.component}`" />
        <!-- <meta head-key="description" name="description" content="This is my home"> -->
    <h1 class="text-3xl font-bold underline">
  {{ $page.props.user }}
    </h1>
</template>
