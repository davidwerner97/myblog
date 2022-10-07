<template>
    <!--content-->
    <div class="flex justify-center m-2">
        <a :href="'/post/'+post.id">
            <div class="block rounded-lg shadow-lg bg-white max-w-sm text-center">
                <div class="py-3 px-6 border-b border-gray-300">
                    {{ post.user.name }}
                </div>
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">{{ post.title }}</h5>
                    <p class="text-gray-700 text-base mb-4">
                        {{ post.excerpt }}
                    </p>
                </div>
                <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                    {{ post.created_at }}
                </div>
            </div>
        </a>
    </div>
</template>

<script>

export default {
    name: "PostCard",
    props: {
        post: Object,
    }
}
</script>

<style scoped>

</style>
