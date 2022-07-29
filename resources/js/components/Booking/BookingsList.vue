<template>
    <section>
        <div class="header_style"><Header/></div>
        <div class="main_box">
            <SideBar/>
            <div class="tablecontainer">
                <div class="booking_head">
                    <h2>Bookings List</h2>
                </div> 
                <div class="table_style">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Time</th>
                                <th scope="col">Date</th>
                                <th scope="col">Number of Guest/s</th>
                                <th scope="col">Message</th>
                                <th scope="col">Table ID</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="booking in booking" :key="booking.id">
                                <td>{{ booking.id }}</td>
                                <td>{{ booking.customer_name }}</td>
                                <td>{{ booking.contact_number }}</td>
                                <td>{{ booking.time }}</td>
                                <td>{{ booking.date }}</td>
                                <td>{{ booking.number_of_guests }}</td>
                                <td>{{ booking.message }}</td>
                                <td>{{ booking.table_id }}</td>
                                <td>
                                    <router-link :to="{name: 'edit_booking', params: { id: booking.id }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="EDIT"> <i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <a class="btn btn-outline-danger" @click="deleteBooking(booking.id)"> <i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="top" title="DELETE"></i>  </a>
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
                booking: [] //mag hold sa value sa bookings table data.
            }
        },
        
        created() 
        {
            this.axios
                .get('api/booking/retrieve_all')
                .then(response => {this.booking = response.data});
        },

        methods: 
        {
            deleteBooking(booking_id) 
            { 
                this.axios
                    .delete(`api/booking/delete/${booking_id}`)
                    .then(response => {let i = this.booking.map(data => data.booking_id).indexOf(booking_id);
                this.booking.splice(i, 1)});
                alert ('Deleted Successfully')
            }
        },

        components:
        {
            SideBar,
            Header
        }
    }
    
//     $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();   
// });
</script>

<style>
    .table_style
    {
        text-align: center;
    }

    .booking_head button
    {
        width: 150px;
        padding: 5px;
        margin-bottom: 10px;
        margin-left: 82%;
    }

    .booking_head
    {
        margin-top: 75px;
    }
</style>