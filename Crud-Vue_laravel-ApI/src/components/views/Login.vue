<template>
	<div class="text-center">
		<h2 class="text-center">{{name}}</h2><hr>
		<div class="form-group">
			<input type="email" class="form-control" v-model="user.email"><br>
	<input type="password" class="form-control" v-model="user.password">
		</div>
	
	<button @click="loginnow()" class="btn btn-secondary btn-large">login</button>
	</div>
	
</template>
<script>
	export default{
		data()
		{
			return {
				name:"Login in your Account",
				user:{
					email:"antar@gmail.com",
					password:"password"
				}
			}
		},
		methods:{
			loginnow()
			{
				let data = {
					client_id : 2,
					client_secret: 'qVAn9PrXx046dhyuq3CRH6LnEsKj1iucL8n7r2jo',
					grant_type: 'password',
					username: this.user.email,
					password: this.user.password
				}
				//console.log(this.user);
			 	this.$axios.post("http://127.0.0.1:8000/oauth/token", data)
                .then(res=>{
                	console.log(res.data);
               //console.log(res);
               // if(res.data.error)
               // {
               // 	alert(res.data.msg);
               // }
               // else{
               // 	localStorage.setItem("error",res.data.error);
               // 	this.$router.push({name:"admin"});
               // }

				}).then(err=>{
					console.log(err);
				})
			}
	}
}
</script>