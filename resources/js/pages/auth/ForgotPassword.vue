<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
// import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import  {PasswordResetInput} from '@/components/ui/input';
import { Head, useForm } from '@inertiajs/vue3';
// import { useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';
import PasswordChange from '@/layouts/password/PasswordChange.vue'

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

    <PasswordChange>
        <div class="flex justify-center mt-2 mb-3">
            <svg width="122px" height="122px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5.25 10.0546V8C5.25 4.27208 8.27208 1.25 12 1.25C15.7279 1.25 18.75 4.27208 18.75 8V10.0546C19.8648 10.1379 20.5907 10.348 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.40931 10.348 4.13525 10.1379 5.25 10.0546ZM6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C16.867 10 16.4515 10 16 10H8C7.54849 10 7.13301 10 6.75 10.0036V8ZM8 17C8.55228 17 9 16.5523 9 16C9 15.4477 8.55228 15 8 15C7.44772 15 7 15.4477 7 16C7 16.5523 7.44772 17 8 17ZM12 17C12.5523 17 13 16.5523 13 16C13 15.4477 12.5523 15 12 15C11.4477 15 11 15.4477 11 16C11 16.5523 11.4477 17 12 17ZM17 16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16C15 15.4477 15.4477 15 16 15C16.5523 15 17 15.4477 17 16Z"
                        fill="#000000"></path>
                </g>
            </svg>
        </div>

        <span class="items-center justify-center flex text-[#1E352A] font-bold">
            If you’ve lost your password to reset it,
        </span>
        <span class="items-center justify-center flex text-[#1E352A] font-bold">
            use the link below to get started.
        </span>

        <Head title="Forgot password" />
        <div v-if="status" class="mx-2 text-center text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <div class="flex justify-center mt-3">

            <div class="space-y-6">

                <form @submit.prevent="submit">
                    <div class="grid gap-2">
                        <Label for="email">Email</Label>

                        <PasswordResetInput id="email" type="email" name="email" autocomplete="off" v-model="form.email" autofocus />
                        <InputError :message="form.errors.email" />
                    </div>

                    <div class="my-6 flex items-center justify-start">
                        <Button class="w-full bg-[#7ADDB4] dark:bg-[#7ADDB4] border border-transparent  font-semibold text-xs uppercase tracking-widest hover:bg-[#8BFFCF] dark:hover:bg-[#8BFFCF] active:bg-[#8BFFCF] dark:active:bg-[#8BFFCF] 
                        focus:outline-none  transition ease-in-out duration-150 rounded-full"
                            :disabled="form.processing">
                            <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                            Email password reset link
                        </Button>
                    </div>
                </form>

                <div class="space-x-1 text-center text-sm text-muted-foreground ">
                    <TextLink :href="route('home')"> &larr; Back To Sign In</TextLink>
                </div>

            </div>
        </div>

    </PasswordChange>
</template>
