<template>
    <app-layout title="Post">
        <template #header>
            <div class="grid grid-cols-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{post.excerpt}}
                </h2>
            </div>
        </template>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    name: "Show",
    components: {AppLayout},
    props:{
        post: Object,
    }
}
</script>

<style scoped>

</style>
