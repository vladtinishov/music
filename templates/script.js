let app = new Vue({
    el: '#app',
    data: {
        message: 'hello, world',
        musics: [],
        mus_obj: new Audio(),
        mus_name: '',
        mus_list: false,
        select: true,
        form_show: false,
        form_show_singer: false,

        get_load_form: false,
    },
    mounted: function(){
        axios.post('index.php/MusicDownload/get_all_music')
            .then(data => {
                this.musics = data.data;
                console.log(data.data)
            });
    },
    methods: {
        workingWithUsers(method){
            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;
            axios.post('index.php/users/'+method,{
                name: name,
                password: password
            })
            .then(data => {
                if(method === 'get_user'){
                    console.log(data.data.user[0] != null);
                    if(data.data.user[0] != null){
                        this.form_show = false;
                        this.mus_list = true;
                        this.get_load_form = false;
                    }
                }
                else if(method === 'set_user'){
                    console.log(console.log(data.data))
                }
                else if(method === 'get_singer'){
                    console.log(data.data.singer[0] != null);
                    if(data.data.singer[0] != null){
                        this.form_show_singer = false;
                        this.get_load_form = true;
                        this.mus_list = true;
                    }
                }
                else if(method === 'set_singer'){
                    console.log(console.log(data.data))
                }
            })
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
            this.mus_list = false;
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
        },
        change(){
            this.select = false;
            this.form_show = true;
        },
        change_singer(){
            this.select = false;
            this.form_show_singer = true
        }
    }
})