import "./bootstrap";

//import all functionalities
import { createApp } from "vue";
import { createPinia } from "pinia";
import "@fortawesome/fontawesome-free/css/all.css";
import { createVuetify } from "vuetify";
import { aliases, fa } from "vuetify/iconsets/fa";
import App from "./layouts/App.vue";
import router from "./router/router";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

//set vutify features
const vuetify = createVuetify({
  components,
  directives,
  icons: {
    defaultSet: "fa",
    aliases,
    sets: {
      fa,
    },
  },
  theme: {
    themes: {
      light: {
        colors: {
          background: "#FFFFFF",
          surface: "#FFFFFF",
          primary: "#FFFFFF",
          secondary: "#FFFFFF",
          error: "#FFFFFF",
          info: "#FFFFFF",
          success: "#FFFFFF",
          warning: "#FFFFFF",
        },
        dark: false,
      },
    },
  },
    breakpoint: {
    thresholds: {
      xs: 340,
      sm: 540,
      md: 800,
      lg: 1280,
    },
    scrollBarWidth: 24,
  },
});
//mount core element of our system
const vue = createApp(App);

vue.use(createPinia());
vue.use(router());
vue.use(vuetify);
vue.mount("#app");
