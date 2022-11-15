<template>
  <div class="py-2 ml-6 mt-3">
    <div class="grid grid-cols-5 gap-4 text-white">
      <h3 class="col-span-4 mb-4">
        {{ questionGroup.label ?? "Question label missing"  }}
      </h3>
      <h3 class="col-span-1">
        Pts
      </h3>
    </div>
  <component v-for="question in questions" :is="QuestionComponent(question)" :question="question"/>
  </div>
</template>


<script setup>
const props = defineProps({
  questionGroup: Object
})

// Set the questions
const questions = props.questionGroup.questions;

// Resolve the Question component depending on the question type
const QuestionComponent = (question) => {
  if (question.type === 'Standing') {
    return resolveComponent('QuestionStanding')
  }
  return resolveComponent('QuestionDefault')
}
</script>
