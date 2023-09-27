<template>
    <div class="bg-gray-200 shadow-md p-2 rounded-lg mx-2">
      <div class="flex justify-center mb-2">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwvGWjwjiCh8UCmLjeDGBj9iIZt7cyiynfwnYz_63_hg&s" alt="logo" class="max-w-sm max-h-36">
      </div>
      <h3 class="text-sm font-semibold">{{ client.last_name }}, {{ client.first_name }}</h3>
      <p class="text-gray-700 text-xs">{{ client.address }}</p>
      <button class="border-2 border-solid rounded-md border-gray-700
      p-2"
      :class="{
            'bg-red-600' : selectedColor == 'red',
            'bg-blue-400' : selectedColor == 'blue',
            'bg-green-600' : selectedColor == 'green',
            }"
      >Color</button>
    </div>
  </template>

<script setup>
import { defineProps } from 'vue';
import { inject } from 'vue';

const selectedColor = inject('selectedColor')
// const selectedColor = ref('')

const props = defineProps({
  client: Object,
});
</script>

