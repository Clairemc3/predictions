// import Vue from 'vue';
import { Slide } from 'vue3-burger-menu'

export default defineNuxtPlugin((nuxtApp) => {
     nuxtApp.vueApp.component('Slide', Slide);
  })