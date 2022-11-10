import './bootstrap'
import { createApp } from 'vue/dist/vue.esm-bundler'
import AppComponent from './components/App.vue'
import router from './router'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

const app = createApp({
    components: {
        AppComponent
    }
})

app.use(router)
app.mount('#app')

