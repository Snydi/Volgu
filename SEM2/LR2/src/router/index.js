import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  {
    path: '/collectors/:id?',
    name: 'Collectors',
    props: (route) => {
      return {
        id: route.params.id,
      }
    },
    component: () => import('@/views/CollectorsPage')
  },
  {
    path: '/crews',
    name: 'Crews',
    component: () => import('@/views/CrewsPage'),
  },
  {
    path: '/collector-edit/:id?',
    name: 'CollectorEdit',
    props: (route) => {
      return {
        id: route.params.id,
      }
    },
    component: () => import('@/views/CollectorEdit'),
  },
  {
    path: '/crew-edit/:id?',
    name: 'CrewEdit',
    props: (route) => {
      return {
        id: route.params.id,
      }
    },
    component: () => import('@/views/CrewEdit'),
  },
  {
    path: '/:catchAll(.*)',
    name: 'NotFound',
    component: () => import('@/views/CollectorsPage'),
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
