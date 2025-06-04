<script setup lang="ts">
import { cn } from '@/lib/utils';
import { useVModel } from '@vueuse/core';
import type { HTMLAttributes } from 'vue';

const props = defineProps<{
    defaultValue?: string | number;
    modelValue?: string | number;
    class?: HTMLAttributes['class'];
}>();

const emits = defineEmits<{
    (e: 'update:modelValue', payload: string | number): void;
}>();

const modelValue = useVModel(props, 'modelValue', emits, {
    passive: true,
    defaultValue: props.defaultValue,
});
</script>

<template>
    <input
        v-model="modelValue"
        :class="
            cn(
                'flex  rounded-xl border border-input bg-[#b2dac8] dark:bg-[#b2dac8] text-[#33694F] dark:text-[#33694F] px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-white focus:placeholder:text-[#33694F] focus-visible:outline-none  disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus:bg-[rgba(230,243,237,0.25)] dark:focus:bg-[rgba(230,243,237,0.25)] invalid:border-[#33694F] invalid:bg-[#33694F] dark:invalid:bg-[#33694F] dark:invalid:text-[#33694F]  w-[240px] md:min-w-[280px] md:w-[30vw] lg:w-[15vw] lg-min-w[220px] lg-max-w[304px] ',
                props.class,
            )

            // cn(
            //     'flex   border-gray-300 dark:border-gray-700 dark:bg-[#b2dac8] text-white dark:text-[#33694F] focus:border-[#33694F] dark:focus:border-[#33694F] focus:ring-[#33694F] focus:bg-[rgba(230,243,237,0.25)] dark:focus:bg-[rgba(230,243,237,0.25)]  rounded-xl shadow-sm invalid:border-[#33694F] invalid:bg-[#33694F] dark:invalid:bg-[#33694F] dark:invalid:text-[#33694F]',
            //     props.class,
            // )
        "
    />
</template>




<!-- <input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-[#b2dac8] text-white dark:text-[#33694F] focus:border-[#33694F] dark:focus:border-[#33694F] focus:ring-[#33694F] focus:bg-[rgba(230,243,237,0.25)] dark:focus:bg-[rgba(230,243,237,0.25)]  rounded-xl shadow-sm invalid:border-[#33694F] invalid:bg-[#33694F] dark:invalid:bg-[#33694F]invalid:text-[#33694F] '] )}} "> -->
