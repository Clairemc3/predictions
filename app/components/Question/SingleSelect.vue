<template>
  <Answer
    :value="value"
    :short-label="shortLabel"
    :points="points"
    :status="status"
    :icon="icon"
    :question-type="question.type"/>
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

const icon = answer ? answer.icon : null;
const results = answer ? answer.results : null;
const points = results ? results.points : null;
const status = results ? results.status : 'draft';



</script>
