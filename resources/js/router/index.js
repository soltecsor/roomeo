import Vue from 'vue'
import Router from 'vue-router'



Vue.use(Router)

export default new Router({
  mode:'history',
  routes: [
    {
      path: '/room-details',
      name: 'Room',
      component: Room,
    },
  ]
})