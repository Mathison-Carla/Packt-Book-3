import Vue from 'vue'
import VueRouter from 'vue-router';
import Vue from './vue/app'


Vue.use(VueRouter);


const router = new VueRouter({
    routes: routes
})

 import NewYork from './views/NewYork';
 import Alabama from './views/Alabama';
 import Nebraska from './views/Nebraska';


 const routes: = [
    {
    path : '/NewYork',
    component : NewYork

    }
]

const routes = [
    {
     name: 'Nebraska',
     path: 'views/Nebraska',
     component: Nebraska
    },
    
  ];

  const routes = [
    {
     name: 'Conneticut',
     path: 'views/Conneticut',
    component: Conneticut
    },
    
  ];

const routes = [
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

 

 

