<template>
    <div class="admin_background">
        <form @submit.prevent="">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="admin_center">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card bg-dark text-white" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">
                                    <div class="mb-md-5 mt-md-4 pb-5">
                                        <h2 class="fw-bold mb-2 text-uppercase">Log In Here!</h2>
                                        <p class="text-white-50 mb-5">For Admin Only!</p>
                                        <div class="form-outline form-white mb-4">
                                            <input type="email" placeholder="Your Username" id="typeEmailX" class="form-control form-control-lg" required/>
                                            <label class="form-label" for="typeEmailX">Username</label>
                                        </div>
                                        <div class="form-outline form-white mb-4">
                                            <input type="password" placeholder="Password Here" id="typePasswordX" class="form-control form-control-lg" required/>
                                            <label class="form-label" for="typePasswordX">Password</label>
                                        </div>
                                        <button class="btn btn-outline-secondary btn-lg px-5" type="submit" @click="$router.push('admin_dashboard').catch(()=>{})">Log In</button>
                                        <div class="login_back">
                                            <router-link :to="{name: 'main'}" class="btn btn-outline-warning btn-lg px-5">Back</router-link>
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

</script>

<style>
    .login_back
    {
        margin-top: 10px;
        margin-bottom: -90px;
    }

    .admin_background
    {
        height: 800px;
        background-image: url("../../../public/img/login_background.jpeg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        justify-content: center;
    }

    .admin_center
    {
        margin-top: 2%;
        margin-left: 50%;
    }
</style>