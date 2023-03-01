export const state = () => ({
  numberMountedGroups: 0
  })

  export const getters = {
    getnumberMountedGroups(state) {
      return state.numberMountedGroups
    }
  }

  export const mutations = {
    groupComponentMounted(state) {
      state.numberMountedGroups++
    }
  }

  export const actions = {
    async fetchCounter({ state }) {
      // make request
      const res = { data: 10 };
      state.renderedGroupsCount = res.data;
      return res.data;
    }
  }