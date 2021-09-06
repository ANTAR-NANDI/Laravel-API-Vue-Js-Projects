export const storage = {

   state:{
   	cart:[],
   	inventory:[]
   },
   getters:{
   	getinventory(state)
   	{
          return state.inventory
   	},
   	getcart(state)
   	{
          return state.cart
   	}
   },
   mutations:{
      getinventory(state,payload)
      { 
         state.inventory=payload;
      },
      clearcheckout(state)
      {
         state.cart=[];
      },
   	addtocart(state,payload)
   	{
         state.cart.push(payload);
   	},
      removeitem(state,payload)
      {
         state.cart.splice(payload,1);
      }
   }






}