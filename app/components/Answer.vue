<template>
  <div class="grid grid-cols-5 gap-4 mb-3 mt-3">
    <div class="col-span-4">
      <div class="bg-white text-left pl-2 pr-2 py-2">
        <span class="font-archivo pr-2">{{ shortQuestionLabel }}</span>
        <span class="text-base uppercase text-sm font-carme"> {{ value }} </span>
      </div>
    </div>
    <!-- ... -->
    <div class="col-span-1">
      <Points :number="points" />
    </div>
  </div>
  <!-- <div class="grid grid-cols-5 gap-30 px-4 py-2 align-center">
    <div class="bg-white text-left px-2 py-1 col-span-4 align-center">
      <span class="font-archivo">{{ shortQuestionLabel }}</span>
      <span class="text-base uppercase text-sm font-carme"> {{ value }} </span>
    </div>
    <div class="col-span-1 text-center px-2 py-1 self-center">
      <Points value="points" />
    </div>
  </div> -->
</template>

<script>

export default {
  props: {
    shortQuestionLabel: {
      type: String,
      required: true
    },
    value: {
      type: String,
      required: false,
      default: null
    },
    points: {
      type: Number,
      required: false,
      default: 0
    }
  },
  setup (props) {

  }
}

</script>
