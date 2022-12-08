<template>
  <div class="flex flex-wrap justify-evenly my-5 mx-5">
    <img
      class="rounded-full"
      :class="[small ? 'w-10 h-10' :  'w-20 h-20']"
      src="~/assets/images/img_avatar2.png"
      alt="Profile image"
    >
  </div>
</template>

<script setup>

const props = defineProps({
  inline: {
      type: Boolean,
      default: false,
    },
  size: {
    type: String,
    default: 'medium',
  },
})

const small = computed(() => {
    return props.size === 'small'
  });


</script>
