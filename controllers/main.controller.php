<?php
  class main {

    public static $message;
    public static $title;
    public static $error;
    
    public static function render($name) {
      return require_once($name);
    }

    public static function set($name, $value) {

        return define($name, $value);


    }
  }
