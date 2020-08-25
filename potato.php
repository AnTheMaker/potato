<?php

$get = file_get_contents(__DIR__.'/.env');
$lines = explode(PHP_EOL, $get);
foreach($lines as $line){
  $line = trim($line);
  $line = str_replace(PHP_EOL, '', $line);
  if(!empty($line)){
    putenv($line);
  }
}
