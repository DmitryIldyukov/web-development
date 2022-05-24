<?php
header("Content-Type: text/plain");

if (isset($_GET["text"]))
{
  $text = $_GET['text'];
  $text = trim($text);
  $text = preg_replace("/\s+/", " ", $text);
  echo $text;
} 