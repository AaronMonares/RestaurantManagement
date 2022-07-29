<template>
    <div>
        <div class="header_style"><Header/></div>
        <SideBar/>
        <div class="dashboard_content">
        </div>
    </div>
</template>

<script>
    import SideBar from '../includes/sidebar.vue'
    import Header from '../includes/header.vue'

    export default
    {

        components:
        {
            SideBar,
            Header
        }
    }
</script>

<style>
    /* pwedi magamitan ini na header style sa iba na vue */
    .header_style
    {
        background-color: black;
        width: 1350px;
        height: 120px;
        position: fixed;
        z-index: 1
    }

    .dashboard_content
    {
        width: 1130px;
        height: 695px;
        margin-left: 220px;

        background-image: url("../../../public/img/restaurant_view.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }
</style>    