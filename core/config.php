<?php
function debug($var){
  echo"<pre>";
  print_r($var);
  echo"<pre>";
}
function dd($var){
  debug($var);
  die();
}

$config = array(
  "db_host" => "localhost",
  "db_user" => "root",
  "db_pass" => "root",
  "db_name" => "todo_app",
);
