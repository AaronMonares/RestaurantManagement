<template>
    <section>
        <div class="header_style"><Header/></div>
        <div class="main_box">
            <SideBar/>
            <div class="tablecontainer">
                <div class="header_container">
                    <h2>Categories List</h2>
                    <button class="btn btn-outline-primary " @click="$router.push('./add_category').catch(()=>{})"> <i class="fa-solid fa-folder-plus"></i> Add Category</button>
                </div>
                <div class="table_style">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Category</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="category in category" :key="category.id">
                                <td>{{ category.id }}</td>
                                <td>{{ category.food_category }}</td>
                                <td>
                                    <router-link :to="{name: 'edit_category', params: { id: category.id }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="EDIT"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <a class="btn btn-outline-danger" @click="delete_category(category.id)"> <i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="top" title="DELETE"></i> </a>
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
                category: [] //mag hold sa value sa categories table data.
            }
        },

        created() 
        {
            this.axios
                .get('api/category/retrieve_all')
                .then(response => {this.category = response.data});
        },

        methods: 
        {
            delete_category(category_id) 
            { 
                this.axios
                    .delete(`api/category/delete/${category_id}`)
                    .then(response => {let i = this.category.map(data => data.category_id).indexOf(category_id);
                this.category.splice(i, 1)});
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

<style>
    .table_style
    {
        text-align: center;
    }
</style>