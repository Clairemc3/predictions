<template>
  <div>
    <div class="font-archivo bg-yellow-100 text-purple-900 uppercase text-lg py-2">
      {{ section.title }}
    </div>
    <Group v-for="group in groups"
        :group="group"/>
  </div>
</template>

<script setup>
const props = defineProps({
  section: Object
})

const groups = props.section.groups;
</script>
