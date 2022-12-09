<template>
  <div class="cmpAnswer grid grid-cols-5 gap-3 mb-3">
    <div class="col-span-4">
      <!-- Flex item containing shortlabel, team icon and answer values -->
      <div class="flex bg-white h-12 gap-2 text-left pl-2">
        <!-- Flex 1 Short label -->
        <div

        class="w-8 flex flex-none
          font-archivo uppercase text-xs one-word-per-line items-center justify-start">
          {{ shortLabel }}
        </div>
        <!-- Flex 2 Icon -->
        <div v-if="hasIcon" class="flex flex-none w-8 items-center justify-center">
          <img
          class="icon"
          :src="icon"
           alt="Profile image"
    >
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
      icon: {
        type: [String, null],
        default: null
      }
  })

  const hasPoints = computed(() => {
      return typeof props.points == 'number'
    });

    const hasIcon = computed(() => {
      return props.icon !== null;
    });


</script>


<style scss>

.one-word-per-line {
    word-spacing: 1568px;
    line-height: 13px;
}

.icon {
  height: 2rem;
  width: 2rem;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

</style>
