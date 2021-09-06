<template>
  <div id="app">
      
      <Navbar @search="search"></Navbar>
    
    
<div class="container">

          <div class="row">

              <div class="col-md-9">
                   <router-view></router-view>
                    <!-- <Inventory @Additem="Addtocart" :items="items"></Inventory> -->

                </div>

             <!-- <div class="col-md-3">
                     <Cart @remove="remove" :cart="cart"></Cart>
                      
            </div>

          </div> -->
</div>
   

<!-- <Footer></Footer> -->

  </div>
</div>
</template>

<script>
import Navbar from './components/Views/Navbar'
import Footer from './components/Views/Footer'
// import Inventory from './components/Views/Inventory'
import Cart from './components/Views/Cart'
// import data from './data.js'
export default {
  components:{
    Navbar,Footer,Cart//,Inventory
           },
           data(){
            return{
               items:[],
               cart:[
              {
                id:1,
                name:'aaa',
                price:366
              }
               ]
            }
           },
           // mounted()
           // {
           //  this.items=data
           // },
           methods:{
            Addtocart(item)
            {
              this.cart.push(item)
            },
            remove(index){
              this.cart.splice(index,1)
            },
            search(keyword)
            {
                this.items=data.filter(item=>{
               
                  return item.name.toLowerCase().indexOf(keyword.toLowerCase())!==-1
                     })
            }

           }
  
}
</script>

<style>

</style>
