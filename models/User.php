<?php
include "../config/database.php";

if (isset($_POST['email']) && isset($_POST['pass'])){
    // Переменные с формы
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    try {
        // Собираем данные для запроса
        $data = array( 'email' => $email, 'pass' => $pass, 'date' => date('d-m-Y H:i:s'));
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (user_email, user_pass, date_reg) values (:email, :pass, :date)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        header("Location: ../index.php");
    }
}