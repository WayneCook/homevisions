const state = {
    data: [],
    loaded: false,
    contactDialog: false
  }

const mutations = {

    setData( state, payload ) {
        state.data = payload
    },
    setLoaded( state ) {
        state.loaded = true
    },
    setContactDialog( state, payload ) {
        state.contactDialog = payload
    }

}

  // getters
const getters = {

    getData( state ) {
        console.log(state.data);
        return state.data
    },
    getLoaded( state ) {
        return state.loaded
    },
    getContactDialog( state ) {
        return state.contactDialog
    }

}


  // actions
  const actions = {

    fetchData({ commit }) {

       return axios.get('/api/app'

        ).then((response) => {

            commit('setData', response.data);
            commit('setLoaded');

            return true

        })
        .catch((error) => {

            if (error.response) {
            console.log(error.response.data.errors);
            }

        });

    },
    login({ commit }, payload) {

        axios.post(

    '/login', payload

    ).then((response) => {

        window.location.href = "/admin";
    })
    .catch((error) => {

        if (error.response) {
        console.log(error.response);
        }

        console.log('there are errors');

    });

    },
    setContactDialog({ commit }, payload) {
        commit('setContactDialog', payload);
    }

  }



  export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
  }
