// https://v3.nuxtjs.org/api/configuration/nuxt.config
export default defineNuxtConfig({
    hooks: {
        'pages:extend' (pages) {
            pages.push({
                name: 'MyPredictions',
                path: '/my-predictions',
                file:  '~/pages/mypredictions.vue'
                })
        }
    },

    plugins: [
        { src: '~/plugins/slide-menu.js', mode: 'client' }
    ],

    modules: [
        '@nuxtjs/tailwindcss',
    ],

    // Global CSS: https://go.nuxtjs.dev/config-css
    css: [
        '@/assets/css/main.scss',
        '@/assets/css/tailwind.css'

    ],

    runtimeConfig: {
    // The private keys which are only available server-side
    apiSecret: '123',
    // Keys within public are also exposed client-side
    public: {
        apiBase: process.env.API_BASE_URL,
    }
    }


})
