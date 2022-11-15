<template>
  <a :href="link" class="mt-5 basis-full flex-1 text-center">
    <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-8 mx-5 my-5 rounded-lg overflow-hidden text-center">
      <h1 class="title-font text-2xl text-xl font-medium text-gray-900 mb-3">{{ title }}</h1>
      <p class="leading-relaxed mb-3"> {{ description }}</p>
    </div>
  </a>
</template>

<script>

export default {
  props: {
    title: {
      type: String,
      required: true
    },
    description: {
      type: String,
      required: true
    }
  }
};

</script>
