<template>
  <div>
    <div class="cpmSection font-archivo bg-yellow-100 text-purple-900 uppercase text-lg py-2">
      {{ section.title }}
    </div>
    <Group v-for="group in groups"
        :group="group"
        :displayGroupLabel="(numberOfGroups > 1)"
        :section-order="sectionOrder"/>
  </div>
</template>

<script setup>
const props = defineProps({
  section: Object
})

const groups = props.section.groups;
const sectionOrder = props.section.order;

const numberOfGroups = groups.length;
</script>
