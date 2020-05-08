
<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="assets/css/grayscale.min.css" rel="stylesheet">

    <body>
        <?php
            $speed = $_GET['speed'];
            $ram = $_GET['ram'];
            $hd = $_GET['hd'];
            $weight = $_GET['weight'];

             
            $sql = " SELECT Laptops.model, Laptops.speed, Laptops.hd, Laptops.ram, 
                            Laptops.weight, Laptops.price, Products.maker 
                            FROM Laptops, Products WHERE Laptops.model = Products.model 
                            AND speed = '".$speed."'
                            AND ram = '".$ram."'
                            AND hd = '".$hd."'
                            AND weight = '".$weight."'";

            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

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
                          <th>Model</th>
                          <th>Speed</th>
                          <th>Hard-Disk</th>
                          <th>RAM</th>
                          <th>Weight</th>
                          <th>Price</th>
                          <th>Maker</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Model</th>
                          <th>Speed</th>
                          <th>Hard-Disk</th>
                          <th>RAM</th>
                          <th>Weight</th>
                          <th>Price</th>
                          <th>Maker</th>
                        </tr>
                      </tfoot>
                  </div>
                </div>
              </div>
            ';

            if($resultCheck > 0){
                $LaptopResult = 'Laptop Result';
                while($row = mysqli_fetch_assoc($result)){
                    $model = $row['model'];
                    $speed = $row['speed'];
                    $hd = $row['hd'];
                    $ram = $row['ram'];
                    $weight = $row['weight'];
                    $price = $row['price'];
                    $maker = $row['maker'];
                    
                    echo '
                      <tr> 
                        <td>'.$model.'</td> 
                        <td>'.$speed.'</td> 
                        <td>'.$hd.'</td> 
                        <td>'.$ram.'</td> 
                        <td>'.$weight.'</td> 
                        <td>'.$price.'</td> 
                        <td>'.$maker.'</td> 
                      </tr>';
                }
            }
            else{
              $LaptopResult = 'Opps No such Laptop Found, Try another one!';
              
            }
        ?>
        
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

        <h3 href="#result" class="text-uppercase m-0"> <?php echo $LaptopResult?></h3> 
   

  
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.min.js"></script>

  </body>
</html>
