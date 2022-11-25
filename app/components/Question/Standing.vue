<template>
    <Answer v-for="answer in answers"
      :value="value(answer)"
      :short-label="shortLabel(answer)"
      :points="points(answer)"
    />
</template>


<script setup>

const props = defineProps({
  question: {
      type: Object,
      required: true,
    }
})

// Define the answers
const answers = props.question.answers ?? [];

const shortLabel = (answer) => {
    return answer.order + '.'
}


const points = (answer) => {
    return answer ? answer.points : null;
}

const value = (answer) => {
  return answer ? answer.value : null;
}


</script>
