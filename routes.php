<?php
  /*
    Things to Remember :
      1. When creating a new MVC, assign the M, V, and the C to a common name.
      eg : app

  */
  function initialize_all_controllers($class) {
    include  'controllers/' . $class . '.controller.php';
  }

  spl_autoload_register('initialize_all_controllers');

  function execute_module($controller, $action) {
    $controller_path = 'controllers/' . $controller . '.controller.php';
      if (file_exists($controller_path)){
          require_once('controllers/' . $controller . '.controller.php');
            $controller = new $controller();
            $controller->{ $action }();
        }
      }


      if (method_exists($controller, $action)) {
        execute_module($controller, $action);
        } else {
        execute_module('pages', 'error');        
        }


    // $files = glob("controllers/*.php");
    // foreach($files as $jpg){
    //     echo $jpg, "<br>";
    // }




?>
