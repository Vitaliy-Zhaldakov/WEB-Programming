<?php
    // Открытие доступа к сессионным переменным
    session_start();
    $answer4 = $_POST['answer4'];
    
    // $_SESSION - массив сессионных переменных
    $_SESSION['Ответ 4'] = $answer4; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 5</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header>Тестирование по дисциплине: "Программирование в компьютерных сетях"</header>
   <h3>Задание 5</h3>
   <form action="task6.php" method="post">
      <p><b>Что такое протокол HTTP?</b></p>
       <p><input type="radio" name='answer5' value="1">Базовый протокол сети гипертекстовых ресурсов</p>
       <p><input type="radio" name='answer5' value="2">Протокол режима командной строки</p>
       <p><input type="radio" name='answer5' value="3">Первый обозреватель с графическим интерфейсом</p>
       <p><input type="radio" name='answer5' value="4">Протокол коммутации пакетов, предполагающий разбиение запросов данных на небольшие фрагменты</p>
       <input type="submit" value="Ответить">
   </form>
</body>
</html>