let app = new Vue({
    el: '#app',
    data: {
        message: 'hello, world',
        select: false,
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
        },
        uploadMusic:function(){
            let form = document.getElementById('form');
            let formData = new FormData(form);
            axios.post('index.php/MusicDownload/downloadFile', formData)
            .then(data => console.log(data.data))
        },
        getSelect(){
            this.select = true;
        }
    }
})