
import Vue from 'vue'
import Router from 'vue-router'
import Login from '../components/views/Login'
import Admin from '../components/views/Admin'
import Category from '../components/views/Category'
import Supplier from '../components/views/Supplier'
import Product from '../components/views/Product'
Vue.use(Router)
export default new Router({
 routes : [
 {
	path:'/',
	component: Login
	//redirect:{path:"/login"}
},

{
	path:'/login',
	component: Login
},
{
	path:'/admin',
	name:'admin',
	component: Admin,
	redirect:{path:"/admin/category"},
	children:[
       {
	path:'category',
	name:'admin.category',
	component: Category
    },
    {
	path:'supplier',
	name:'admin.supplier',
	component: Supplier
    },
    {
	path:'product',
	name:'admin.product',
	component: Product
    }
	],
}


],
mode:'history'
})