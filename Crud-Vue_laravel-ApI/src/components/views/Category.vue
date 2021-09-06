<template>
	
<div>
	<h2>Category</h2><hr>

		<div class="form-group">
			<input type="text" class="form-control" v-model="newcategory.name" placeholder="enter Product name"><br>
	<textarea v-model="newcategory.description">
	Enter Product Description
 </textarea> 
		</div>
	
	<button class="btn btn-secondary btn-large" @click="store()">Save</button>

	<hr>
<div class="container">
	<h3>List of Employee</h3>
<table class="table table-striped table-dark" id="myTable">
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
       <th scope="col" style="background-color: gray">Id</th>
      <th scope="col" style="background-color: gray">NAME</th> 
      <th scope="col" style="background-color: #5bc0de">DESCRIPTION</th>
      <th scope="col" style="background-color: #62c462">EDIT</th>
        <th scope="col" style="background-color: #62c462">DELETE</th>
    </tr>
  </thead>
    <tbody>
    	
    	<tr v-for="item in items" >
    	  <td>{{item.id}}</td>
            <td>{{item.name}}</td>  
            <td>{{item.description}}</td>
            
            <td ><a href="" class="btn btn-info btn-sm" @click.prevent="editcategory=item" >Edit </a></td>
            <td> <button class="btn btn-danger btn-large" @click="deleteitem(editcategory=item)">Delete</button></td>
            
        </tr>
    

    </tbody>


   </table>
  
</div>
<div class="form-group">
			<input type="text" class="form-control" v-model="editcategory.name" placeholder="enter Product name"><br>
	<textarea v-model="editcategory.description">
	Enter Product Description
 </textarea> 
		</div>
	
	<button class="btn btn-secondary btn-large" @click="update()">Save</button>
	</div>
</template>
<script>
	export default{
       data()
       {
       	return{
       		newcategory:{
       			name:"",
       			description:""
       		},
       		editcategory:{
       			name:"",
       			description:""
       		},
       		items:[]
       	}
       },
       mounted()
       {
       	this.getitem();
       },
       methods:{
       	store()
       	{
       		//console.log(this.newcategory);
       		 this.$axios.post("http://127.0.0.1:8000/api/store", this.newcategory)
                    .then(res=>{
               //console.log(res);
               if(res.data.error)
               {
               	alert(res.data.msg);
               }
               else{
                  console.log(res.data.msg);
               	this.$router.push({name:"admin"});
               }
			});
       	},
       	getitem()
       	{
            this.$axios.get("http://127.0.0.1:8000/api/getdata")
                    .then(res=>{
               //console.log(res);
               if(res.data.error)
               {
               	alert(res.data.msg);
               }
               else{
                  //console.log(res.data);
                  this.items=res.data;
               	//this.$router.push({name:"admin"});
               }
			});
       	},
       	update()
       	{
       		//console.log(this.editcategory);
            this.$axios.post("http://127.0.0.1:8000/api/editdata",this.editcategory)
                    .then(res=>{
               console.log(res);
               if(res.data.error)
               {
               	alert(res.data.msg);
               }
               else{
                  alert(res.data.msg);
               }
			});
                    this.editcategory={};
       	},

       	deleteitem(editcategory)
       	{//this.keyword
       		console.log(this.editcategory.id);
            this.$axios.get("http://127.0.0.1:8000/api/deletedata/"+this.editcategory.id)
                    .then(res=>{
               console.log(res);
               if(res.data.error)
               {
               	alert(res.data.msg);
               }
               else{
                 alert(res.data.msg);
               }
			});
       	}
       }
	}
</script>
<style>
	.l{
		margin-right: 50px;
	}
</style>