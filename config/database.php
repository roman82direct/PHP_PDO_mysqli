<?php

// Параметры для подключения
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = "root"; // Пароль БД
$db_base = 'temp_users'; // Имя БД
$db_table = "users"; // Имя Таблицы БД

try {
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("set names utf8");
} catch (PDOException $e) {
    // Если есть ошибка соединения или выполнения запроса, выводим её
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}

/*const SERVER = "localhost";
const USER = "root";
const PASS = "root";
const DB = "temp_users";

$link = mysqli_connect(SERVER, USER, PASS, DB) or die ("Ошибка подключения к БД: " . DB);*/
