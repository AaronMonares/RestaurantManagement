<template>
  <div class="add_background2">
    <form @submit.prevent="addProduct">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">    
          <div class="center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="back_button">
                      <router-link :to="{name: 'products_list'}" class="btn btn-outline-warning">Back</router-link>
                    </div>
                    <h3 class="fw-bold mb-2 text-uppercase">Add Product</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Product's Name" v-model="add_product.name" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Name</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Product's Description" v-model="add_product.product_description" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Product Description</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Product's Price" v-model="add_product.price" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Price</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Image Directory" v-model="add_product.image_path" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Image Path</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Category ID" v-model="add_product.category_id" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Category ID</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Meal ID" v-model="add_product.meal_id" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Meal ID</label>
                    </div>
                    <div class="add_form">
                      <button type="submit" class= "btn btn-outline-primary">Add</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
  export default 
  {
    data() 
    {
      return {
        add_product: {}
      }
    },

    methods: 
    {
      addProduct() 
      {
        this.axios
            .post('api/product/create', this.add_product)
            .then(response => (this.$router.push({ name: 'products_list' })) )
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        alert ('Added Successfully')
      },
    }
  }
</script>

<style>
</style>