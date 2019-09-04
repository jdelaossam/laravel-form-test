import Vue from 'vue'
import VueRouter from 'vue-router'
import About from './components/About'

Vue.use(VueRouter)

const route = new VueRouter({
    mode: 'history',
    routes: [{
        path: '/about',
        name: 'about',
        component: About
    }]
})

export default route
