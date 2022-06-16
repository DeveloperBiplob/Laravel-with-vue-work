import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import {createApp} from 'vue'

import './bootstrap';


import BackendApp from "./components/backend/App.vue";

import axios from "axios"
import router from "./router"


const app = createApp()
app.component("backend-app", BackendApp)
app.config.globalProperties.$axios = axios
app.use(router)
app.mount('#app')
