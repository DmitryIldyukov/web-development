<?php
header("Content-Type: text/plain");

$strength = 0;
$digits = 0;
$uppercase = 0;
$lowercase = 0;
$repeating_chars = 0;

if (isset($_GET['password']))
{
  $password = $_GET['password'];
  if (ctype_alnum($password))
  {
    $digits = strlen(preg_replace('/[^0-9]/', '', $password));
    $lowercase = strlen(preg_replace('/[^a-z]/', '', $password));
    $uppercase = strlen(preg_replace('/[^A-Z]/', '', $password));
    $chars = count_chars($password, 1);
    foreach ($chars as $char)
    {
      if ($char > 1)
      {
        $repeating_chars += $char;
      }
    }
    if (strlen($password) != 0)
    {
      $strength += 4 * strlen($password);
    }
    if (strlen($password) != 0)
    {
      $strength += 4 * strlen($digits);
    }
    if ($lowercase != 0)
    {
      $strength += (strlen($password) - $lowercase) * 2;
    }
    if ($uppercase != 0)
    {
      $strength += (strlen($password) - $uppercase) * 2;
    }
    if (ctype_alpha($password))
    {
      $strength -= strlen($password);
    }
    if (is_numeric($password))
    {
      $strength -= strlen($password);
    }
    echo 'Надежность пароля: ', ($strength - $repeating_chars);
  }
  else
  {
    echo 'Пароль задан некорректно';
  }
}
else
{
  echo 'Пароль не был введен';
}