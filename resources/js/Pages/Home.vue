<script setup>
import { Head, Link } from '@inertiajs/vue3'
</script>


<template>

    <Head :title="`| ${$page.component}`" />
    <!-- <meta head-key="description" name="description" content="This is my home"> -->
    <h1 class="text-3xl font-bold underline">
        {{ $page.props.user }}
    </h1>

    <Link class="mt-[600px] block" href="/" preserve-scroll>Refresh</Link>
</template>
