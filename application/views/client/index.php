<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
</head>
<body>
    <h1>Main/Music</h1>
    <div id="app">
        {{message}} <br><br><br>
        <input id="name" type="text"> <br><br>
        <input id="password" type="text"> <br><br>
        <h1>Пользователь:</h1>
        <button @click="workingWithUsers('get_user')">Get!</button> 
        <button @click="workingWithUsers('set_user')">Put!</button> <br>

        <br><br>

        <h1>Исполнитель:</h1>
        <button @click="workingWithUsers('get_singer')">Get!</button>
        <button @click="workingWithUsers('set_singer')">Put!</button>

        <h1>Загрузить файл:</h1> <br><br>
        <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <!-- Название элемента input определяет имя в массиве $_FILES -->
        Отправить этот файл: <input name="userfile" type="file" /><br><br>
        <button @click="uploadMusic()" id="send_file">Отправить</button>
    </div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="<?php echo base_url();?>templates/script.js"></script>
</body>
</html>