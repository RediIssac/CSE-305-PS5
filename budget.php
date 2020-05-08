
<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>

<!-- Bootstrap core CSS, external CSS plugins-->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="assets/css/grayscale.min.css" rel="stylesheet">

    <body>
        <?php

         // get the inputs from the user
          $budget = $_GET['budget'];
          $speed = $_GET['speed'];

         // get the required system based on the minimum speed and budget given
          $sql = "SELECT Printers.model as ptModel, PCs.model as pcModel, PCs.price as pcPrice, Printers.price as ptPrice, color, speed FROM Printers, PCs 
                    WHERE ( PCs.price + Printers.price) <=  '".$budget."' 
                    AND (speed >=  '".$speed."') 
                    AND  (CASE
                              WHEN EXISTS (SELECT color FROM Printers WHERE color = 'TRUE') 
                                  THEN color = 'TRUE' 
                              ELSE color = 'FALSE' 
                          END) 
                    ORDER BY (PCs.price +  Printers.price) LIMIT 1";
          
          // pass the sql statement to the databse to get the query
          $result = mysqli_query($conn, $sql);

          // result check has num of rows returned from the sql query
          $resultCheck = mysqli_num_rows($result);

          // create a table to display the result
          echo ' 
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">CSE 305 PS 5   </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>PC-Model</th>
                        <th>Printer-Model</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                      <th>PC-Model</th>
                      <th>Printer-Model</th>
                      </tr>
                    </tfoot>
                </div>
              </div>
            </div>
          ';

          // if there are rows returned we insert the rows in the created table and diplay
          if($resultCheck > 0){
            $budgetResult = 'Model Numbers for budget $';
              while($row = mysqli_fetch_assoc($result)){
                $ptModel = $row['ptModel'];
                $pcModel = $row['pcModel'];
                echo '
                  <tr> 
                    <td>'.$ptModel.'</td> 
                    <td>'.$pcModel.'</td> 
                  </tr>
                ';
                
              }
          }

          // otherwise, we will prompt a message that the required query is not found
          else{
            $budgetResult = 'Opps No PC Found for entered budget $';
          }
        ?>

        <!--Navigation Bar to reutrn back-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">CSE 305 PS 5</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-primary js-scroll-trigger" href="styledFindSpec.php">Home</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!--this prompts the result message for the coressponding input request-->
        <h3 href="#result" class="text-uppercase m-0"><?php echo $budgetResult; echo $budget?></h3> 
   
    <!-- Bootstrap core JavaScript and jquery plugins -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.min.js"></script>
    

    </body>
</html>
