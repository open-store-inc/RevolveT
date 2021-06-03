<?php 
  // 現在のパスを取得
  $uri = $_SERVER['REQUEST_URI'];


  if(preg_match('/no1/',$uri)){
    get_template_part('templates/no1/no1');
  }
?>