<?php
    // Открытие доступа к сессионным переменным
    session_start();
    $answer2 = $_POST['answer2'];
    
    // $_SESSION - массив сессионных переменных
    $_SESSION['Ответ 2'] = $answer2; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 3</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header>Тестирование по дисциплине: "Программирование в компьютерных сетях"</header>
   <h3>Задание 3</h3>
   <form action="task4.php" method="post">
      <p><b>jQuery предназначен для?</b></p>
       <p><input type="radio" name='answer3' value="1">создания разметки на странице</p>
       <p><input type="radio" name='answer3' value="2">создания стилей для страницы</p>
       <p><input type="radio" name='answer3' value="3">написания серверных скриптов</p>
       <p><input type="radio" name='answer3' value="4">написания клиентских скриптов</p>
       <input type="submit" value="Ответить">
   </form>
</body>
</html>