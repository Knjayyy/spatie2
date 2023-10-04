<script setup>
import Layout from '@/Layouts/Layout.vue'
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>
    <Head title="Suppliers"/>
    <Layout title="Suppliers">

    <div class="flex justify-between bg-cyan-200">
        <h2 class="font-bold text-4xl text-cyan-800 ml-8 mt-4 mb-8">Suppliers List</h2>
    </div>
    <td><a href="suppliers/create" class="border-2 border-solid rounded-md border-gray-700
      p-2 flex items-center mt-5">Add Supplier</a></td>
    </Layout>
</template>
