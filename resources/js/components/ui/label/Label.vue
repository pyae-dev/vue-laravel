<script setup lang="ts">
import { cn } from '@/lib/utils';
import { Label, type LabelProps } from 'radix-vue';
import { computed, type HTMLAttributes } from 'vue';

const props = defineProps<LabelProps & { class?: HTMLAttributes['class'] }>();

const delegatedProps = computed(() => {
    const { class: _, ...delegated } = props;

    return delegated;
});
</script>

<template>
    <Label
        v-bind="delegatedProps"
        :class="cn('text-sm font-bold leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-[#1E352A] dark:text-[#1E352A]', props.class)"
    >
        <slot />
    </Label>
</template>
