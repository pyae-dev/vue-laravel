<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
// import { Link } from '@inertiajs/vue3';

defineProps<{
    title?: string;
    description?: string;
}>();

// const logoSrc = `${import.meta.env.BASE_URL}images/mpss-logo.png`
const imageSrc = `${import.meta.env.BASE_URL}images/login-image.png`;
</script>

<template>

    <div
        class="relative min-h-screen overflow-hidden bg-[#6AC886] flex flex-col items-center justify-center pt-6 sm:pt-0">
        <div
            class="absolute left-[-20%] top-[80%] h-[590px] w-[924px] rotate-[28.44deg] bg-[#3f6a60] [border-radius:462px/295px]">
        </div>

        <div
            class="absolute left-[90%] top-[3%] h-[192px] w-[206px] [background:linear-gradient(207deg,rgba(169,232,188,0.54)_0%,rgba(47,149,78,0.54)_100%)] [border-radius:103px/96px]">
        </div>

        <div
            class="absolute left-[85%] top-[75%] hidden h-[192px] w-[206px] [background:linear-gradient(215deg,rgba(51,105,79,0.13)_0%,rgba(192,237,206,0.13)_100%)] [border-radius:103px/96px] xl:block">
        </div>

        <div
            class="absolute left-[64%] top-[81%] hidden h-[76px] w-[89px] [background:linear-gradient(215deg,rgba(51,105,79,0.32)_0%,rgba(192,237,206,0.32)_100%)] [border-radius:44.5px/38px] xl:block">
        </div>

        <div
            class="absolute left-[26%] top-[28%] hidden h-[134px] w-[141px] [background:linear-gradient(207deg,rgba(169,232,188,0.76)_0%,rgba(47,149,78,0.76)_100%)] [border-radius:70.5px/67px] xl:block">
        </div>

        <div
            class="absolute left-[-2%] top-[-3%] h-[81px] w-[81px] rounded-full [background:linear-gradient(182deg,rgba(169,232,188,0.5)_0%,rgba(68,147,91,0.5)_100%)] xl:block">
        </div>

        <div
            class="absolute left-[21%] top-[40%] hidden h-[81px] w-[81px] rounded-full [background:linear-gradient(182deg,rgba(169,232,188,1)_0%,rgba(68,147,91,1)_100%)] xl:block">
        </div>

        <div
            class="absolute left-[118%] top-[82%] hidden h-[192px] w-[206px] [background:linear-gradient(215deg,rgba(51,105,79,0.3)_0%,rgba(192,237,206,0.3)_100%)] [border-radius:103px/96px] xl:block"
        ></div>

        <div
            class="absolute left-[0%] top-[18%] h-[134px] w-[141px] [backdrop-filter:blur(15px)_brightness(100%)] [background:linear-gradient(207deg,rgba(169,232,188,0.8)_0%,rgba(47,149,78,0.8)_100%)] [border-radius:70.5px/67px]">
        </div>

        <div
            class="absolute left-[41%] top-[17%] hidden h-[134px] w-[141px] [background:linear-gradient(207deg,rgba(169,232,188,1)_0%,rgba(47,149,78,1)_100%)] [border-radius:70.5px/67px] xl:block">
        </div>

        <div
            class="absolute left-[30%] top-[-5%] h-[72px] w-[79px] [background:linear-gradient(215deg,rgba(51,105,79,0.39)_0%,rgba(192,237,206,0.39)_100%)] [border-radius:39.5px/36px] xl:block">
        </div>

        <div class="z-10 flex max-h-[75.14vh] sm:w-[62vw] lg:h-[75.14vh]">
            <div
                class="relative hidden min-h-[200px] rounded-l-2xl bg-[#FFFFFF] p-4 lg:block lg:w-[354px] xl:block xl:basis-[45%]">
                <div class=" origin-top-left scale-75">
                    <AppLogoIcon />
                </div>

                <div class="left[0px] absolute bottom-10 z-10">
                    <img :src="imageSrc" alt="" class="w-76 h-80 object-cover" />
                </div>
            </div>

            <div
                class="items-center justify-center overflow-hidden rounded-2xl bg-[#88D39E] px-6 py-4 sm:max-w-md sm:rounded-2xl sm:shadow-2xl sm:shadow-gray-900/20 md:w-full md:overflow-hidden md:rounded-l-2xl md:rounded-r-2xl md:shadow-2xl md:shadow-gray-900/20 lg:flex-initial lg:basis-[55%] lg:items-center lg:justify-center lg:rounded-l-none xl:basis-[55%] xl:rounded-l-none">
                <slot />
            </div>
        </div>
    </div>
</template>
