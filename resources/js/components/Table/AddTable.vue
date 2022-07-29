<template>
  <div class="add_background">
    <form @submit.prevent="addTable">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">

          <div class="center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="back_button">
                      <router-link :to="{name: 'tables_list'}" class="btn btn-outline-warning">Back</router-link>
                    </div>
                    <h3 class="fw-bold mb-2 text-uppercase">Add Table</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Table Number" v-model="table.table_number" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Table Number</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="No of Sits Available" v-model="table.no_of_sits" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Table Sits</label>
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
        table: {}
      }
    },

    methods: 
    {
      addTable() 
      {
        this.axios
            .post('api/table/create', this.table)
            .then(response => (this.$router.push({ name: 'tables_list' })) )
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        alert ('Added Successfully')
      },
    }
  }
</script>