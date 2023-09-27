<template>
    <div>
        <Link
                :is="link.url ? 'Link' : 'span' "
                v-for="link in links"
                :href="link.url"
                v-html="link.label"
                class="px-1"
                :class="{ 'text-dark': ! link.url, 'font-bold text-xl text-yellow-500' : link.active}"
                />
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    links: Array
})

</script>
