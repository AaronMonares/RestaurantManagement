<template>
    <section>
        <div class="header_style"><Header/></div>
         <div class="main_box">
            <SideBar/>
            <div class="tablecontainer">
                <div class="header_container">
                    <h2>Tables List</h2>
                    <button class="btn btn-outline-primary" @click="$router.push('./add_table').catch(()=>{})"> <i class="fa-solid fa-folder-plus"></i> Add Table</button>
                </div>
                <div class="table_style">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Table Number</th>
                                <th scope="col">Table Sits</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr v-for="table in table" :key="table.id">
                                <td>{{ table.id }}</td>
                                <td>{{ table.table_number }}</td>
                                <td>{{ table.no_of_sits }}</td>
                                <td>
                                    <router-link :to="{name: 'edit_table', params: { id: table.id }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="EDIT"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <a class="btn btn-outline-danger" @click="deleteTable(table.id)"> <i class="fa-regular fa-trash-can" data-toggle="tooltip" data-placement="top" title="DELETE"></i> </a>
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
                table: [] //mag hold sa value sa tables table data.
            }
        },
        
        created() 
        {
            this.axios
                .get('api/table/retrieve_all')
                .then(response => {this.table = response.data} );
        },

        methods: 
        {
            deleteTable(table_id) { 
                this.axios
                    .delete(`api/table/delete/${table_id}`)
                    .then(response => {let i = this.table.map(data => data.table_id).indexOf(table_id);
                this.table.splice(i, 1)} );
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