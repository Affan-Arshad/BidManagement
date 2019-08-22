export default {
    namespaced: true,
    state: {
        sideDrawerOpen: 'blah',
        data: {}
    },
    mutations: {

    },
    actions: {
        inc({state}) {
            return state.count++
            
        },
        dec({state}) {
            return state.count--
            
        },
        insert({state}, {name}) {
            state.data = Object.assign({}, state.data, {name})
            return state
        }

    },
    getters: {

    }
  }