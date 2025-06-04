<script setup lang="ts">
// import InputError from '@/components/InputError.vue';
// import TextLink from '@/components/TextLink.vue';
// import { Button } from '@/components/ui/button';
// import { Input } from '@/components/ui/input';
// import { Label } from '@/components/ui/label';
// import AuthLayout from '@/layouts/AuthLayout.vue';
// import { Head, useForm } from '@inertiajs/vue3';
// import { LoaderCircle } from 'lucide-vue-next';
import { useForm } from '@inertiajs/vue3';
defineProps<{
    status?: string;
}>();

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <h1>Hello</h1>
    <form @submit.prevent="submit" >

    </form>
</template>
