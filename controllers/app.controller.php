<?php
  class app {

    public function __construct() {

  	}

    public function ident() {
      return 'app';
    }
    public function index() {
      main::set('header', 'App');
      main::set('message', 'Hey, there!');
      main::render('views/pages/app.php');
    }

    public function connect_to_va() {
      // http://localhost/phpvms

      $va_url = $_GET['va_url'];
      $modulePath = $va_url.'/index.php/ICSApp/handshake';

      $ch = curl_init();

      // define options
      $optArray = array(
          CURLOPT_URL => $modulePath,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_SSL_VERIFYPEER => false
      );

      // apply those options
      curl_setopt_array($ch, $optArray);

      // execute request and get response
      $result = curl_exec($ch);

      // also get the error and response code
      $errors = curl_error($ch);
      $response = curl_getinfo($ch, CURLINFO_HTTP_CODE);

      curl_close($ch);
      if($response == 200) { // 200 means OK, 404 means not found!
          $result = json_decode($result);
          $name = $result->Name;
          $version = $result->api_version;
          main::set('header', 'Handshake Verified');
          main::set('message', 'The iCrew App module is installed at <strong>'.$name.' (version : '.$version.')</strong>');
          main::render('views/handshake/verified.php');

          // Setting these data into a Session variable because that's the only way to access them later on
          $_SESSION['va_data'] = $result;

      } else {

        main::set('message', 'Handshake verification failed!');
        main::render('views/handshake/failed.php');
      }


    }

    public function reset_session() {
      session_destroy();
      main::set('message', 'Session successfully destroyed!');
      main::render('views/pages/home.php');
    }

    public function va_details() {
      //http://localhost/phpvms/index.php/ICSApp/details
      
      main::set('message', 'Details Loaded');
      main::render('views/va/details.php');
    }
    public function error() {
      main::render('views/pages/error.php');
    }
  }
?>
