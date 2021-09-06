<template>

	<div class="admin">
		<div class="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-10">
						<h2>Ecommerce</h2>
					</div>

					

					<div class="col-md-2">
						<a href="" @click="logoutnow()">Logout</a>
					</div>
				</div>
			</div>
		</div>

		<div class="main">
			<div class="container-fluid">
				<div class="row">
					<div class="sidebar">
						
					
					<div class="col-md-4">
						<ul>
							<li>
								<router-link to="/admin/category">
									Category
								</router-link>
							</li>
							<li>
								<router-link to="/admin/supplier">
									Suppliers
								</router-link>
							</li>
							<li>
								<router-link to="/admin/product">
									Products
								</router-link>
							</li>
						</ul>
					</div>
                 </div>
					
              
					<div class="col-md-8">
						<router-view></router-view>
					</div>

				</div>
			</div>
		</div>
	</div>
	
</template>
<script>
	export default{
		data()
		{
			return{

			}
		},
		mounted()
		{
         var error=localStorage.getItem("error");
         console.log(error);
         if(!error)
         {
         	this.$router.push({name:"/login"});
         }
		},
		methods:{
			logoutnow()
			{
				localStorage.setItem("error",false);
				this.$router.push({name: "/login"});
			}
		}
	}
</script>
<style>
	.admin{
		background-color: #e6e6e6;
		width: 100%;
		height: 1200px;
	}
	.sidebar{
		width: 300px;
		height: 1000px;
		background-color: #dac3c3;
	}
	.right{
		width: 101 2px;
		height: 1000px;
		background-color: #8977ea;
	}
	
</style>