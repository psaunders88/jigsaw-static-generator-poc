import Vue from 'vue'
import Vuex from 'vuex'
import store from './store'
import Axios from 'axios'

/**
 * Making axios available im the vue object.
 */
Vue.prototype.$http = Axios;
Vue.prototype.$store = store;
const token = localStorage.getItem('token')
if (token) {
    Vue.prototype.$http.defaults.headers.common['Authorization'] = token
}

var a = new Vue(
    {
        el: '#app',
        data: {
            testing: 'paul',
            email: '',
            password: ''
        },
        methods: {
            login: function () {
                let email = this.email
                let password = this.password
                this.$store.dispatch('login', { email, password })
                    .then(() => this.$router.push('/'))
                    .catch(err => console.log(err))
            }
        }
    }
);