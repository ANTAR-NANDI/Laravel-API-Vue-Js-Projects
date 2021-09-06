export const storage = {
state:{
       cart:[],
       inventory:[]
      },
  
     getters:{
       getinventory(state){
       return state.inventory
           } ,
           getcart(state)
           {
           	return state.cart
           }
       },
      mutations:{
           addcart(state,payload){
             state.cart.push(payload)
            },
            remove(payload)
            {
               this.state.cart.splice(payload,1)
            },
             fetchinventory(state,payload)
            {
               state.inventory=payload
            },
            freecart(state)
            {
              state.cart=[]
            }

        }

}