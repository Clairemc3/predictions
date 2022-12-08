<template>
<div>
  <div class="cmPrediction bg-purple-900">
    <Section v-for="(section,index) in sections" :section="section"/>
  </div>
</div>
</template>


<script setup>

const props = defineProps({
  predictions: {
      type: Object,
      required: true,
    },
})

const sections = computed(() => {
    return props.predictions.sections
  });


</script>