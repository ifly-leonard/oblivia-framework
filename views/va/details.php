<div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="alert alert-success">
          <?php echo message; ?>
        </div>
        <table class="table table-hover">
          <thead>
            <thead>
              <th>S.No</th>
              <th>Module Name</th>
              <th>Compatibility</th>
            </thead>
            <tbody>

              <?php
              $file = file_get_contents($_SESSION['va_data']->URL.'/index.php/ICSApp/details');
              $details = json_decode($file);
              $i = 1;
                  foreach ($details as $key => $item) {
                  ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td>
                      <?php echo "$item\n";
                      each($details);?>
                    </td>
                    <td>To be announced</td>
                  </tr>
                  <?php
                  $i++;
                }

              ?>

          </tbody>
        </table>
        <p>

          You can continue with integration in this server!<br>
          <a href="<?php echo SITE_URL; ?>" class="btn btn-success btn-md">Index</a>
          
        </p>

      </div>
    </div>

</div>
