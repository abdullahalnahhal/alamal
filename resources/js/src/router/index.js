import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

/* Layout */
import Layout from '@/layout'

/**
 * Note: sub-menu only appear when route children.length >= 1
 * Detail see: https://panjiachen.github.io/vue-element-admin-site/guide/essentials/router-and-nav.html
 *
 * hidden: true                   if set true, item will not show in the sidebar(default is false)
 * alwaysShow: true               if set true, will always show the root menu
 *                                if not set alwaysShow, when item has more than one children route,
 *                                it will becomes nested mode, otherwise not show the root menu
 * redirect: noRedirect           if set noRedirect will no redirect in the breadcrumb
 * name:'router-name'             the name is used by <keep-alive> (must set!!!)
 * meta : {
    roles: ['admin','editor']    control the page roles (you can set multiple roles)
    title: 'title'               the name show in sidebar and breadcrumb (recommend set)
    icon: 'svg-name'             the icon show in the sidebar
    breadcrumb: false            if set false, the item will hidden in breadcrumb(default is true)
    activeMenu: '/example/list'  if set path, the sidebar will highlight the path you set
  }
 */

/**
 * constantRoutes
 * a base page that does not have permission requirements
 * all roles can be accessed
 */
export const constantRoutes = [{
    path: '/login',
    component: () => import('@/views/login/index'),
    hidden: true
  },

  {
    path: '/404',
    component: () => import('@/views/404'),
    hidden: true
  },



  {
    path: '/',
    component: Layout,
    redirect: '/slider',
    name: 'homepage',
    meta: {
      title: 'homepage',
      icon: 'homepage'
    },
    children: [{
      path: 'slider',
      name: 'Slider',
      component: () => import('@/views/homepage/slider'),
      meta: {
        title: 'Slider',
        icon: 'table'
      }
    }]
  },

  {
    path: '/contacts',
    component: Layout,
    children: [{
      path: 'index',
      component: () => import('@/views/contacts/index'),
      name: 'contacts',
      meta: {
        title: 'contacts',
        icon: 'contacts'
      }
    }, ]
  },
  {
    path: '/settings',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/settings'),
      name: 'settings',
      meta: {
        title: 'settings',
        icon: 'settings'
      }
    }, ]
  },
  {
    path: '/downloads',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/downloads'),
      name: 'downloads',
      meta: {
        title: 'downloads',
        icon: 'download'
      }
    }, ]
  },
  {
    path: '/news',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/news'),
      name: 'news',
      meta: {
        title: 'news',
        icon: 'news'
      }
    }, ]
  },
  {
    path: '/about',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/about'),
      name: 'about',
      meta: {
        title: 'about',
        icon: 'about'
      }
    }, ]
  },
  {
    path: '/fields',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/fields'),
      name: 'fields',
      meta: {
        title: 'fields',
        icon: 'field'
      }
    }, ]
  },
  {
    path: '/sub-fields',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/sub-fields'),
      name: 'sub-fields',
      meta: {
        title: 'sub-fields',
        icon: 'subField'
      }
    }, ]
  },
  {
    path: '/partners',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/partners'),
      name: 'partners',
      meta: {
        title: 'partners',
        icon: 'partners'
      }
    }, ]
  },
  {
    path: '/products',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/products'),
      name: 'products',
      meta: {
        title: 'products',
        icon: 'products'
      }
    }, ]
  },
  {
    path: '/achievements',
    component: Layout,
    children: [{
      path: '',
      component: () => import('@/views/achievements'),
      name: 'achievements',
      meta: {
        title: 'achievements',
        icon: 'achievements'
      }
    }, ]
  },



  // 404 page must be placed at the end !!!
  {
    path: '*',
    redirect: '/404',
    hidden: true
  }
]

const createRouter = () => new Router({
  // mode: 'history', // require service support
  scrollBehavior: () => ({
    y: 0
  }),
  routes: constantRoutes
})

const router = createRouter()

// Detail see: https://github.com/vuejs/vue-router/issues/1234#issuecomment-357941465
export function resetRouter() {
  const newRouter = createRouter()
  router.matcher = newRouter.matcher // reset router
}

export default router
