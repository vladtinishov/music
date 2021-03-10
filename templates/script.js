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
        },
        setUser(){
            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;
            axios.post('index.php/users/set_user',{
                name: name,
                password: password
            })
            .then(data => console.log(data.data))
        }
    }
})