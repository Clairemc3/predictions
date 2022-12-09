<template>
    <Answer v-for="answer in answers"
      :value="value(answer)"
      :short-label="shortLabel"
      :points="points(answer)"
      :icon="icon(answer)"
      :question-type="question.type"
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

const shortLabel = props.question.shortLabel;

const points = (answer) => {
    return answer ? answer.points : null;
}

const value = (answer) => {
  return answer ? answer.value : null;
}

const icon = (answer) => {
  return answer ? answer.icon : null;
}


</script>
