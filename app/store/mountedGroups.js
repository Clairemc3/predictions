import {defineStore} from 'pinia'

/**
 * This store exists only to manage the number of mounted 'Group' components in a
 * Predictions Group
 */
export const useMountedGroups = defineStore('mountedGroups', {
  state: () => ({
    number: 0
  }),
  getters: {
    getNumber() {
      return this.number;
    },
  },
  actions: {
    async recordMountedGroup() {
      this.number++;
    },
  }

})