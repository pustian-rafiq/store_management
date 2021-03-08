<template>
    <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Create Product</h3>
                    </div>
                   <form  >

                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Product Name</label>
                          <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">

                        </div>
                       </div>

                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                     </div>

                  </form>
          </div>
</template>

<script>
import  store from '../../store'
import * as actions from '../../store/action-types'
    export default{
        //get categories
        mounted(){
            store.dispatch(actions.GET_CATEGORIES)
        }
    }
</script>
