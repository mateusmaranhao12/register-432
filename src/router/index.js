import { createRouter, createWebHistory } from "vue-router";
import BemVindo from "../components/BemVindo.vue";
import Dashboard from "../components/Dashboard.vue";
import Usuarios from "../components/Usuarios.vue";
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
    children: [
      { 
        path: "/dashboard",
        component: BemVindo
      },
      { 
        path: '/usuarios',
        name: "Usuarios",
        component: Usuarios
      }
    ]
  }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
