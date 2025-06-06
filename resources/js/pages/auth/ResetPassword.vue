<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { PasswordResetInput } from '@/components/ui/input';
// import { Label } from '@/components/ui/label';
import TextLink from '@/components/TextLink.vue';
// import AuthLayout from '@/layouts/AuthLayout.vue';
import PasswordChange from '@/layouts/password/PasswordChange.vue'
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';
// import {reactive} from 'vue';

interface Props {
    token: string;
    email: string;
}

const props = defineProps<Props>();


// const form = useForm({
//     token: props.token,
//     email: props.email,
//     password: '',
//     password_confirmation: '',
// });


const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
    errors: {},
})

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation');
        },
    });
};
</script>

<!-- <template>
    <PasswordChange title="Reset password" description="Please enter your new password below">
        <Head title="Reset password" />
        <Label class="flex justify-center items-center p-10 text-2xl">Change Password</Label>
        <div class="flex justify-center items-center">
            
        <form @submit.prevent="submit">
            <div class="grid gap-6">
                
                
                <div class="grid gap-2">
                    <Label for="password">Password</Label>
                    <Input
                        id="password"
                        type="password"
                        name="password"
                        autocomplete="new-password"
                        v-model="form.password"
                        class="mt-1 block w-full placeholder:text-[]"
                        autofocus
                        placeholder="Password"
                        
                    />
                    <InputError :message="form.errors.password" />
                </div>

                <div class="grid gap-2">
                    <Label for="password_confirmation"> Confirm Password </Label>
                    <Input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        autocomplete="new-password"
                        v-model="form.password_confirmation"
                        class="mt-1 block w-full"
                        placeholder="Confirm password"
                    />
                    <InputError :message="form.errors.password_confirmation" />
                </div>

                <Button type="submit" class="mt-4 w-full bg-[#7ADDB4] dark:bg-[#7ADDB4] border border-transparent  font-semibold text-xs uppercase tracking-widest hover:bg-[#8BFFCF] dark:hover:bg-[#8BFFCF] active:bg-[#8BFFCF] dark:active:bg-[#8BFFCF] focus:outline-none  transition ease-in-out duration-150 rounded-full" :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                    Reset password
                </Button>
            </div>
        
        </form>
    </div>
    </PasswordChange>
</template> -->

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

        <span class="items-center justify-center flex text-[#1E352A] font-bold text-2xl">
            Forgot Password?
        </span>

        <Head title="Forgot password" />

        <div class="flex justify-center mt-3">

            <div class="space-y-6">

                <form @submit.prevent="submit">
                    <div class="grid gap-2">

                        <PasswordResetInput id="password" type="password" name="password" autocomplete="off" v-model="form.password" autofocus placeholder="Enter New Password" class="placeholder:text-[#80B599] placeholder:text-xs font-medium" />
                        <InputError :message="form.errors.password" />

                        <PasswordResetInput id="password_confirmation" type="password" name="password_confirmation" autocomplete="off" v-model="form.password_confirmation" autofocus placeholder="Confirm Password" class="placeholder:text-xs placeholder:text-[#80B599] font-medium"/>
                        <InputError :message="form.errors.password_confirmation" />
                    </div>

                    <div class="my-6 flex items-center justify-start">
                        <Button class="w-full bg-[#7ADDB4] dark:bg-[#7ADDB4] border border-transparent  font-semibold text-xs uppercase tracking-widest hover:bg-[#8BFFCF] dark:hover:bg-[#8BFFCF] active:bg-[#8BFFCF] dark:active:bg-[#8BFFCF] 
                        focus:outline-none  transition ease-in-out duration-150 rounded-full"
                            :disabled="form.processing">
                            <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                            Save
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
