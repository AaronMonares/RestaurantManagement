<template>
    <section>
        <div class="header_style"><Header/></div>
        <div class="main_box">
            <SideBar/>
            <div class="tablecontainer">
                <div class="header_container">
                    <h2>Employees List</h2>
                    <button class="btn btn-outline-primary" @click="$router.push('./add_employee').catch(()=>{})"> <i class="fa-solid fa-folder-plus"></i> Add Employee</button>
                </div>
                <div class="table_style">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Employees Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="employee in employee" :key="employee.id">
                                <td>{{ employee.id }}</td>
                                <td>{{ employee.employees_name }}</td>
                                <td>{{ employee.contact_number }}</td>
                                <td>{{ employee.gender }}</td>
                                <td>{{ employee.address }}</td>
                                <td>{{ employee.designation }}</td>
                                <td>{{ employee.salary }}</td>
                                <td>
                                    <router-link :to="{name: 'edit_employee', params: { id: employee.id }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="EDIT"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <a class="btn btn-outline-danger" @click="deleteEmployee(employee.id)"> <i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="top" title="DELETE"></i> </a>
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
                employee: [] //mag hold sa value sa employees table data.
            }
        },
        
        created() 
        {
            this.axios
                .get('api/employee/retrieve_all')
                .then(response => {
            this.employee = response.data} );
        },

        methods: 
        {
            deleteEmployee(employee_id) 
            { 
                this.axios
                    .delete(`api/employee/delete/${employee_id}`)
                    .then(response => {let i = this.employee.map(data => data.employee_id).indexOf(employee_id);
                this.employee.splice(i, 1)} );
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
        margin-top: -5px;
    }
</style>