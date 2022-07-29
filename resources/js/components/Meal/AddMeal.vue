<template>
  <div class="add_background">
    <form @submit.prevent="addMeal">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="back_button">
                      <router-link :to="{name: 'meals_list'}" class="btn btn-outline-warning">Back</router-link>
                    </div>
                    <h3 class="fw-bold mb-2 text-uppercase">Add Meal</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Meal Type" v-model="meal.meal_type" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Meal Type</label>
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
        meal: {}
      }
    },

    methods: 
    {
      addMeal() 
      {
        this.axios
            .post('api/meal/create', this.meal)
            .then(response => (this.$router.push({ name: 'meals_list' })) )
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        alert ('Added Successfully')
      },
    }
    }
</script>