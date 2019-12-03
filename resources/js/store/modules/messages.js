
const state = {
    readyState: false,
    items: [],
    total: 0,
    revenue: 0,
    registrationData: [],
    locationData: [],
    editItem: {},
    newItem: {},
    errors: {},
    options: {},
    loading: true,
    headers: [
        { text: "Sent on", align: "left", sortable: true, value: "created_at" },
        { text: "Name", align: "left", sortable: true, value: "name" },
        { text: "Email", align: "left", sortable: true, value: "email" },
        { text: "Phone", align: "left", sortable: true, value: "phone" },
        { text: "Message", align: "left", sortable: true, value: "message" },
        { text: 'Actions', value: 'action', sortable: false }
    ],
    routes: {
        index: '/api/messages',
        show: '/api/messages/',
        update: '/api/messages/',
        store: '/api/messages',
        delete: '/api/messages/',
        search: '/api/search',
        excel: '/api/excel'
    }
}

const mutations = {

    setItems (state, items) {
       state.items = items;
       state.loading = false;
    },
    setTotal (state, total) {
        state.total = total;
    },
    setTotalRevenue (state, revenue) {
        state.revenue = revenue;
    },
    setRegistrationData (state, registration) {
        state.registrationData = registration;
    },
    setLocationData (state, locations) {
        state.locationData = locations;
    },
    setEditItems (state, item) {
        state.editItem = item;
    },
    setOptions (state, options) {
        state.options = items;
    },
    isLoading (state) {
        state.loading = true;
    },
    resetItem (state) {
        state.editItem = {};
        state.errors = {};
    }

}

const actions = {

    async fetchItems({ state, commit }, payload) {


        let success = { status: true };

        commit('isLoading');

    await axios.get(

        state.routes.index, { params: payload }

        ).then((response) => {

            commit('setItems', response.data.collection);
            commit('setTotal', response.data.collection.total);


            success.state = state;
            state.readyState = true;

        })
        .catch(error => {
            success.status = false;
        });
        return success;
    },


    async getItem({ commit }, payload) {

    const response = await axios.get(

        state.routes.show+payload.id, { params: payload }

        );

        commit('setEditItems', response.data);

    },

        async deleteItem({ state }, payload) {

            let success = { status: true, user: {} };

            await axios.delete(

                state.routes.delete+payload.id

                ).then(response => {

                    console.log(response)
                    success.user = response.data.name;
                    state.errors = {};

                })
                .catch(error => {

                    success.status = false;
                    if(error.response.data.errors) {

                        state.errors = error.response.data.errors
                    }
                });
                return success;
            },
            async search({ commit, state }, payload) {

                commit('isLoading');

                let success = true;

                await axios.get(

                    state.routes.search, { params: payload }

                    ).then(response => {
                        state.errors = {};
                        commit('setItems', response.data.collection);

                    })
                    .catch(error => {

                        success = false;
                        if(error.response.data.errors) {

                            state.errors = error.response.data.errors
                        }
                    });
                    return success;
                },
                async exportExcel({ commit, state }, payload) {

                    console.log(payload);

                    let data;

                    await axios.get(

                        state.routes.excel, { params: payload }

                        ).then(response => {
                            state.errors = {};
                            data = response;
                            // commit('setItems', response.data.collection);

                        })
                        .catch(error => {

                            success = false;
                            if(error.response.data.errors) {

                                state.errors = error.response.data.errors
                            }
                        });
                        return data;
                },
                async deleteSelected({ state }, payload) {

                    let success = true;

                    await axios.get(

                        state.routes.delete, {params: payload}

                        ).then(response => {
                            state.errors = {};

                        })
                        .catch(error => {

                            success = false;
                            if(error.response.data.errors) {

                                state.errors = error.response.data.errors
                            }
                        });
                        return success;
                    },
        resetItem({ commit }) {
            commit('resetItem');
        },


}

const getters = {
    all (state) { return state.items },
    totalCount(state) {
        return state.total;
    },
    getTotalRevenue(state) {
        return state.revenue;
    },
    getRegistrationData(state) {
        return state.registrationData;
    },
    getLocationData(state) {
        return state.locationData;
    },
    getOptions (state) {
        return state.options
      },
    getLoadingState(state) {
        return state.loading;
    },
    getEditItem(state) {
        return state.editItem;
    },
    getErrors(state) {
        return state.errors;
    },
    getHeaders(state) {
        return state.headers;
    },
    getReadyState(state) {
        return state.readyState;
    }
}


export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
  }
