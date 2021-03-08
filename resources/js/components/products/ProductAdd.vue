<template>
    <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h3 class="card-title">Create Product</h3>
                    </div>
                   <form  >

                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category Name</label>
                          <!-- <select class="form-control">
                              <option v-for="(item, index) in categories" :key="index" :vallue="item.id">{{ item.category_name }}</option>
                          </select> -->
                          <Select2 v-model="form.category_id" :options="categories"  />

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
import {mapGetters} from 'vuex'
import Select2 from 'v-select2-component'
    export default{
          components: {Select2},
        data(){
            return {
                form:{
                    category_id : 0
                }
            }
        },
            //set categories
            computed:{
                ...mapGetters({
                    'categories' : 'getCategories'
                })

            },
        //get categories
        mounted(){
            store.dispatch(actions.GET_CATEGORIES)
        }
    }
</script>
