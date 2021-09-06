import Inventory from '../components/Views/Inventory'
import Navbar from '../components/Views/Navbar'
import ItemDetails from '../components/Views/ItemDetails'
import Index from '../components/Views/Index'
export const routes = [

    {
     path:'',
	component:Inventory
    },
     {
     path:'/items/:id',
	component:ItemDetails
    },
    {
     path:'/index',
    component:Index
    }
]