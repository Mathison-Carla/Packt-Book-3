import Vue from 'vue'
import VueRouter from 'vue-router';
import App from './components/App'

Vue.use(VueRouter);


const router = new VueRouter({
    routes: routes
})

 import NewYork from './components/NewYork';
 import Alabama from './components/Alabama';
 import Nebraska from './components/Nebraska';


 const routes = [
    {
    path : '/',
    component : NewYork
    },
    {
     name: 'Nebraska',
     path: 'views/Nebraska',
     component: Nebraska
    },
    {
     name: 'Conneticut',
     path: 'views/Conneticut',
    component: Conneticut
    },

  {
   name: 'Alabama',
   path: 'views/Alabama',
  component: Alabama
  },
  
];

export default router

const app = new Vue({
    router,
    components : { App }
 }).$mount('#app')

 

 

