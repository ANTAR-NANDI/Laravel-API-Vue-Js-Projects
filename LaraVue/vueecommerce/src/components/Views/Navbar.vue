<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light"  style="margin-bottom: 5px">
      <div class="container">
   <router-link :to="{path: '/'}">Goodly</router-link>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
    </ul>
    <form @submit.prevent="search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" v-model="keyword">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>

    </form>
  </div>
   </div>
</nav>
</template>
<script>
import axios from 'axios'
  export default{
    data()
    {
      return{
        keyword:''
      }
    },
    methods:{
      search()
      {
         var self=this
      axios.get('http://127.0.0.1:8000/api/items/'+this.keyword).then(response => {
         self.$store.commit('fetchinventory',response.data)
      })

        // this.$emit('search',this.keyword)
      }
    }
  }
</script>

<style>
  
</style>