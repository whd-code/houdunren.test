import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)
export default new Vuex.Store({
    state: {
      errors: {}
    },
    mutations:{
        setErrors(state,errors){
            let temperrors={}
            Object.entries(errors).map(([k,v])=>{

                temperrors[k]=v.pop();
            })
            state.errors=temperrors

        }

    }
  })
