import store from './index.js'

export default function api(res) {

    const fetch = async () => await store.dispatch('api/fetch', {res})
    const items = () => store.getters['api/items'](res) 
    const headers = () => items(res)[0] ? Object.keys(items(res)[0]).map(item => ({text: item, value:item }) ) : []
    
    return {
        fetch,
        items,
        headers
    }
}