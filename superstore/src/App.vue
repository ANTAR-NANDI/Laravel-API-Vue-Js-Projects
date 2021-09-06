<template>
  <div id="app">
   <!--  <router-link :to="{path: '/'}" >Home</router-link>
    <router-link :to="{path: '/about/1'}" >ABout 1</router-link>
    <router-link :to="{path: '/about/2'}" >ABout 2</router-link>
    <router-link :to="{path: '/about/3'}" >ABout 3</router-link>
    
    <router-view></router-view> -->

           <navbar @search="search"></navbar>
            
       <div class="container">
              
            
     <div class="row">
                <div class="col-md-9">
                  <router-view></router-view>
                      <!--  <inventory @newitemadded="addcartitem" :items="items"></inventory> -->
                </div>

                   <div class="col-md-3">
                     <cart @itemremoved="deletitem" :items="cart"></cart>
                    </div>
            </div>
      </div>




  </div>
</template>

<script>
import Navbar from './components/Navbar'
import Cart from './components/Cart'
// import Inventory from './components/Inventory'
import data from './data.js'
export default {
  components:{
    Navbar,Cart
    // ,Inventory
  },
  data()
  {
    return {
      items:[],
      cart:[]
    }
  },
  mounted()
  {
   this.items=data
  },
  methods:{
    search(keyword)
    {
       this.items=data.filter(item => {
        return item.title.toLowerCase().indexOf(keyword.toLowerCase()) !== -1
       })
    },
    addcartitem(item)
    {
      this.cart.push(item)
    },
    deletitem(index)
    {
      this.cart.splice(index,1)
    }
  }


}
</script>

<style>
.container{
  margin-top:5px;
}
</style>
