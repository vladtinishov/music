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
        {{message}} <br>
        <button @click="getUser('vladislav', '')">Get!</button>
        <button @click="setUser('new_user', 'password')">Put!</button>
    </div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="<?php echo base_url();?>templates/script.js"></script>
</body>
</html>