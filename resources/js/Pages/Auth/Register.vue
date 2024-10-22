<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { route } from '../../../../vendor/tightenco/ziggy/src/js';

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
});

const submit = () =>
{
   form.post(route('register'))
}
</script>
<template>

    <Head :title="`| ${$page.component}`" />

    <h1 class="title">Register Acount</h1>
    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit">
            <div class="mb-6">
                <label for="name">Name</label>
                <input type="text" v-model="form.name">
                <small>{{ form.errors.name }}</small>
            </div>
            <div class="mb-6">
                <label for="email">Email</label>
                <input type="email" v-model="form.email">
                <small>{{ form.errors.email }}</small>

            </div>
            <div class="mb-6">
                <label for="password">Password</label>
                <input type="password" v-model="form.password">
                <small>{{ form.errors.password }}</small>
            </div>
            <div class="mb-6">
                <label for="name">Confirm Password</label>
                <input type="password" v-model="form.password_confirmation">
                <small>{{ form.errors.password }}</small>
            </div>

            <div class="">
                <p class="mb-2 text-slate-600">Already a user
                    <a href="#" class="text-link">Login</a>
            </p>

                <button class="primary-btn" :disabled="form.processing">Register</button>
            </div>
        </form>
    </div>
</template>
