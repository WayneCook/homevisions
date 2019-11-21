const state = {
    loading: true,

  }

const mutations = {

    loading (state, condition) {

        state.loading = condition;
    },
}

  // getters
const getters = {
    loadingState( state ) {
        return state.loading;
    },
}


  // actions
  const actions = {

    setLoadingState ({ commit }, condition) {

      commit('loading', condition)

    },

  }



  export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
  }
