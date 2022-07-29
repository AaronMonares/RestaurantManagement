<template>
  <div class="add_background2">
    <form @submit.prevent="updateBooking">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <div class="back_button">
                      <router-link :to="{name: 'bookings_list'}" class="btn btn-outline-warning">Back</router-link>
                    </div>
                    <h3 class="fw-bold mb-2 text-uppercase">Edit Booking</h3>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_booking.customer_name" class="form-control form-control-lg" disabled/>
                      <label class="form-label" for="typeEmailX">Customer Name</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_booking.contact_number" class="form-control form-control-lg" disabled/>
                      <label class="form-label" for="typeEmailX">Contact Number</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_booking.time" class="form-control form-control-lg" disabled/>
                      <label class="form-label" for="typeEmailX">Time</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_booking.date" class="form-control form-control-lg" disabled/>
                      <label class="form-label" for="typeEmailX">Date</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_booking.number_of_guests" class="form-control form-control-lg" disabled/>
                      <label class="form-label" for="typeEmailX">Number of Guests</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_booking.message" class="form-control form-control-lg" disabled/>
                      <label class="form-label" for="typeEmailX">Message</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="text" v-model="get_booking.table_id" class="form-control form-control-lg"/>
                      <label class="form-label" for="typeEmailX">Table ID</label>
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
          get_booking: {}
      }
    },

    created() 
    {
      this.axios
          .get(`api/booking/retrieve/${this.$route.params.id}`)
          .then((res) => {
      this.get_booking = res.data} );
    },

    methods: 
    {
      updateBooking() 
      {
        this.axios
            .put(`api/booking/update/${this.$route.params.id}`, this.get_booking)
            .then((res) => {
        this.$router.push({ name: 'bookings_list' })} );
        alert ('Updated Successfully')
      }
      }
  }
</script>