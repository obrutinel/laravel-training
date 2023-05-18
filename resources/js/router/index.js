import { createRouter, createWebHistory } from "vue-router";
import CompaniesIndex from "../components/companies/CompaniesIndex.vue";


const routes = [
    {
        path: "/",
        name: "companies.index",
        component: CompaniesIndex
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
});