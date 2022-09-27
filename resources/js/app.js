const boot = require('./bootstrap');

import { createApp } from "vue";
import Welcome from "./Welcome.vue";

createApp(Welcome).mount("#app")
