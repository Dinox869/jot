import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent.vue";
import CreateContact  from "./views/CreateContact";
import ContactShow from "./views/ContactShow";
import ContactEdit from "./views/ContactEdit";
import ContactIndex from "./views/ContactIndex";
import Logout from "./Action/Logout";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [

        {path: '/contact/index', component: ContactIndex, name:'Index'},

        {path:'/home', component: ExampleComponent},

        {path: '/contact/create', component: CreateContact},

        {path: '/contacts/show/:id',component:ContactShow, name:'Show'},

        {path: '/contacts/:id/edit' , name:'Edit', component: ContactEdit},

        {path:'/logout',name:'Logout', component:Logout}

    ],
    mode:'history'
});
