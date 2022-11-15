<template>
<div>
  <div v-if="pending">Loading</div>
  <div v-else class="bg-purple-900">
  <Section v-for="(section,index) in sections" :section="section"/>
  </div>
</div>
</template>


<script setup lang="ts">

const { pending, data: prediction } =
  await useLazyFetch<Object>('http://localhost:3000/predictions/1')
const sections = prediction.value['sections'];
</script>
