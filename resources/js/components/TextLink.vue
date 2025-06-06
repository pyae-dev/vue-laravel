<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

interface Props {
    href: string;
    tabindex?: number;
    method?: string;
    as?: string;
}

defineProps<Props>();
</script>

<template>
    <Link
        :href="href"
        :tabindex="tabindex"
        :method="method"
        :as="as"
        class="hover:text-[#33694F] text-[#1E352A] underline-offset-4 transition-colors duration-300 ease-out"
    >
        <slot />
    </Link>
</template>
