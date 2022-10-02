<template>
<div class="py-2">
  <h3 class="text-white"> {{ label }}</h3>
  <div class="grid grid-cols-5 gap-3 px-4 py-4 content-end">
    <div class="bg-white text-left px-2 py-3 col-span-4 my-auto">
      <span class="font-archivo">1.</span>
      <span class="text-base uppercase text-sm font-carme">Liverpool</span>
    </div>
    <div class="col-span-1 place-self-end mb-1">
      <Points/>
    </div>
  </div>
</div>

</template>

<script>

export default {
  props: {
    label: String,
    type: String
  },
  setup(props) {
    console.log(props.title)
  }
}

</script>

<style lang="scss" scoped>


</style>
