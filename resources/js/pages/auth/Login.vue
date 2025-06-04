<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <AuthBase title="Log in to your account" description="">
        <div v-if="status" class="mb-4 text-center text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <div
            class="flex items-center justify-center pt-[7vh] text-3xl font-semibold text-[#1E352A] sm:pb-[2vh] sm:pt-[7vh] md:pb-[2vh] md:pt-[7vh] lg:pb-[2vh] lg:pt-[7vh] mb-6">
            <span class="text-[#1E352A]">Login</span>
        </div>


        <form @submit.prevent="submit" class="flex flex-col gap-6 items-center justify-center">
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <Label for="email">Email</Label>
                    <Input id="email" type="email" required autofocus tabindex="1" autocomplete="email"
                        v-model="form.email" placeholder="email@example.com" />
                    <InputError :message="form.errors.email" />
                </div>

                <div class="grid gap-2">
                    <div class="flex items-center justify-between">
                        <Label for="password">Password</Label>
                        <TextLink v-if="canResetPassword" :href="route('password.request')" class="text-sm"
                            tabindex="5">
                        </TextLink>
                    </div>
                    <Input id="password" type="password" required tabindex="2" autocomplete="current-password"
                        v-model="form.password" placeholder="password" />
                    <InputError :message="form.errors.password" />
                </div>

                <div class=" items-center justify-between sm:flex sm:items-center sm:justify-between md:items-center md:justify-between text-sm  block" tabindex="3">
                    <Label for="remember" class=" items-center space-x-3 cursor-pointer hidden md:flex text-xs">
                        <Checkbox id="remember" v-model:checked="form.remember" tabindex="4" />
                        <span>Remember me</span>
                    </Label>

                    <Label for="remember" class="flex items-center justify-start text-xs ">

                        <a :href="route('password.request')">Forgot Password?</a>
                    </Label>
                </div>

                <Button type="submit" class=" w-full bg-[#D6FFE9] dark:bg-[#D6FFE9] border border-transparent  font-semibold text-xs uppercase tracking-widest hover:bg-[#468962] dark:hover:bg-[#468962] active:bg-[#468962] dark:active:bg-[#468962] focus:outline-none  transition ease-in-out duration-150 rounded-xl" :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                    Log in
                </Button>
            </div>
        </form>

    </AuthBase>
</template>
