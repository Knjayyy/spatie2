<script setup>
    import MainNav from '@/Components/MainNav.vue'
    import { ref, provide } from 'vue';
    import { Link } from '@inertiajs/vue3';

    let width = ref('w-[220px]')
    let hide = ref(false)
    const selectedColor = ref('')

    provide('selectedColor', selectedColor);


    function toggleWidth() {
        if(width.value == 'w-[220px]') {
            width.value = 'w-[100px]'
            hide.value = true
        }else {
            width.value = ['w-[220px]']
            hide.value = false
        }
    }
</script>

<template>

<div class="flex min-h-screen">
    <div id="sidebar" class="bg-cyan-800 p-6 duration-500" :class="[width],
    {
        'bg-red-600' : selectedColor == 'red',
        'bg-blue-400' : selectedColor == 'blue',
        'bg-green-600' : selectedColor == 'green',
    }"
    style="position: relative;">
        <button class="text-xl text-white" @click="toggleWidth" style="position: absolute; right: 10px; top:10px">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div id="branding" :hidden="hide">
            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/375758581_1023903152136067_4720222258515946823_n.png?_nc_cat=107&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHJq1dO0oYWie73sCk4-sCq58UA5fBSK1nnxQDl8FIrWUMK4B4hEaSFU3YMmXwYEEKYzcxqbR58ZM7VdYYJkAeA&_nc_ohc=COxa-7J309gAX_H6UVN&_nc_oc=AQlJ9XrmJfTt1eX5s-ZiT4dGj8YbHSmq5Kuvs1c1cfkZR16lgEG-_ZhIi1KtF507gaiWPaWCO_XsDWEbWa8JB1Cc&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRxd0zVqbr7Py4W_17cKjTmHIOY0qekKA1-uLzezAzpRA&oe=6528EE02" alt="Logo"
                class="w-[170px] h-[170px] mx-auto rounded-full object-cover mb-2">
            <!-- <h1 class="text-3xl text-center text-white my-6">Kien Montanez</h1> -->

        </div>
        <!-- <hr class="border-gray-600" :hidden="hide"> -->


        <MainNav :hidden="hide"></MainNav>
        <div class="mt-5" :hidden="hide">
            <label for="colorSelect">Select a color:</label>
                <select v-model="selectedColor" id="colorSelect" @change="updateColor">
                    <option value="red">Red</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select>
            </div>
        </div>
    <div id="container" class="flex-1">
        <slot />
    </div>
</div>

</template>
