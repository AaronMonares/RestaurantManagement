<template>
  <div class="add_background">
    <form @submit.prevent="updateCategory">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="back_button">
                          <router-link :to="{name: 'categories_list'}" class="btn btn-outline-warning">Back</router-link>
                    </div>
                    <h3 class="fw-bold mb-2 text-uppercase">Edit Category</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="category.food_category" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Category</label>
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
  export default 
  {
    data() 
    {
      return {
        category: {}
      }
    },

    created() 
    {
      this.axios
          .get(`api/category/retrieve/${this.$route.params.id}`)
          .then((res) => {
      this.category = res.data} );
    },

    methods: 
    {
      updateCategory() 
      {
        this.axios
            .put(`api/category/update/${this.$route.params.id}`, this.category)
            .then((res) => {
        this.$router.push({ name: 'categories_list' })} );
        alert ('Updated Successfully')
      }
    }
  }
</script>