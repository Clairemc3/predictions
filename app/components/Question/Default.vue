<template>
  <div class="py-2 ml-6 mt-3">
    <Answer :value="value" :short-label="shortLabel" :points="points"/>
  </div>
</template>


<script setup>

const props = defineProps({
  question: {
      type: Object,
      required: true,
    }
})

const shortLabel = props.question.shortLabel;

// Define the answer
const answer = props.question.answer ?? null;
const value = answer ? answer.value : null;
const points = answer ? answer.points : null;


</script>
