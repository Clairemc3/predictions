<template>
  <div class="grid grid-cols-5 gap-4 mb-3 mt-3">
    <div class="col-span-4">
      <div class="bg-white text-left pl-2 pr-2 py-2">
        <span class="font-archivo pr-2 uppercase">{{ shortLabel }}</span>
        <span class="text-base uppercase text-sm font-carme"> {{ value }} </span>
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
