<template>
    <app-layout title="Posts">
        <template #header>
            <div class="grid grid-cols-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Blogposts
                </h2>
                <Link href="../post/create">
                    <button type="button"
                            class="float-right w-24 py-2 px-3 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Create blog
                    </button>
                </Link>
            </div>
        </template>

        <div class="py-12 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-2">
            <post-card v-for="post in posts"
                       :key="post.id"
                       :post="post"/>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import {Link} from '@inertiajs/inertia-vue3';
import PostCard from "@/Pages/Posts/Components/PostCard";

export default {
    name: "Index",
    components: {AppLayout, Link, PostCard},

    props: {
        posts: Object,
    }
}
</script>

<style scoped>

</style>
