<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Music</title>
</head>
<body>
    <style><?php require_once('templates/style.css');?></style>
    <div id="app">
        <nav>
            <ul>
                <li><i class="fa fa-headphones" aria-hidden="true"></i></li>
                <li v-on:click="getSelect()"><i class="fa fa-sign-in" aria-hidden="true"></i></li>
                <div class="mus_buts">
                    <div class="mus_play" @click="play">
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </div>
                    /
                    <div class="mus_pause" @click="stop()">
                        <i class="fa fa-pause" aria-hidden="true"></i>
                    </div>
                    <span>{{mus_name}}</span>
                </div>
            </ul>
        </nav>
        <div @click="setTime" class="time_line">
            <div v-bind:style="{width: time*c_time + '%'}" class="inner_time_line"></div>
        </div>

        <div v-if="select" class="select">
            <div class="inner_select">
                <p>Войти как:</p>
                <div class="select_buttons">
                    <div @click="change" class="but">
                        <i class="fa fa-headphones" aria-hidden="true"></i> <br>
                        <span>Слушатель</span>
                    </div>
                    <div @click="change_singer" class="but">
                    <i class="fa fa-volume-up" aria-hidden="true"></i> <br>
                        <span>Исполнитель</span>
                    </div>
                </div>
            </div>
        </div>

        

        <div v-if="form_show" class="form">
            <div class="form_inner">
                имя: <br>
                <input id="name" type="text"> <br><br>
                фамилия: <br>
                <input id="password" type="text"> <br><br>
                <span @click="workingWithUsers('get_user')">Войти</span> 
                <span @click="workingWithUsers('set_user')">Зарегистрироваться</span> 
            </div>
        </div>
        <div v-if="form_show_singer" class="form">
            <div class="form_inner">
                имя: <br>
                <input id="name" type="text"> <br><br>
                фамилия: <br>
                <input id="password" type="text"> <br><br>
                <span @click="workingWithUsers('get_singer')">Войти</span> 
                <span @click="workingWithUsers('set_singer')">Зарегистрироваться</span> 
            </div>
        </div>

        <div v-if="mus_list" class="main_music_list">
            <div v-if="get_load_form" class="load_file">
                <h1>Загрузка файла:</h1>
                <form id="form" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
                    <input name="userfile" type="file"/>
                    <input type="hidden" value="1" name="user_id">
                </form>
                <button @click="uploadMusic">Загрузить</button>
            </div>
            <div class="music" v-for="music in musics">
                <div @click="start(music.name)" class="music_inner">
                    <span class="singer_name">{{music.singer_name}}</span> -
                    <span>{{music.name}}</span> 

                    <audio class="mus_timeline" controls>
                        <source v-bind:src="'music/'+music.name" type="audio/mpeg">
                        <a href="'music/'+music.name">Скачайте музыку</a>.
                    </audio>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="<?php echo base_url();?>templates/vue.js"></script>
<script><?php require_once('templates/script.js');?></script>
<script>
// app.form_show = false;
// app.select = true;
</script>
</body>
</html>