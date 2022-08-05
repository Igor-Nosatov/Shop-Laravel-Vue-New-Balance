import { createRouter, createWebHistory } from 'vue-router/dist/vue-router.esm-bundler'
import Home1 from './views/Home1.vue'
import Home from './views/Home/Home.vue'
import Login from './views/Auth/Login.vue'
import Register from './views/Auth/Register.vue'

export default () => createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
    },
    {
      path: '/login',
      name: 'login',
      component: Login,
    },
    {
      path: '/register',
      name: 'register',
      component: Register,
    },








    {
      path: '/home1',
      name: 'home1',
      component: Home1,
    },
    {
      path: '/new',
      name: 'new',
      component: () => import('./views/NewCompany.vue')
    },
    {
      path: '/company/:id/edit',
      name: 'edit',
      component: () => import('./views/EditCompany.vue'),
      props: true
    },
  ]
})
