<template>
    <div role="alert" class="container text-center m-auto">
        <div class="w-half bg-red-800 text-white font-bold px-4 py-2 font-carme text-xl">
            {{ heading }}
        </div>
        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700 font-carme text-xs">
        <p> {{ message }}</p>
        </div>
    </div>
</template>


<script setup>

const props = defineProps({
    heading: {
        type: String,
        default: 'Error!',
        },
    message: {
        type: String,
        default: 'Something went wrong',
    },
})

</script>