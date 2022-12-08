<template>
  <div class="flex justify-center">
    <div
    :class="[background, circleSize]"
    class="circle flex
    justify-center items-center font-archivo"
    >
      <span :class="numberStyles">{{ number }} </span>
    </div>
  </div>
</template>


<script setup>
  const props = defineProps({
    number: {
        type: Number,
        required: false,
        default: 0
      },
    theme: {
      type: String,
      required: false,
      default: "white"
    },
    size: {
      type: String,
      required: false,
      default: "small"
    }
  })

  const background = computed(() => {
    switch(props.theme) {
      case "white":
        return 'bg-white text-black';
      case "yellow":
        return "bg-yellow-100 text-black"
      default:
      return 'bg-white text-black';
    }
  });

  const circleSize = computed(() => {
    switch(props.size) {
      case "small":
        return 'w-40px h-40px';
      case "medium":
        return 'w-50px h-50px';
      case "large":
        return 'w-60px h-60px';
    }
  });

  const numberStyles = computed(() => {
    switch(props.size) {
      case "small":
        return 'text-sm';
      case "medium":
        return 'text-lg';
      case "large":
        return 'text-xl';
    }
  });


</script>

<style lang="scss" scoped>
.circle {
  border-radius: 50%;
}

</style>
