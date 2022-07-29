<template>
  <div class="side_bar_container">
      <div class="box"> 
        <!-- <a class="btn btn-secondary" href="bookings_list"> View Bookings List</a>  nag lo laoding pa compares to router-link-->
        <router-link :to="{name: 'bookings_list'}" class="btn btn-outline-light">View Bookings List</router-link>
        <router-link :to="{name: 'categories_list'}" class="btn btn-outline-light">View Categories List</router-link>
        <router-link :to="{name: 'meals_list'}" class="btn btn-outline-light">View Meals List</router-link>
        <router-link :to="{name: 'products_list'}" class="btn btn-outline-light">View Products List</router-link>
        <router-link :to="{name: 'employees_list'}" class="btn btn-outline-light">View Employees List</router-link>
        <router-link :to="{name: 'tables_list'}" class="btn btn-outline-light">View Tables List</router-link>
    </div>
  </div>
</template>

<script>
  
</script>

<style scoped>
    .side_bar_container
    {
        height: 100%;
        width: 220px;
        position: fixed;
        background-color: black;
        z-index: 0;
    }
</style>