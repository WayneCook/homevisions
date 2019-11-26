const state = {
    data: [],
    sections: [],
    snackBar: {
        active: false,
        message: ''

    }
  }

const mutations = {

    setData( state, payload ) {
        state.data = payload;
    },
    setSections( state, payload ) {
        state.sections = payload;
    },
    setErrors( state, payload ) {
        state.errors = payload;
    },
    snack( state, payload ) {
        state.snackBar.active = true
        state.snackBar.message = payload
    },
    closeSnack() {
        state.snackBar.active = false
    }

}

  // getters
const getters = {

    adminData( state ) {
        return state.data;
    },
    getSections( state ) {
        return state.sections;
    },
    getSnackBar( state ) {
        return state.snackBar;
    },

}


  // actions
  const actions = {

    getAdminData({ commit }) {

        axios.get('/api/admin'

        ).then((response) => {
            commit('setData', response.data);
            commit('setSections', response.data.sections);
        })
        .catch((error) => {

            if (error.response) {
            console.log(error.response.data.errors);
            }

            console.log('there are errors');

        });

    },
    snackBar({ commit }, payload) {
        commit('setSnack', payload)
    },
    closeSnack({ commit }) {
        commit('closeSnack')
    },

    async updateSection({ commit }, payload) {

        let success = false;

        await axios.put(

            '/api/section/'+payload.id, payload

            ).then(response => {

                success = true
                commit('snack', 'Section saved succesfully')

            })
            .catch(error => {
                // success.status = false;
                if(error.response.data.errors) {
                    state.errors = error.response.data.errors
                }

            });
            return success;
        },

  }



  export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
  }
