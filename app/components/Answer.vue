<template>

<!-- <div class="mt-2 flex gap-4 text-white text-sm font-bold font-mono leading-6 bg-stripes-blue rounded-lg">
    <div class="p-4 flex-none w-14 h-14 rounded-lg flex items-center justify-center bg-blue-300 dark:bg-blue-800 dark:text-blue-500">
      01</div>
    <div class="p-4 flex-initial w-24 sm:w-64 rounded-lg flex items-center justify-center bg-blue-500 shadow-lg">02</div>
    <div class="p-4 flex-initial w-12 sm:w-32 rounded-lg flex items-center justify-center bg-blue-500 shadow-lg">03</div>
  </div> -->
  <div class="cmpAnswer grid grid-cols-5 gap-3 mb-3 mt-3">
    <div class="col-span-4">
      <!-- Flex item containing shortlabel, team icon and answer values -->
      <div class="flex bg-white h-12 gap-2 text-left pl-2">
        <!-- Flex 1 Short label -->
        <div
        :class="[questionType ==='Standing' ? 'w-8' : 'w-16' ]"
        class="flex flex-none
          font-archivo uppercase text-xs one-word-per-line items-center justify-start">
          {{ shortLabel }}
        </div>
        <!-- Flex 2 Icon -->
        <div v-if="hasIcon" class="flex flex-none w-8 items-center justify-center">
          <span class="team-icon"></span>
        </div>
        <div v-else class="flex flex-none w-8 items-center justify-center">
          <span></span>
        </div>
        <!-- Flex 3 Answer value -->
        <div class="flex flex-initial w-full font-carme uppercase items-center justify-start">
          {{ value }}
        </div>
      </div>
    </div>
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
    questionType: {
      type: String,
      required: false,
      default: "text",
    },
    shortLabel: {
      type: String,
      required: true
    },
    points: {
      type: [ Number , null],
      required: false,
      default: null
    },
    hasIcon: {
      type: Boolean,
      default: false
    }
})

  const hasPoints = computed(() => {
      return typeof props.points == 'number'
    });


</script>


<style scss>

.one-word-per-line {
    /* word-spacing: 1568px;
    line-height: 13px; */
}

.team-icon {
  height: 2rem;
  width: 2rem;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

</style>
