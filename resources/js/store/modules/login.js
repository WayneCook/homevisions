const state = {
    user: '',
    errors: {
        name: '',
        password: ''
    },
  }

const mutations = {

    setUser( state, payload ) {
        state.user = payload;
    },
    setErrors( state, payload ) {
        state.errors = payload;
    }

}

  // getters
const getters = {

    user( state ) {
        return state.user;
    },
    errors( state ) {
        return state.errors;
    }

}


  // actions
  const actions = {

    login({ commit }, payload) {

        axios.post(

    '/login', payload

    ).then((response) => {

        // console.log(response);
        window.location.href = "/admin/dashboard";


    })
    .catch((error) => {

        if (error.response) {
        console.log(error.response.data.errors);

        commit('setErrors', error.response.data.errors);
        }

        console.log('there are errors');

    });

    }

  }



  export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
  }
