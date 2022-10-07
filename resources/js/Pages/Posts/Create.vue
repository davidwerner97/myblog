<template>
    <app-layout title="New Post">
        <template #header>
            <div class="grid grid-cols-2">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    New post
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!--content-->
                <form @submit.prevent="submit">
                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Post
                            title</label>
                        <input v-model="form.title" type="text" id="title"
                               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                               placeholder="title" required>
                    </div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                        message</label>
                    <textarea v-model="form.excerpt" id="excerpt" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Leave a comment..."></textarea>
                    <button type="submit"
                            class="float-right my-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Leave message
                    </button>
                </form>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";

export default {
    name: "new post",
    components: {AppLayout},
    setup() {
        const form = reactive({
            title: null,
            excerpt: null,
        })
        function submit() {
            Inertia.post('/post/store', form)
        }
        return {form, submit}
    }
}
</script>

<style scoped>

</style>
