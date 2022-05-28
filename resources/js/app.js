require('./bootstrap')

import { createApp } from "vue";
import SideNav from "./vue/Landing/SideNav.vue"
import TitleColors from "./vue/Landing/TitleColors.vue"
import FallingWords from "./vue/About/FallingWords.vue"
import AboutMe from "./vue/About/About.vue"

const app = createApp({})
app.component('side-nav', SideNav)
app.component('title-colors',TitleColors)
app.component('falling-words',FallingWords)
app.component('about-me',AboutMe)
app.mount('#app')