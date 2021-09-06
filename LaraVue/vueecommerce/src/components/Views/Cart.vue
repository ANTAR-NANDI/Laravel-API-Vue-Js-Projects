<template>
	 <ul class="list-group">
	 	<hr>
            <li class="list-group-item active">Product--------------Price</li>
            <li class="list-group-item" v-for="(item,index) in cart">
            	<button @click="remove(index)" class="btn btn-danger">-</button>
            	{{item.name}}<><><><><>{{item.price}}
            </li>
            </hr>
                           <li class="list-group-item">
		                          	<span>Total</span>
		                        	<span style="margin-left:90px">{{total}}</span>
		                          </li>
		                          <li @click="check" class="btn btn-primary" v-if="cart.length>0">Checkout</li>

		                         
          </ul>
          
          

</template>
<script>
	export default{
		
		methods:{
			remove(index)
			{
                this.$store.commit('remove',index)
			},
			check()
			{
				if(confirm("sure?")){
					this.$store.commit('freecart')
				}

			}

		},
		computed:{
			cart()
			{
				return this.$store.getters.getcart;

			},
			total()
			{
				var total=0
				this.cart.forEach(item=>{
					total+=parseFloat(item.price)
				})
				return total
			}
		}
	}
</script>