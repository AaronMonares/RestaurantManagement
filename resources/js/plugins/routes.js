
import Vue from "vue"
import VueRouter from "vue-router"

import Main from '../pages/Main.vue'
import Login from '../pages/LogIn.vue'
import AdminDashboard from '../pages/AdminDashboard.vue'

import AdminInfo from '../components/Admin/AdminInfo.vue'
import EditAdmin from '../components/Admin/EditAdmin.vue'
import CategoriesList from '../components/Category/CategoriesList.vue'
import AddCategory from '../components/Category/AddCategory.vue'
import EditCategory from '../components/Category/EditCategory.vue'
import ProductsList from '../components/Product/ProductsList.vue'
import AddProduct from '../components/Product/AddProduct.vue'
import EditProduct from '../components/Product/EditProduct.vue'
import MealsList from '../components/Meal/MealsList.vue'
import AddMeal from '../components/Meal/AddMeal.vue'
import EditMeal from '../components/Meal/EditMeal.vue'
import TablesList from '../components/Table/TablesList.vue'
import AddTable from '../components/Table/AddTable.vue'
import EditTable from '../components/Table/EditTable.vue'
import BookingsList from '../components/Booking/BookingsList.vue'
import EditBooking from '../components/Booking/EditBooking.vue'
import EmployeesList from '../components/Employee/EmployeesList.vue'
import AddEmployee from '../components/Employee/AddEmployee.vue'
import EditEmployee from '../components/Employee/EditEmployee.vue'

Vue.use(VueRouter);

export default new VueRouter
({
    routes: 
    [
        {
            name: 'main',
            path: '',
            component: Main
        },

        {
            name: 'login',
            path: '/login',
            component: Login
        },

        {
            name: 'admin_info',
            path: '/admin_info',
            component: AdminInfo
        },

        {
            name: 'edit_admin',
            path: '/edit_admin',
            component: EditAdmin
        },

        {
            name: 'categories_list',
            path: '/categories_list',
            component: CategoriesList
        },
        
        {
            name: 'add_category',
            path: '/add_category',
            component: AddCategory
        },

        {
            name: 'edit_category',
            path: '/update_category',
            component: EditCategory
        },

        {
            name: 'admin_dashboard',
            path: '/admin_dashboard',
            component: AdminDashboard
        },

        {
            name: 'products_list',
            path: '/products_list',
            component: ProductsList
        },

        {
            name: 'add_product',
            path: '/add_product',
            component: AddProduct
        },

        {
            name: 'edit_product',
            path: '/edit_product',
            component: EditProduct
        },

        {
            name: 'meals_list',
            path: '/meals_list',
            component: MealsList
        },

        {
            name: 'add_meal',
            path: '/add_meal',
            component: AddMeal
        },

        {
            name: 'edit_meal',
            path: '/edit_meal',
            component: EditMeal
        },

        {
            name: 'tables_list',
            path: '/tables_list',
            component: TablesList
        },

        {
            name: 'add_table',
            path: '/add_table',
            component: AddTable
        },

        {
            name: 'edit_table',
            path: '/edit_table',
            component: EditTable
        },

        {
            name: 'employees_list',
            path: '/employees_list',
            component: EmployeesList
        },

        {
            name: 'add_employee',
            path: '/add_employee',
            component: AddEmployee
        },

        {
            name: 'edit_employee',
            path: '/edit_employee',
            component: EditEmployee
        },

        {
            name: 'bookings_list',
            path: '/bookings_list',
            component: BookingsList
        },

        {
            name: 'edit_booking',
            path: '/edit_booking',
            component: EditBooking
        }
    ],

    mode: 'history'
})