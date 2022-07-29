<template>
    <section>
        <div class="header_style"><Header/></div>
         <div class="main_box">
            <SideBar/>
            <div class="tablecontainer">
                <div class="header_container">
                    <h2>Products List</h2>
                    <button class="btn btn-outline-primary" @click="$router.push('./add_product').catch(()=>{})"> <i class="fa-solid fa-folder-plus"></i> Add Product</button>
                </div>
                <div class="table_style">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Product Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image Path</th>
                                <th scope="col">Category ID</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="product in products" :key="product.id">
                                <td>{{ product.id }}</td>
                                <td>{{ product.name }}</td>
                                <td>{{ product.product_description }}</td>
                                <td>{{ product.price }}</td>
                                <td>{{ product.image_path }}</td>
                                <td>{{ product.category_id }}</td>
                                <td>
                                    <router-link :to="{name: 'edit_product', params: { id: product.id }}" class="btn btn-outline-success" data-toggle="tooltip" data-placement="top" title="EDIT"><i class="fa-solid fa-pen-to-square"></i></router-link>
                                    <a class="btn btn-outline-danger" @click="deleteProduct(product.id)"> <i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="top" title="DELETE"></i> </a>
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
                products: [] //mag hold sa value sa products table data.
            }
        },
        
        created() 
        {
            this.axios
                .get('api/product/retrieve_all')
                .then(response => {
            this.products = response.data} );
        },

        methods: 
        {
            deleteProduct(product_id) 
            { 
                this.axios
                    .delete(`api/product/delete/${product_id}`)
                    .then(response => {let i = this.products.map(data => data.product_id).indexOf(product_id);
                this.products.splice(i, 1)} );
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