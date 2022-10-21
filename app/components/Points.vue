<template>
  <div class="flex justify-center">
    <div
      class="circle bg-white flex
    justify-center items-center font-archivo"
    >
      {{ number }}
    </div>
  </div>
</template>

<script>

export default {
  props: {
    number: {
      type: Number,
      required: false,
      default: 0
    }
  },
  setup (props) {

  }
}

</script>

<style lang="scss" scoped>
.circle {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

</style>
