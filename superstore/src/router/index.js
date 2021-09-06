import itemdetails from '../components/views/itemdetails'
import About from '../components/views/About'
import Inventory from '../components/views/Inventory'

export const routes = [
{
	path:'',
	component: Inventory
},
{
	path:'/about/:id',
	component: About
}
]