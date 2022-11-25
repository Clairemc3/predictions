<template>
  <div class="grid grid-cols-5 gap-4 mb-3 mt-3">
    <div class="col-span-4">
      <div class="bg-white text-left pl-2 pr-2 py-2 h-12 flex items-center">
        <div class="font-archivo uppercase w-1/4 text-sm one-word-per-line">
          {{ shortLabel }}
        </div>
        <div class="font-carme uppercase w-3/2 ">
          {{ value }}
        </div>
      </div>
    </div>
    <!-- ... -->
    <div class="col-span-1">
      <Points v-if="hasPoints" :number="points" />
    </div>
  </div>
</template>



<script setup>
const props = defineProps({
  value: {
      type: [String , null],
      required: false,
      default: null,
    },
    shortLabel: {
      type: String,
      required: true
    },
    points: {
      type: [ Number , null],
      required: false,
      default: null
    }
})

  const hasPoints = computed(() => {
      return typeof props.points == 'number'
    });


</script>


<style scss>

.one-word-per-line {
    word-spacing: 1568px;
    line-height: 13px;
}

</style>
