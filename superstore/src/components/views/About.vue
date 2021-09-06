<template>
	<div class="row" id="details">
		<div class="col-md-6">
			{{items.price}}
			{{items.title}}
		</div>

		<div class="col-md-6">
			{{items.details}}

		</div>
      <button @click="addtoCart(items)" class="btn btn-primary">+Add</button>
	</div>
</template>

<script>
	

	import axios from 'axios'
	export default{
   data()
   {
    return{
       loading:true,
      items:[]
    }
   },
   mounted()
   {
   	this.fetchInventory()
   },
   methods:
   {   
    
    fetchInventory()
    {
      var self=this
       axios.get('http://127.0.0.1:8000/api/getdata/'+ this.$route.params.id)
          .then(response => {
           
               self.items = response.data
           // self.loading=false
           
            
           
            
          })
    },
    addtoCart(item)
    {
      this.$store.commit('addtocart',item);
    }
   }
	}
</script>

<style>
#details{
	background-color:#e6e6e6;
}
</style>