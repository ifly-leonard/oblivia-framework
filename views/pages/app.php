<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron">
      <h1 class="display-3"><?php echo message; ?></h1>        
        <?php
          if(isset($_SESSION['va_data']) || $_SESSION['va_data'] != '') {
            $session = $_SESSION['va_data'];
            ?>
              <div class="alert alert-warning">
                The software is currently configured to <?php echo $session->Name; ?>, to reset that please click <a href="/?c=app&a=reset_session">here</a>
              </div>
            <?php
          }
        ?>
      <p class="lead">Welcome to <?php echo PROJECT_NAME; ?>, a simple yet powerful framework by icrewsystems. </p>
      <hr class="my-4">
      <p>This framework was specially created for the iCrewApp Project for phpVMS.</p>
      <p class="lead">
        <form class="form" action="<?php echo SITE_URL; ?>/" method="GET">
          <div class="form-group">
            <div class="col-md-4">
            <input type="text" name="va_url" class="form-control" placeholder="Enter target URL">
            <input type="hidden" name="c" value="app">
            <input type="hidden" name="a" value="connect_to_va">
            <br>
            <input type="submit" class="btn btn-info" value="Get Started">
            </div>
          </div>
        </form>
      </p>
      </div>
      <p>

      </p>
      </div>
    </div>
</div>
