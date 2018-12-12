<?php
  class bridge {


    public function index() {
      echo 'It works!';
    }

    public static function getVersion($URL) {

      $version = file_get_contents($URL.'index.php/ICSApp');
      return $version;
    }

    public static function getPilots($URL) {

      $pilots = file_get_contents($URL.'index.php/ICSApp/showPilots');
      $results = json_decode($pilots, true);
      return $results;
    }



  }

  ?>
