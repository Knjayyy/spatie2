<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const {hidden} = defineProps (['hidden'])
</script>
ss
<template>

    <div class="main-nav">
        <Link :href="route('dashboard')" :active="route().current('dashboard')" title="Dashboard">
            <i class="fa fa-home"></i> <span :hidden="hidden">Dashboard</span>
        </Link>
        <Link :href="route('clients')" :active="route().current('clients')" title="Clients List">
            <i class="fa-solid fa-user"></i> <span :hidden="hidden">Clients List</span>
        </Link>
        <Link v-if="$page.props.auth.user.permissions.includes('manage-suppliers')" :href="route('suppliers')" :active="route().current('suppliers')" title="Suppliers List"

        >
            <i class="fa-solid fa-user"></i> <span :hidden="hidden">Supplier</span>
        </Link>
        <Link :href="route('logout')" method="post" title="Logout">
            <i class="fa-solid fa-right-from-bracket"></i> <span :hidden="hidden">Logout</span>
        </Link>
    </div>
<!--
    <details class="dropdown mb-32">
  <summary class="m-1 btn">open or close</summary>
  <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52 text-white">
    <li><a>{{color}}</a></li>
    <li><a>Item 2</a></li>
  </ul>
</details> -->

</template>
