<template>
  <div class="add_background">
    <form @submit.prevent="addCategory">
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
                    <h3 class="fw-bold mb-2 text-uppercase">Add Category</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Category Name" v-model="category.food_category" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Category</label>
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
        category: {}
      }
    },

    methods: 
    {
      addCategory() 
      {
        this.axios
            .post('api/category/create', this.category)
            .then(response => (this.$router.push({ name: 'categories_list' })) )
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        alert ('Added Successfully')
      },
    }
  }
</script>

<style>

</style>