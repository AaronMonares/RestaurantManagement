<template>
    <section class="admin_background">
        <form>
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <div class="back_button">
                                        <router-link :to="{name: 'bookings_list'}" class="btn btn-outline-warning">Back</router-link>
                                    </div>
                                    <h2 class="fw-bold mb-2 text-uppercase">Account Details</h2>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" v-model="admin.first_name" class="form-control form-control-lg" disabled/>
                                        <label class="form-label" for="typeEmailX">First Name</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" v-model="admin.last_name" id="typePasswordX" class="form-control form-control-lg" disabled/>
                                        <label class="form-label" for="typePasswordX">Last Name</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" v-model="admin.username" id="typeEmailX" class="form-control form-control-lg" disabled/>
                                        <label class="form-label" for="typeEmailX">User Name</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" v-model="admin.password" id="typePasswordX" class="form-control form-control-lg" disabled/>
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>
                                    <div class="add_form">
                                        <button class="btn btn-outline-success btn-lg px-5" type="submit" @click="$router.push('edit_admin').catch(()=>{})">Edit Account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</template>

<script>
    export default 
    {
        data() 
        {
            return {
                admin: {}
            }
        },

        created() 
        {
            this.axios
                .get('api/admin/get_admin')
                .then((res) => {this.admin = res.data});
        },
    }
</script>

<style>

</style>