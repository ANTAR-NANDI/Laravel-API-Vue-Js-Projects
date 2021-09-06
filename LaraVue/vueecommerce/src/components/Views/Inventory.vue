<template>
	 
      <div class="row" >
        <div class="col-md-4" v-for="(item,index) in items">
             <div class="card" style="width: 16rem">
              <router-link :to="{path: '/items/'+item.id}">
                <img class="card-img-top" :src="item.image" >
              </router-link>
                <div class="card-body">
                  <h5 class="card-title">{{item.name}}----{{item.price}}</h5>
                  <p class="card-text">{{item.details}}</p>
                  <button @click="Add(item)">Add</button>
                </div>
              </div>
        </div>

       
        
      </div>
   
</template>
<script>
 import axios from 'axios'
	export default{
  data()
  {
    return{
      // items:[]
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
    this.fetchinventory()

  },
	methods:{
		Add(item)
		{
			// this.$emit('Additem',item)
      this.$store.commit('addcart',item)
		},
    fetchinventory()
    {
      var self=this
      axios.get('http://127.0.0.1:8000/api/items').then(response => {
         // self.items=response.data
          self.$store.commit('fetchinventory',response.data)
      })
    }
  }
   
    
  }
</script>



