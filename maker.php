
<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
  <!-- Bootstrap core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="assets/css/grayscale.min.css" rel="stylesheet">

    <body>
      <?php
        $maker = $_GET['maker'];
       
       
       $sql = " SELECT Products.model, maker, Products.type as productType, speed, ram, hd, price, 
                        Null as weight, Null as printerType, Null as color
                        FROM Products, PCs 
                        WHERE Products.maker = '".$maker."' AND Products.type = 'PC' AND Products.model = PCs.model 
                UNION  
                SELECT Products.model, maker, Products.type as productType, speed, ram, hd, price, weight,
                        Null as printerType, Null as color 
                        FROM Products, Laptops WHERE Products.maker = '".$maker."' AND Products.type = 'laptop' AND Products.model = Laptops.model 
                UNION 
                SELECT Products.model, maker, Products.type as productType, Null as speed, Null as ram, 
                        Null as hd, price, Null as weight, Printers.type as printerType, color
                        FROM Products, Printers 
                        WHERE Products.maker = '".$maker."' AND Products.type = 'Printer' AND Products.model = Printers.model 
                         
                ";
         
         


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
                      <th>Maker</th>
                      <th>Model</th>
                      <th>ProductType</th>
                      <th>Speed</th>
                      <th>RAM</th>
                      <th>HD</th>
                      <th>Price</th>
                      <th>Weight</th>
                      <th>PrinterType</th>
                      <th>color</th>
                    </tr>
                  </thead>

                  <tfoot>
                    <tr>
                      <th>Maker</th>
                      <th>Model</th>
                      <th>ProductType</th>
                      <th>Speed</th>
                      <th>RAM</th>
                      <th>HD</th>
                      <th>Price</th>
                      <th>Weight</th>
                      <th>PrinterType</th>
                      <th>color</th>
                    </tr>
                  </tfoot>
              </div>
            </div>
          </div>
        ';
      
        if($resultCheck > 0){
          $MakerResult = ' Specifications of products by <?php echo $maker?>';
          while($row = mysqli_fetch_assoc($result)){
            $maker = $row['maker'];
            $model = $row['model'];
            $productType = $row['productType'];
            $speed = $row['speed'];
            $ram = $row['ram'];
            $hd = $row['hd'];
            $price = $row['price'];
            $weight = $row['weight'];
            $printerType = $row['printerType'];
            $color = $row['color'];
            echo '
              <tr> 
                <td>'.$maker.'</td> 
                <td>'.$model.'</td> 
                <td>'.$productType.'</td> 
                <td>'.$speed.'</td> 
                <td>'.$ram.'</td> 
                <td>'.$hd.'</td> 
                <td>'.$price.'</td> 
                <td>'.$weight.'</td> 
                <td>'.$printerType.'</td> 
                <td>'.$color.'</td> 
              </tr>
            ';
          }
        }
        else{
          $MakerResult = 'There are no Specifications for products by ';
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
        
      <h3 href="#result" class="text-uppercase m-0"><?php echo $MakerResult?><?php echo $maker?></h3> 
    </div>
  </section>
  
   <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.min.js"></script>

    </body>
</html>
