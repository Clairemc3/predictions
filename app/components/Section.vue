<template>
  <div>
    <div class="font-archivo bg-yellow-100 text-purple-900 uppercase text-lg py-2">
      {{ section.title }}
    </div>
    <QuestionGroup v-for="questionGroup in questionGroups"
        :question-group="questionGroup"/>
  </div>
</template>

<script setup>
const props = defineProps({
  section: Object
})

const questionGroups = props.section.questionGroups;
</script>
