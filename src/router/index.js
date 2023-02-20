import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../components/Dashboard.vue";
import Home from "../views/Home.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },

  {
    path: "/dashboard",
    name: "Dashboard",
    component: Dashboard,
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
