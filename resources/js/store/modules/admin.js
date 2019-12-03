const state = {
    data: [],
    loaded: false,
    sections: [],
    snackBar: {
        active: false,
        message: ''
    },
    views: {},
    viewCount: 0,
    viewsToday: 0,
    messageCount: 0
  }

const mutations = {

    setData( state, payload ) {
        state.data = payload;
    },
    setSections( state, payload ) {
        state.sections = payload;
    },
    setViews( state, payload ) {
        state.views = payload;
    },
    setViewCount( state, payload ) {
        state.viewCount = payload;
    },
    setViewsToday( state, payload ) {
        state.viewsToday = payload;
    },
    setMessageCount( state, payload ) {
        state.messageCount = payload;
    },
    setErrors( state, payload ) {
        state.errors = payload;
    },
    snack( state, payload ) {
        state.snackBar.active = true
        state.snackBar.message = payload
    },
    closeSnack( state ) {
        state.snackBar.active = false
    },
    loaded( state ) {
        state.loaded = true
    }

}

  // getters
const getters = {

    adminData( state ) {
        return state.data;
    },
    getViews( state ) {
        return state.views;
    },
    getViewCount( state ) {
        return state.viewCount;
    },
    getViewsToday( state ) {
        return state.viewsToday;
    },
    getMessageCount( state ) {
        return state.messageCount;
    },
    getSections( state ) {
        return state.sections;
    },
    getSnackBar( state ) {
        return state.snackBar;
    },
    loaded( state ) {
        return state.loaded;
    },

}


  // actions
  const actions = {

    getAdminData({ commit }) {

        axios.get('/api/admin'

        ).then((response) => {
            commit('setData', response.data);
            commit('setSections', response.data.sections);
            commit('setViews', response.data.views);
            commit('setViewCount', response.data.view_count);
            commit('setViewsToday', response.data.views_today);
            commit('setMessageCount', response.data.message_count);
            commit('loaded');
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
