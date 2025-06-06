<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import  {PasswordResetInput} from '@/components/ui/input';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';
import PasswordChange from '@/layouts/password/PasswordChange.vue'

interface Props {
    token: string;
    email: string;
}

const props = defineProps<Props>();


const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
    errors: {},
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation');
        },
    });
};
</script>

<template>

<PasswordChange>

        <span class="items-center justify-center flex text-[#1E352A] font-bold text-2xl p-12 mt-6">
            Change Password
        </span>

        <Head title="Forgot password" />

        <div class="flex justify-center mt-3">

            <div class="space-y-6">

                <form @submit.prevent="submit">
                    <div class="grid gap-2">

                        <PasswordResetInput id="password" type="password" name="password" autocomplete="off" v-model="form.password" placeholder="Enter New Password" class="placeholder:text-[#80B599] placeholder:text-xs font-medium" />
                        <InputError :message="form.errors.password" />


                        <PasswordResetInput id="password_confirmation" type="password" name="password_confirmation" autocomplete="off" v-model="form.password_confirmation" placeholder="Confirm Password" class="placeholder:text-xs placeholder:text-[#80B599] font-medium"/>
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
            </div>
        </div>

    </PasswordChange>
</template>
