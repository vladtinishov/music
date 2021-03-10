let app = new Vue({
    el: '#app',
    data: {
        message: 'hello, world'
    },
    methods: {
        workingWithUsers(method){
            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;
            axios.post('index.php/users/'+method,{
                name: name,
                password: password
            })
            .then(data => console.log(data.data))
        }
    }
})