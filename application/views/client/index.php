<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/templates/style.css">
    <title>Music</title>
</head>
<body>
    <!-- <h1>Main/Music</h1> -->
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

        <div class="main_music_list">
            <div class="music" v-for="music in musics">
                <div @click="start(music.name)" class="music_inner">
                    <span class="singer_name">{{music.singer_name}}</span> -

                    <span>{{music.name}}</span> 

                    <audio class="mus_timeline" controls>
                        <source v-bind:src="'music/'+music.name" type="audio/mpeg">
                        <a href="'music/'+music.name">Скачайте музыку</a>.
                    </audio>
                </div>
                <hr>
            </div>
        </div>

        <div v-if="select" class="select">
            <div class="inner_select">
                <p>Войти как:</p>
                <div class="select_buttons">
                    <div class="but">
                        <i class="fa fa-headphones" aria-hidden="true"></i> <br>
                        <span>Слушатель</span>
                    </div>
                    <div class="but">
                    <i class="fa fa-volume-up" aria-hidden="true"></i> <br>
                        <span>Исполнитель</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- имя:
        <input id="name" type="text"> <br><br>
        фамилия:
        <input id="password" type="text"> <br><br>
        <h1>Пользователь:</h1>
        <button @click="workingWithUsers('get_user')">Get!</button> 
        <button @click="workingWithUsers('set_user')">Put!</button> <br>

        <br><br>

        <h1>Исполнитель:</h1>
        <button @click="workingWithUsers('get_singer')">Get!</button>
        <button @click="workingWithUsers('set_singer')">Put!</button>

        <h1>Загрузка файла:</h1>
        <form id="form" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
            Отправить этот файл: <input name="userfile" type="file"/>
            <input type="hidden" value="1" name="user_id">
        </form>
        <button @click="uploadMusic">Send</button> -->
    </div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="<?php echo base_url();?>templates/script.js"></script>
</body>
</html>