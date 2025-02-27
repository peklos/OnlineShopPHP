<?php 
    // $connect = mysqli_connect(host:'localhost', user:'root', password:'', database:'asdasd'); видимо старый метод
    $connect = mysqli_connect('localhost', 'root', '', 'asdasd');

    if (!$connect) {
        die('Error connect to DataBase');
    }
    