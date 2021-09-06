<template>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <router-link :to="{path:'/'}"class="navbar-brand" >
 

                Navbar</router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                  <form @submit.prevent="search" class="form-inline my-2 my-lg-0">
                    <input  class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" v-model="keyword">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
         </nav>
</template>

<script>
import axios from 'axios'
	export default{
   data()
   {
    return {
      keyword:''
    }
   },
   methods:{
    search()
    {
            var self=this
       axios.get('http://127.0.0.1:8000/api/get/' + this.keyword)
          .then(response => {
           //  // setTimeout(function(){
           //     self.items = response.data
           // self.loading=false
           //  // },3000)
            
           self.$store.commit('getinventory',response.data)
            //console.log(response);
          })
    }
   }
	}
</script>

<style>
</style>