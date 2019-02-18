
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../../bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('user-list', require('../../components/admin/UserList.vue'));
Vue.component('user-list-item', require('../../components/admin/UserListItem.vue'));
Vue.component('user-list-filter', require('../../components/admin/UserListFilter.vue'));

const app = new Vue({
    el: '#js-main-content',
    data: function () {
        return {
            users: [],
            userFilters: [],
            apiEndPoints: {
                users: '/api/admin/users',
                userDelete: '/api/admin/users/{id}/delete'
            },
            pages: {
                userEdit: '/admin/users'
            },
        }
    },
    created: function () {
        this.loadUsers();
    },
    methods: {
        loadUsers: function () {
            var self = this;
            axios.get(self.apiEndPoints.users).then(users => {
                self.users = users.data.users;
            });
        }
    }
});
