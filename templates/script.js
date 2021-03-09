let app = new Vue({
    el: '#app',
    data: {
        message: 'hello, world'
    },
    methods: {
        getUser(user_name, password){
            axios.post('index.php/users/get_user', {
                name: user_name,
                password: password
            })
            .then(data => console.log(data.data))
        }
    }
})