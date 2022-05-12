<?php 
$fio = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$letter = "$fio, $email, $phone";
// Отправка письма на почту
if (mail('vzhaldakov@yandex.ru', 'Тест сервера', $letter))
    echo 'Письмо отправлено успешно <br><br>';
else echo 'Ошибка отправки письма <br><br>';

// Вывод данных формы в виде "элемент => значение"
if (isset($_POST["name"]) &&                       isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["address"])) {
    
    $array = array($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["address"]);
    
    foreach ($array as $key => $value) {
        echo "{$key} => {$value}<br>";
    }
}
?>