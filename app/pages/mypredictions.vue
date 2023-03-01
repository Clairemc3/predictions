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
      <div v-if="predictionsStore.pending">
        <p>Loading your predictions</p>
      </div>
      <div v-else-if="predictionsStore.error">
        <AlertError message="Sorry, your predictions cannot be loaded"/>
      </div>
      <div v-else>
        <Predictions :predictions="predictionsStore.predictions" />
      </div>
      <!-- Total points -->
      <div class="py-5">
        <div class="font-archivo uppercase text-purple-900 font-bold text-xl py-2">
        Total points:
        </div>
        <Points :number="totalPoints" theme="yellow" size="large" />
      </div>
    </div>
  </div>
</template>

<script setup>

  import { usePredictionsStore } from '~~/store/predictionsStore';

  // Load the predictions store
  const predictionsStore = usePredictionsStore()

  // Fetch the predictions from the store
  predictionsStore.getPredictions()

  const totalPoints = 0;
</script>
