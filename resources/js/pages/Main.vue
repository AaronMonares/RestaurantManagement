<template>
    <section>
        <!-- Top menu -->
        <div class="w3-top" id="user_view_header">
            <div class="user_view_logo">
                <img src="../../../public/img/restaurant_logo.png">
            </div>
            <div class="w3-center w3-padding-16" id="header_title"><h1>Our Foods We Offer</h1></div>
            <div class="user_view_login_button">
                <div class="w3-right w3-padding-16"> <router-link :to="{name: 'login'}" class="btn btn-outline-light">Log In</router-link></div>
            </div>
        </div>
        <div class="user_view_background">
            <!-- !PAGE CONTENT! -->
            <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
                <!-- First Photo Grid-->
                <div class="w3-row-padding w3-padding-16 w3-center" id="food">
                    <div class="w3-quarter">
                        <img src="../../../public/img/plain_rice2.png" alt="Sandwich" style="width:100%">
                        <h3>Jaguar Plain Rice</h3>
                        <p>This is white rice</p>
                        <p>Price: 10.00</p>
                    </div>
                    <div class="w3-quarter">
                        <img src="../../../public/img/pork_adobo.jpeg" alt="Steak" style="width:100%">
                        <h3>Pork Adobo</h3>
                        <p>This is Pinoypork adobo</p>
                        <p>Price: 40.00</p>
                    </div>
                    <div class="w3-quarter">
                        <img src="../../../public/img/fried_chicken.jpeg" alt="Cherries" style="width:100%">
                        <h3>Chicken Fillet</h3>
                        <p>This is fried chicken</p>
                        <p>Price: 30.00</p>
                    </div>
                    <div class="w3-quarter">
                        <img src="../../../public/img/sinigang_na_bangus.jpeg" alt="Pasta and Wine" style="width:100%">
                        <h3>Sinigang na Bangus</h3>
                        <p>This is sinigang na isda</p>
                        <p>Price: 70.00</p>
                    </div>
                </div>
                <!-- Second Photo Grid-->
                <div class="w3-row-padding w3-padding-16 w3-center">
                    <div class="product_description">
                        <div class="w3-quarter">
                            <img src="../../../public/img/hamburger.jpg" alt="Popsicle" style="width:100%">
                            <h3>Hamburger</h3>
                            <p>This is Burger</p>
                            <p>Price: 40.00</p>
                        </div>
                        <div class="w3-quarter">
                            <img src="../../../public/img/banana q.jpeg" alt="Salmon" style="width:100%">
                            <h3>Banana Q</h3>
                            <p>This is banana q</p>
                            <p>Price: 30.00</p>
                        </div>
                        <div class="w3-quarter">
                            <img src="../../../public/img/coca-cola3.jpg" alt="Sandwich" style="width:100%">
                            <h3>250 ml Coca-cola</h3>
                            <p>This is cola softdrink.</p>
                            <p>Price: 15.00</p>
                        </div>
                        <div class="w3-quarter">
                        <img src="../../../public/img/black_coffe2.jpg" alt="Croissant" style="width:100%">
                            <h3>Black Coffee</h3>
                            <p>This is coffee black</p>
                            <p>Price: 10.00</p>
                        </div>
                     </div>
                </div>
                <!-- Pagination -->
                <div class="w3-center w3-padding-32">
                    <div class="w3-bar">
                        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
                    </div>
                </div>
                <hr id="about">
                <!-- About Section -->
                <div class="about_info">
                    <div class="w3-container w3-padding-32 w3-center">  
                        <h3>About Me, The Food Man</h3><br>
                        <img src="../../../public/img/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
                        <div class="w3-padding-32">
                            <h4><b>I am Who I Am!</b></h4>
                            <h6><i>With Passion For Real, Good Food</i></h6>
                            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        </div>
                    </div>
                </div>
            <!-- End page content -->
            </div>
        </div>
        <!-- Table Reservation Form -->
        <div id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h2 class="text-primary">Table Reservation</h2>
                    </div>
                </div>
                <form @submit.prevent="addBooking">
                    <div class="form-row">
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" v-model="booking.customer_name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="number" v-model="booking.contact_number" class="form-control" placeholder="Your Phone" required>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="date" v-model="booking.date"  class="form-control" placeholder="Date" required>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="time" v-model="booking.time" class="form-control"  placeholder="Time" required>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="number" v-model="booking.number_of_guests" class="form-control" placeholder="No. of people" required>
                        </div>
                    </div>
                    <div class="form-group">
                            <textarea v-model="booking.message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-3">Book a Table</button>
                </form>
            </div>
        </div>
        <!-- End Table Reservation Form -->
        <main_footer/>
    </section>
