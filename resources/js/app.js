import "./bootstrap";
import '@fortawesome/fontawesome-free/css/all.css';
import 'bootstrap';
import '@popperjs/core'


import { createApp } from "vue";
import CompaniesList from "./components/companies/CompaniesList.vue"

const app = createApp({});

app.component("companiesList", CompaniesList);

app.mount("#app");