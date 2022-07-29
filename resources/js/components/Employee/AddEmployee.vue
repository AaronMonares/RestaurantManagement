<template>
  <div class="add_background2">
    <form @submit.prevent="addEmployee">
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
                    <h3 class="fw-bold mb-2 text-uppercase">Add Employee</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Name" v-model="employee.employees_name" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Name</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Phone/Cellphone number" v-model="employee.contact_number" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Contact Number</label>
                    </div>
                    <div class="radio_button">
                      <h5 class="radio-inline">
                        <input type="radio" v-model="employee.gender" value = "Male">Male
                      </h5>
                      <h5 class="radio-inline">
                        <input type="radio" v-model="employee.gender" value = "Female">Female
                      </h5>
                    </div>
                    <label class="form-label" for="typeEmailX">Sex</label>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Address" v-model="employee.address" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Address</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Designation" v-model="employee.designation" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Designation</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" placeholder="Salary" v-model="employee.salary" class="form-control form-control-lg" required/>
                      <label class="form-label" for="typeEmailX">Salary</label>
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
          employee: {}
      }
    },

    methods: 
    {
      addEmployee() 
      {
        this.axios
            .post('api/employee/create', this.employee)
            .then(response => (this.$router.push({ name: 'employees_list' })) )
            .catch(err => console.log(err))
            .finally(() => this.loading = false)
        alert ('Added Successfully')
      },
    }
  }
</script>

<style scoped>
    .radio_button
    {
      display: flex;
      flex-direction: row;
      gap: 10px;
      justify-content: center;
    }
</style>