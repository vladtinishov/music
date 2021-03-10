let app = new Vue({
    el: '#app',
    data: {
        message: 'hello, world'
    },
    methods: {
        getUser(){
            let name = document.getElementById('user_name').value;
            let password = document.getElementById('user_password').value;
            axios.post('index.php/users/get_user', {
                name: name,
                password: password
            })
            .then(data => console.log(data.data))
        },
        setUser(){
            let name = document.getElementById('user_name').value;
            let password = document.getElementById('user_password').value;
            axios.post('index.php/users/set_user',{
                name: name,
                password: password
            })
            .then(data => console.log(data.data))
        },
        getSinger(){
            let name = document.getElementById('singer_name').value;
            let password = document.getElementById('singer_password').value;
            axios.post('index.php/users/get_singer',{
                name: name,
                password: password
            })
            .then(data => console.log(data.data))
        },
        setSinger(){
            let name = document.getElementById('singer_name').value;
            let password = document.getElementById('singer_password').value;
            axios.post('index.php/users/set_singer',{
                name: name,
                password: password
            })
            .then(data => console.log(data.data))
        },
    }
})