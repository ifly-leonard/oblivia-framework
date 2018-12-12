<?php
include_once ('core/config.php');
session_start();

  if (isset($_GET['c']) && isset($_GET['a'])) {
    $controller = $_GET['c'];
    $action     = $_GET['a'];
  } else {
    $controller = init_module;
    $action     = 'index';
  }

  // $URL = $_SERVER['REQUEST_URI'];
  //
  //     # Use the ?q= parameter if that's supplied
  //     $params = explode(SITE_URL, $URL);
  //       if($params > 0) {
  //         $preg_match = $params[0];
  //         $params = explode('/', $preg_match);
  //
  //         if($params[2] == '') {
  //           $controller = init_module;
  //         } else {
  //           $controller = $params[2];
  //         }
  //
  //         $args = count($params);
  //
  //         if($args > 1) {
  //           $action = $params[3];
  //         } else {
  //           $action = 'index';
  //         }
  //       }
  //
  //
  //     echo 'Controller : '.$controller;
  //     echo '<br>';
  //     echo 'Action : '. $action;
  //
  //
  //     print_r($params);
  //     // echo $_SERVER['SCRIPT_FILENAME'];


  require_once('views/layout.php');
?>
