<script setup lang="ts">
import type { HTMLAttributes } from 'vue';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();

const logoSrc = `${import.meta.env.BASE_URL}images/mpss-logo.png`
</script>

<template>

    <img :src="logoSrc" alt="" class="w-20 h-8 fill-current" />
</template>
