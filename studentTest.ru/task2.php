<?php
    // Открытие доступа к сессионным переменным
    session_start();
    $answer1 = $_POST['answer1'];
    
    // $_SESSION - массив сессионных переменных
    $_SESSION['Ответ 1'] = $answer1; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header>Тестирование по дисциплине: "Программирование в компьютерных сетях"</header>
   <h3>Задание 2</h3>
   <form action="task3.php" method="post">
      <p><b>Укажите тег позволяющий определить поле для ввода пароля:</b></p>
       <p><input type="radio" name='answer2' value="1">hide</p>
       <p><input type="radio" name='answer2' value="2">password</p>
       <p><input type="radio" name='answer2' value="3">pass</p>
       <p><input type="radio" name='answer2' value="4">input type='password'/</p>
       <input type="submit" value="Ответить">
   </form>
</body>
</html>