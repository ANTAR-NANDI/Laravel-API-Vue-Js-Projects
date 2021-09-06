<template>
	              <div v-if="!loading" class="row">
                          
                       
                    <div v-for="(item,index) in items" :key="index" class="card" style="width: 16rem;">
                       <!-- <img :src="item.photo" class="card-img-top" alt="..."> -->
                       <router-link tag="div" :to="{ path:'/about/'+ item.id}">
                               <div class="card-body">
                            
                                <h5 class="card-title">{{item.title}}</h5>
                              </div>
                       </router-link>

                              <div class="card-footer">
                                <p class="card-text">{{item.price}}</p>
                                  <a @click="addtocart(item)" class="btn btn-primary">+Add</a>
                         </div>
                    </div>
                     
                              
                  </div>


                        <div v-else>
                          Loading......
                        </div>
</template>

<script>
import axios from 'axios'
	export default{
   data()
   {
    return{
       loading:true,
     
    }
   },
      computed:{
     items()
    {
      return this.$store.getters.getinventory
    }
  },

   mounted()
   {
    this.fetchInventory()
   },
   methods:
   {
    addtocart(item)
    {
     this.$store.commit('addtocart',item)
    },
    fetchInventory()
    {
      var self=this
       axios.get('http://127.0.0.1:8000/api/getdata')
          .then(response => {
            // setTimeout(function(){
              // self.items = response.data
               self.$store.commit('getinventory',response.data)
           self.loading=false
            // },3000)
            
           
            //console.log(response);
          })
    }
   }
	}
</script>

<style>
</style>