</template>

<script>
    import main_footer from '../includes/footer.vue'

    export default 
    {
        data() 
        {
            return {
                booking: 
                {
                    // customer_name:'',
                    // contact_number:'',
                    // date:'',                       // ------ for future use ----------
                    // time:'',
                    // number_of_guests:'',
                    // message:'',
                }
            }
        },

        methods: 
        {
            addBooking() 
            {
                this.axios
                .post('api/booking/create', this.booking)
                .then(response => (
                 // this.$router.push({ name: 'main' })  -> kun pakain siya tapos click sa book a table button.
                    this.booking = {                    // ---- [] -> array , {} -> object -----
                        customer_name:'',
                        contact_number:'',
                        date:'',
                        time:'',
                        number_of_guests:'',
                        message:'',
                    }) )
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
                alert ('Your Reservation was Submitted!')
            }
        },

        components:
        {
            main_footer
        }
    }
</script>

<style scoped>  /* scoped para dd la siya magamitan  */

    #book-a-table 
    {
        background-color: #FAFAFA;
        padding: 50px 0px;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        margin: 50px 0px;
        float: left;
        width: 100%;
        margin-top: 900px;
    }

    .book-a-table p 
    {
        color: #9a9a9a;
    }

    .book-a-table textarea 
    {
        min-height: 200px;
        max-width: 100%;
    }
    
    .main
    {
        width: 1000px;
    }

    .user_view_background
    {
        width: auto;
        height: 811px;
        background-image: url(/images/product_background.jpeg?9121b48…);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        z-index: 0;
    }

    .about_info
    {
        position: absolute;
    }

    .user_view_logo
    {
        margin-left: 15px;
    }

    .user_view_logo img
    {
        width: 100%;
        height: 100%;
    }

    #user_view_header
    {
        display: flex;
        background-color: black;
        height: 100px;
    }

    #header_title
    {
        background-color: black;
        color: white;
        margin-top: 1.5%;
        width: 90%;
    }

    .user_view_login_button
    {
        margin-right: 15px;
        margin-top: 1.5%;
        width: 100px;
    }

    .w3-quarter img
    {
        height: 160px;
    }

    .w3-quarter h3
    {
        margin-top: 10px;
    }

    .product_description p
    {
        color: white;
    }

    .product_description h3
    {
        color: white;
    }

</style>


<!-- <script>          ------ Sir Adonis Lecture --------
// import Log_In from '../pages/LogIn.vue'
// import CategoriesList from '../components/CategoriesList.vue'
    export default 
    {
        // name: "App",
        
        data()
        {
            return {
                // firstname: 'Qonvex',
                // lastname: 'Company',
                // isExisting: true,
                // first_number: 2,
                // second_number: 5,
            }
        },
        
        mounted() 
        {
            
            console.log ('World')
        },

        created() //una gintatawag ini bago kay mounted
        {
            // this.show_alert_message()
             console.log ('Hello')
        },

        methods:
        {
            show_alert_message(){
                alert('Welcome')
            }
        },

        components:
        {
            // log_in: Log_In,
            // CategoriesList,
        }
    }
</script> -->