import axios from 'axios'
export default {
    namespaced: true,
    state: {
        sideDrawerOpen: 'blah',
        count: 0,
        data: {
            // store data here
        }
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
        async fetch({state}, {res}) {
            console.log(res)
            if(!res) {
                console.log(res + ' not defined')
                return Promise.resolve('error')
            }
            let resp = await axios.get(`http://localhost:8000/api/${res}`)
            let t = {}
            t[res] = resp.data
            state.data = Object.assign({}, state.data, t)
            
            // Vue.set(state, 'items', res.data)
            // state[res] = state[res] || Vue.set(state, res, {})
            // Vue.set(state[res], 'items', resp.data)
            console.log(state)
            return Promise.resolve(state.data[res])
        }

    },
    getters: {
        items(state) {
            return (res) => {
                console.log(state.data[res])
                return state.data[res] || []
            }
        }

    }
  }