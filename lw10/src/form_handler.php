<?php

$email = $_POST['email'];

if (!empty($email))
{
  $name = $_POST['name'];
  $activity = $_POST['activity'];
  $agreed = $_POST['agreed'];
  $file_name = './data/' . $email . '.txt';
  $file = fopen($file_name, 'w');
  fwrite($file, "Email: " . $email . PHP_EOL);
  fwrite($file, "Имя: " . $name . PHP_EOL);
  fwrite($file, "Деятельность: " . $activity . PHP_EOL);
  fwrite($file, "Согласие: " . $agreed . PHP_EOL);
  fclose($file);
  echo "Успешно добавлено!";
}
else
{
  echo "email не введен!";
}
