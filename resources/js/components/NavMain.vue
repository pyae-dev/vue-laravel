<script setup lang="ts">
import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type SharedData } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import type { Component } from 'vue';
import { ref, onMounted, watch } from 'vue';

interface NavItem {
    title: string;
    url: string;
    icon: Component;
    children?: NavItem[];
}

defineProps<{
    items: NavItem[];
}>();


const openDropdowns = ref<Record<string, boolean>>({});

onMounted(() => {
    const saved = localStorage.getItem('sidebarDropdowns');
    if (saved) openDropdowns.value = JSON.parse(saved);
});

watch(openDropdowns, (val) => {
    localStorage.setItem('sidebarDropdowns', JSON.stringify(val));
}, { deep: true });

const toggleDropdown = (title: string) => {
    openDropdowns.value[title] = !openDropdowns.value[title];
};

// const page = usePage<SharedData>();
const page = usePage();
</script>

<!-- <template>
    <SidebarGroup class="px-2 py-0">
        <SidebarGroupLabel> </SidebarGroupLabel>
        <SidebarMenu>
            <SidebarMenuItem v-for="item in items" :key="item.title">
                <SidebarMenuButton class="text-[#1E352A] hover:text-neutral-800 dark:text-[#1E352A] dark:hover:text-neutral-100 font-bold"
                 as-child :is-active="item.url === page.url">
                    <Link :href="item.url">
                        <component :is="item.icon" />
                        <span>{{ item.title }}</span>
                    </Link>
                </SidebarMenuButton>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarGroup>
</template> -->

<template>
    <SidebarGroup class="px-2 py-0">
        <SidebarGroupLabel></SidebarGroupLabel>
        <SidebarMenu>
            <SidebarMenuItem v-for="item in items" :key="item.title">
                
                <!-- If item has children, treat as dropdown -->
                <template v-if="item.children">
                    <SidebarMenuButton
                        class="text-[#1E352A] hover:text-neutral-800 dark:text-[#1E352A] dark:hover:text-neutral-100 font-bold flex justify-between items-center w-full"
                        @click="toggleDropdown(item.title)">
                        <div class="flex items-center gap-2">
                            <component :is="item.icon" />
                            <span>{{ item.title }}</span>
                        </div>
                        <span>{{ openDropdowns[item.title] ? '▾' : '▸' }}</span>
                    </SidebarMenuButton>

                    <!-- Dropdown menu items -->
                    <SidebarMenu v-if="openDropdowns[item.title]" class="ml-2 mt-1">
                        <SidebarMenuItem v-for="child in item.children" :key="child.title">
                            <SidebarMenuButton
                                class="text-sm text-[#1E352A] hover:text-neutral-800 dark:text-[#1E352A] dark:hover:text-neutral-100"
                                as-child :is-active="child.url === page.url">
                                <Link :href="child.url">
                                <span>{{ child.title }}</span>
                                </Link>
                            </SidebarMenuButton>
                        </SidebarMenuItem>
                    </SidebarMenu>
                </template>

                <!-- Normal nav item -->
                <template v-else>
                    <SidebarMenuButton
                        class="text-[#1E352A] hover:text-neutral-800 dark:text-[#1E352A] dark:hover:text-neutral-100 font-bold"
                        as-child :is-active="item.url === page.url">
                        <Link :href="item.url">
                        <component :is="item.icon" />
                        <span>{{ item.title }}</span>
                        </Link>
                    </SidebarMenuButton>
                </template>
            </SidebarMenuItem>
        </SidebarMenu>
    </SidebarGroup>
</template>
