import { createWebHistory, createRouter } from 'vue-router';

import Home from "../components/backend/dashboard/Home.vue";
import CategoryList from "../components/backend/pages/category/List.vue"


export const routes = [
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Home
    },
    {
        name: 'category-list',
        path: '/category',
        component: CategoryList
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
})

export default router;
