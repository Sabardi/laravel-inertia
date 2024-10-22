<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import { route } from '../../../../vendor/tightenco/ziggy/src/js';
import TextInput from '../components/TextInput.vue';

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
});

const submit = () => {
    form.post(route('register'), {
        onError: () => form.reset("password", "password_confirmation")
    })
}
</script>
<template>

    <Head :title="`| ${$page.component}`" />

    <h1 class="title">Register Acount</h1>
    <div class="w-2/4 mx-auto">
        <form @submit.prevent="submit">
            <TextInput name="name" type="text" v-model="form.name" :message="form.errors.name" />
            <TextInput name="email" type="email" v-model="form.email" :message="form.errors.email" />
            <TextInput name="password" v-model="form.password" type="password" :message="form.errors.password" />
            <TextInput name="password_confirmation" type="password" v-model="form.password_confirmation"
                :message="form.errors.password_confirmation" />
            <div class="">
                <p class="mb-2 text-slate-600">Already a user
                    <a :href="route('login')" class="text-link">Login</a>
                </p>

                <button class="primary-btn" :disabled="form.processing">Register</button>
            </div>
        </form>
    </div>
</template>
