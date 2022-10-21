<template>
  <div class="w-full">
    <!-- This updated at text is only required when this application is running on a mobile app -->
    <p v-if="false" class="font-carme text-xs text-right p-1">
      Updated at: 09/09/2020 10:53
    </p>
    <ProfileImage />
    <div class="text-center">
      <h1>My predictions</h1>
      <h2>2022</h2>
      <Predictions />
    </div>
  </div>
</template>

<script>
export default {
  name: 'MyPredictions',
  layout: 'default'
}
</script>
