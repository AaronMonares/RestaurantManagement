<template>
    <div class="logo">
        <img src="../../../public/img/restaurant_logo.png">
        <div class="logo_h1">
            <router-link :to="{name: 'admin_dashboard'}" class="btn btn-outline-danger" ><h1>Dashboard</h1></router-link>
        </div>
        <div class="dropdown">
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admin
                </button>
                <div class="dropdown-menu">
                    <!-- <a class="dropdown-item" href="admin_info">My Account</a> -->
                    <router-link :to="{name: 'admin_info', params: { id: admin.id }}" class=" btn btn-info dropdown-item">My Account</router-link>
                    <div class="dropdown-divider"></div>
                    <router-link :to="{name: 'main'}" class=" btn btn-danger dropdown-item">Log Out</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default
    {
         data() 
         {
            return {
                admin: [] //return in AdminController
            }
        },

        created() 
        {
            this.axios
                .get('api/admin/retrieve')
                .then(response => {
            this.admin = response.data} );
        }
    }
</script>

<style scoped>
    .logo
    {
        width: 120px;
        height: 100px;
        margin: 15px;
        display: flex;
        gap: 25%;
        position: absolute;
        margin-left: 70px;
    }

    .logo img
    {
        width: 100%;
        height: 100%;
    }

    .logo h1
    {
        color: floralwhite;
        padding: px;
        margin-bottom: -5px;
    }

    .dropdown
    {
       margin-left: 775px;
       margin-top: 38%;
    }

    .logo_h1
    {
        margin-top: 40px;
        margin-left: 25px;
    }
</style>