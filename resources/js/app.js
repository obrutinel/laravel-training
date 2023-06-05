import "./bootstrap";
import '@fortawesome/fontawesome-free/css/all.css';
import $ from 'jquery';
import 'bootstrap';
import '@popperjs/core';
import "filepond/dist/filepond.min.css";

import { createApp } from "vue";
import CompaniesList from "./components/companies/CompaniesList.vue"
import CompanyCreate from "./components/companies/CompanyCreate.vue"

window.jQuery = window.$ = $

const app = createApp({});

app.component("companiesList", CompaniesList);
app.component("companyCreate", CompanyCreate);

app.mount("#app");