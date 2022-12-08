<template>
  <div class="cmpGroup py-2 ml-6 mt-3">
    <div class="grid grid-cols-5 gap-4 text-white">
      <h3 class="col-span-4 mb-2">
        {{ group.label ?? "Group label missing"  }}
      </h3>
      <h3 class="col-span-1">
        Pts
      </h3>
    </div>
    <div class="py-2 ml-1 mt-1">
      <component
        v-for="question in questions"
        :is="QuestionComponent(question)"
        :question="question"/>
      </div>
    </div>
</template>


<script setup>
  const props = defineProps({
    group: Object
  })

// Set the questions
const questions = props.group.questions;

// Resolve the Question component depending on the question type
const QuestionComponent = (question) => {
  if (question.type === 'Standing') {
    return resolveComponent('QuestionStanding')
  }
  return resolveComponent('QuestionDefault')
}
</script>
