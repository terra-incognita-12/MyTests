<?php
session_start();

include_once "CommonFunctions.php";

$id = $_SESSION['test_id'];
$resultKey = $_SESSION['answerValues'];
$result = getResultTest($id, $resultKey);
?>

<html>
<head>
    <title>Результат</title>
</head>
<body>
    <h1 align="center">Результат</h1>
    <p><?=$result?></p>
    <p><a href="index.php" class="btn btn-primary">На главную</a></p>
    <p><a href="PrepareAgain.php" class="btn btn-primary">Перепройти тест</a></p>
</body>
</html>