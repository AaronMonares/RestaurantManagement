<template>
  <div class="add_background2">
    <form @submit.prevent="updateProduct">
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
                    <h3 class="fw-bold mb-2 text-uppercase">Edit Product</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_product.name" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Name</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_product.product_description" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Product Description</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_product.price" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Price</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_product.image_path" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Image Path</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_product.category_id" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Category ID</label>
                    </div>
                    <div class="add_form">
                      <button type="submit" class= "btn btn-outline-success">Update</button>
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
  export default {
    data() 
    {
      return {
        get_product: {}
      }
    },

    created() 
    {
      this.axios
          .get(`api/product/retrieve/${this.$route.params.id}`)
          .then((res) => {
      this.get_product = res.data} );
    },

    methods: 
    {
      updateProduct() 
      {
        this.axios
            .put(`api/product/update/${this.$route.params.id}`, this.get_product)
            .then((res) => {
        this.$router.push({ name: 'products_list' })} );
        alert ('Updated Successfully')
      }
    }
  }
</script>