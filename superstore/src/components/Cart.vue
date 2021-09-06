 

                      <template>
			                 <ul class="list-group">
		                        <li class="list-group-item">
		                        	<span>Name</span>
		                        	<span style="margin-left:90px">Price</span>

		                        </li>
<hr>
		                         <li v-for="(item,index) in items" :key="index" class="list-group-item">
		                         	<span>{{item.title}}</span>
		                         	<button @click="removeitem(index)" class="btn btn-info btn-ls">-</button>
		                        	<span style="margin-left:90px">{{item.price}}</span>
		                         </li>
<hr>
		                          <li class="list-group-item">
		                          	<span>Total</span>
		                        	<span style="margin-left:90px">{{total}}</span>
		                          </li>

		                          <li class="list-group-item">
		                          	<button @click="checkout" class="btn btn-info">Checkout</button>
		                          </li>
		                     </ul>
                     </template>

<script>
	export default{

     computed:{
     items()
    {
    	return this.$store.getters.getcart
    },
     	total()
			{
				var total=0;
				this.items.forEach(item => {
					//console.log(parseFloat(item.price));
                total += parseFloat(item.price)
					})
				return total.toFixed(3)
			}
     },
     methods:{
     	removeitem(index)
     	{
            this.$store.commit('removeitem',index);
     	},
     	checkout()
     	{
     		if(confirm("do u want to checkout??"))
     		{
     			this.$store.commit('clearcheckout')
     		}
     	}
     }
	}
</script>

<style>
</style>