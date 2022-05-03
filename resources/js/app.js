require('./bootstrap')

import { createApp } from "vue";
import SideNav from "./vue/Landing/SideNav.vue"

const app = createApp({})
app.component('side-nav', SideNav)
app.mount('#app')