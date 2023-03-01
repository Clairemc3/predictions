import {defineStore} from 'pinia'

/**
 * This store exists only to manage the number of mounted 'Group' components in a
 * Predictions Group
 */
export const usePredictionsStore = defineStore('predictions', {
  state: () => ({
    predictions: [],
    pending: true,
    error: false,
  }),
  actions: {
    async getPredictions() {
        try {
            const data = await $fetch('http://localhost:3000/predictions/1')
            if (data) {
              this.predictions = data;
              this.pending = false;
              return;
            } else {
              this.error = true
              this.pending = false;
            }
            return;

        } catch(error) {
            this.error = true;
            this.pending = false;
            return;
        }
    },
  }

})