<?php
    // Открытие доступа к сессионным переменным
    session_start();
    $answer7 = $_POST['answer7'];
    
    // $_SESSION - массив сессионных переменных
    $_SESSION['Ответ 7'] = $answer7; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 8</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header>Тестирование по дисциплине: "Программирование в компьютерных сетях"</header>
   <h3>Задание 8</h3>
   <form action="results.php" method="post">
      <p><b>Как получить данные POST-запроса в PHP?</b></p>
       <p><input type="radio" name='answer8' value="1">Через функцию getPostData()</p>
       <p><input type="radio" name='answer8' value="2">Через константу POST</p>
       <p><input type="radio" name='answer8' value="3">Через переменную $_POST</p>
       <input type="submit" value="Ответить">
   </form>
</body>
</html>