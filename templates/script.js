let app = new Vue({
    el: '#app',
    data: {
        message: 'hello, world',
        select: false,
        musics: [],
        key: false,
        mus_obj: new Audio(),
        mus_name: '',
    },
    mounted: function(){
        axios.post('index.php/MusicDownload/get_all_music')
            .then(data => this.musics = data.data);
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
        getMusic(){
            axios.post('index.php/MusicDownload/get_all_music')
            .then(data => console.log(data.data));
        },
        getSelect(){
            this.select = true;
        },
        play(){
            this.mus_obj.play();
        },
        stop(){
            this.mus_obj.pause();
        },
        start(name){
            this.mus_name = name;
            this.stop();
            this.mus_obj = new Audio('music/' + name);
            this.play();
        }
    }
})