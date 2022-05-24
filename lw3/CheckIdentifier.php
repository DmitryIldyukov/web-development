<?php
header("Content-Type: text/plain");

if (isset($_GET['identifier']))
{
    $text = $_GET['identifier'];
    if (ctype_alnum($text) && !is_numeric($text[0]))
    {
      echo 'Yes';
    }
    else
    {
      echo 'No';
    }
}
else
{
    echo 'Идентификатор не передан';
}