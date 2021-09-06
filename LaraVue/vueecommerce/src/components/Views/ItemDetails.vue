<template>
	
		<div class="row">
			<div class="col-md-6">
				 <img class="card-img-top" :src="details.image" >
			</div>
			<div class="col-md-6">
				 <div class="card" style="width: 16rem">
              
                
           
                <div class="card-body">
                  <h5 class="card-title">{{details.name}}----{{details.price}}</h5>
                  <p class="card-text">{{details.details}}</p>
                  <button @click="Add(details)">Add</button>
                </div>
              </div>
			</div>
		</div>
             
       
	
	
</template>
<script>
import axios from 'axios'
	export default{
		mounted()
		{
           this.detail();
		},
		data()
		{
			return {
				details:{}
			}
		}
,
        methods:{
        	detail()
        	{
        		 var self=this
      axios.get('http://127.0.0.1:8000/api/find/'+this.$route.params.id).then(response => {
           this.details=response.data
          console.log(response)
      })
        	},
        	Add(details)
        	{
        		this.$store.commit('addcart',details)
        	}
        }
	}


</script>


<style>
	
</style>