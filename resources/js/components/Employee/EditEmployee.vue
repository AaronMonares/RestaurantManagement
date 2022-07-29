<template>
  <div class="add_background2">
    <form @submit.prevent="updateEmployee">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">  
                    <div class="back_button">
                          <router-link :to="{name: 'employees_list'}" class="btn btn-outline-warning">Back</router-link>
                    </div>
                    <h3 class="fw-bold mb-2 text-uppercase">Edit Employee</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="employee.employees_name" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Name</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="employee.contact_number" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Contact Number</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="employee.gender" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Gender</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="employee.address" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Address</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="employee.designation" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Designation</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="employee.salary" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Salary</label>
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
          employee: {}
      }
    },

    created() 
    {
      this.axios
          .get(`api/employee/retrieve/${this.$route.params.id}`)
          .then((res) => {
      this.employee = res.data} );
    },

    methods: {
      updateEmployee() 
      {
        this.axios
            .put(`api/employee/update/${this.$route.params.id}`, this.employee)
            .then((res) => {
        this.$router.push({ name: 'employees_list' })} );
        alert ('Updated Successfully')
      }
    }
  }
</script>