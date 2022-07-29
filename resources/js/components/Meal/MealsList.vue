<template>
    <section>
        <div class="header_style"><Header/></div>
        <div class="main_box">
            <SideBar/>
            <div class="tablecontainer">
                <div class="header_container">
                    <h2>Meals List</h2>
                    <button class="btn btn-outline-primary" @click="$router.push('./add_meal').catch(()=>{})"> <i class="fa-solid fa-folder-plus"></i> Add Meal</button>
                </div>
                <div class="table_style">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Meal Type</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="meal in meal" :key="meal.id">
                                <td>{{ meal.id }}</td>
                                <td>{{ meal.meal_type }}</td>
                                <td>
                                    <router-link :to="{name: 'edit_meal', params: { id: meal.id }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="EDIT"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <a class="btn btn-outline-danger" @click="deleteMeal(meal.id)"> <i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="top" title="DELETE"></i> </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import SideBar from '../../includes/sidebar.vue'
    import Header from '../../includes/header.vue'

    export default 
    {
        data() 
        {
            return {
                meal: [] //mag hold sa value sa meal's table data.
            }
        },
        
        created() 
        {
            this.axios
                .get('api/meal/retrieve_all')
                .then(response => {
            this.meal = response.data} );
        },

        methods: 
        {
            deleteMeal(meal_id) 
            { 
                this.axios
                    .delete(`api/meal/delete/${meal_id}`)
                    .then(response => {let i = this.meal.map(data => data.meal_id).indexOf(meal_id);
                this.meal.splice(i, 1)} );
                alert ('Deleted Successfully')
            }
        },

        components:
        {
            SideBar,
            Header
        }

    }
</script>

<style scoped>
    .table_style
    {
        text-align: center;
    }

</style>