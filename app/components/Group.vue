<template>
  <div class="cmpGroup py-2 ml-6 mt-1">
    <div v-if="[displayGroupLabel || showPointsHeading]" class="grid grid-cols-5 gap-4 text-white">
      <h3 class="col-span-4 mb-2">
        <span v-if="displayGroupLabel">{{ group.label ?? "Group label missing"  }}</span>
      </h3>
      <h3 class="col-span-1">
        <span v-if="showPointsHeading">Pts</span>
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
  import { useMountedGroups } from '~~/store/mountedGroups';
  // Load the predictions store
  const mountedGroups = useMountedGroups();

  let numMountedGroup = mountedGroups.getNumber;

  // Define the props
  const props = defineProps({
    group: {
      type: Object,
      required: true
    },
    displayGroupLabel: {
      type: Boolean,
      default: true
    },
    sectionOrder: {
      type: [Number, null]
    }
  })


  // Set the questions
  const questions = props.group.questions;

  // Whether to show the Pts heading in this group
  // If this is the first mounted group component, then show the Pts heading
  const showPointsHeading = computed(() => {
      return numMountedGroup == 0;
  });

  // Resolve the Question component depending on the question type
  const QuestionComponent = (question) => {
    switch(question.type) {
      case 'Standing':
        return resolveComponent('QuestionStanding')
      case 'MultiSelect':
        return resolveComponent('QuestionMultiSelect')
      default:
        return resolveComponent('QuestionSingleSelect')
    }
  }

  onMounted(() => {
    numMountedGroup = mountedGroups.getNumber;
  })


  onBeforeMount(() => {
    mountedGroups.recordMountedGroup();
  })
</script>
