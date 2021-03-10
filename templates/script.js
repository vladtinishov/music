let app = new Vue({
    el: '#app',
    data: {
        message: 'hello, world'
    },
    methods: {
        getUser(){
            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;
            axios.post('index.php/users/get_user', {
                name: name,
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