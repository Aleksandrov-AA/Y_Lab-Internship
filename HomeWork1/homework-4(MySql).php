<?php
if (isset($_POST['name']) && isset($_POST['surname'])) {

    $name=$_POST['name'];
    $surname=$_POST['surname'];

    $db_host = "localhost";
    $db_user = "ylabuser";
    $db_password = "DsghhH[iVQzWa0dS";
    $db_base = "ylabbase";
    $db_table = "homework";

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        $db->exec("set names utf8");
        $data = array( 'name' => $name, 'surname' => $surname );
        $query = $db->prepare("INSERT INTO $db_table (name, surname) values (:name, :surname)");
        $query->execute($data);
        $result = true;        
    } catch (PDOException $e) {
        print "Ошибка : " . $e->getMessage() . "<br/>";
    }

    if ($result) {
        print "Поздравляю, {$surname} {$name}! Вашу информацию занесли в базу данных =)";
    }


}