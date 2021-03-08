import * as actions from '../../action-types'
import Axios from 'axios'

export default{
    [actions.GET_CATEGORIES]({commit}){
        Axios.get('/api/categories')
        .then(res=>{
            console.log(res.data)
        })
    }
}
