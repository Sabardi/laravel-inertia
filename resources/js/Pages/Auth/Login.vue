<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { route } from '../../../../vendor/tightenco/ziggy/src/js';
import TextInput from '../components/TextInput.vue';

const form = useForm({
    email: null,
    password: null,
    remember: null
});

const submit = () => {
    form.post(route('login'), {
        onError: () => form.reset("password")
    })
}
</script>
<template>

    <Head :title="`| ${$page.component}`" />

    <h1 class="title">Login To Your Account</h1>
    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit">
            <TextInput name="email" type="email" v-model="form.email" :message="form.errors.email" />
            <TextInput name="password" v-model="form.password" type="password" :message="form.errors.password" />
            <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-2">
                    <input type="checkbox" v-model="form.remember" id="remember">
                    <label for="remember">Remember Me </label>
                </div>
                <p class="mb-2 text-slate-600">Create accoutn
                    <a :href="route('register')" class="text-link">Create Acount</a>
                </p>
            </div>
            <button class="primary-btn" :disabled="form.processing">Login</button>
        </form>
    </div>
</template>
