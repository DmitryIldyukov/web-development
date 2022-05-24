<!DOCTYPE html>
<html>
  <head lang="ru">
    <meta charset="UTF-8">
    <title>Don`t do it</title>
    <link href="/web/css/styleSmallForm.css" rel="stylesheet">
  </head>
<body>
<?php

$email = strtolower($_POST['email']);

$file_name = './data/' . $email . '.txt';
if (file_exists($file_name))     //Проверяет существование указанного файла
{
  $file = file_get_contents($file_name);   //Читает содержимое файла
  $name = substr($file, strpos($file, ':', strpos($file, ':') + 1) + 1, strpos($file, "Деятельность") - strpos($file, ':', strpos($file, ':') + 1) - 1);
  $activityAndAgreed = trim($file, substr($file, 0, strpos($file, "Деятельность")));
  $activity = substr($activityAndAgreed, strpos($activityAndAgreed, ':') + 1, strpos($activityAndAgreed, "Согласие") - strpos($activityAndAgreed, ':') - 1);
  echo '<span class="output__text">Email: ' . $email . '</span><br>';
  echo '<span class="output__text">Имя: ' . $name  . '</span><br>';
  echo '<span class="output__text">Деятельность: ' . $activity . '</span><br>';
}
else
{
  echo '<span class="output-text">Данного файла не существует</span>';
}
?>
</body>
</html>
