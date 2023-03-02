<template>
    <Answer v-for="answer in answers"
      :value="value(answer)"
      :short-label="shortLabel(answer)"
      :points="points(answer)"
      :status="status(answer)"
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

const shortLabel = (answer) => {
    return answer.order + '.'
}

const value = (answer) => {
  return answer ? answer.value : null;
}

const icon = (answer) => {
  return answer ? answer.icon : null;
}

const points = (answer) => {
    let results = getResults(answer);
    if (results && results.hasOwnProperty('points') && typeof results.points == 'number') {
      return results.points;
    }
    return null;
}

const status = (answer) => {
   let results = getResults(answer);
    return results ? results.status : 'draft';
}

function getResults(answer) {
  return answer ? answer.results : null;
}




</script>
