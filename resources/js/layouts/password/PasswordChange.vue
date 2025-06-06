<script setup lang="ts">
defineProps<{
    title?: string;
    description?: string;

}>();


</script>

<template>
    <!-- <div
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
            class="absolute left-[0%] top-[18%] h-[134px] w-[141px] [backdrop-filter:blur(15px)_brightness(100%)] [background:linear-gradient(207deg,rgba(169,232,188,0.8)_0%,rgba(47,149,78,0.8)_100%)] [border-radius:70.5px/67px] hidden sm:block">
        </div>

        

        <div
            class="absolute left-[30%] top-[-5%] h-[72px] w-[79px] [background:linear-gradient(215deg,rgba(51,105,79,0.39)_0%,rgba(192,237,206,0.39)_100%)] [border-radius:39.5px/36px] xl:block">
        </div>

        <div class="bg-white-400">
            <slot />
        </div>
        


    </div> -->


    <!-- for roll back purpose  -->
    <!-- <div class="flex items-center justify-center min-h-screen p-4 min-w-screen bg-[#D7F1E3] dark:bg-[#D7F1E3]">
        <div class="bg-indigo-700 w-[80%] h-96">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                class="bi bi-airplane-fill" viewBox="0 0 16 16">
                <path
                    d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849" />
            </svg>

            <span>If you’ve lost your password to reset it, use the link below to get started.</span>
            <div class="bg-red-800 flex justify-center ">

                <slot />
            </div>
        </div>

    </div> -->

    <div class="flex items-center justify-center min-h-screen p-4 min-w-screen bg-[#D7F1E3] dark:bg-[#D7F1E3] ">
        <div class="bg-[#A9E8BC] w-[80vw] h-[70vh] rounded-xl">

                <slot />

        </div>

    </div>


</template>