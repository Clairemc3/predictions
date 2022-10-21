import type { RouterConfig } from '@nuxt/schema'
// https://router.vuejs.org/api/interfaces/routeroptions.html
export default <RouterConfig> {
  routes: (_routes) => [
    {
      name: 'current-predictions',
      path: '/current-predictions',
      component: () => import('~/pages/mypredictions.vue')
    }
  ],
}