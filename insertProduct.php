
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
            $model = $_GET['model'];
            $price = $_GET['price'];
            $speed = $_GET['speed'];
            $ram = $_GET['ram'];
            $hd = $_GET['hd'];
            
            $ResultText = "";
            $ResultMessage = '';
            // this inquery checks if the product exists
            $checkIfExists = "SELECT * FROM PCs p WHERE p.model =  '".$model."'";
           
            $resultInsert = mysqli_query($conn, $checkIfExists);
            $resultCheck = mysqli_num_rows($resultInsert);
            
            // if there is no such product in the database
            if(!$resultCheck){
               
                // insert it in the database
                $sql1 = "INSERT INTO Products (maker, model, type) VALUES ('".$maker."', '".$model."', 'PC')";
               
                $result1 = mysqli_query($conn, $sql1);
               
                $sql2 = "INSERT INTO PCs (speed, model, ram, hd, price) VALUES ('".$speed."', '".$model."','".$ram."', '".$hd."', '".$price."')";
             
                $result2 = mysqli_query($conn, $sql2);
              
                //check if insertion is successful
                if(gettype($result1)=='boolean' & gettype($result2)=='boolean'){
                   
                    if($result1  & $result2){  
                        $ResultMessage = 'Successfuly Inserted';
                        $ResultText = 'Thank You!';
                    }
                }
    
                else{
                    $ResultMessage = "AN ERROR HAS OCCURED";
                    $ResultText = 'Please make sure to enter all the products correctly,
                    It looks like you found a glitch in the matrix...';
                }
              
            }
             // if there exists such a product in the database promot an error message
            else{
                $ResultMessage = "AN ERROR HAS OCCURED";
                $ResultText = 'The Product already exists;      
                                            Please try entering a new product!';
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
        
          <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Result of Inserted Product Text -->
        <div class="text-center">
            <div class="error mx-auto" data-text="404"></div>
            <p class="lead text-gray-800 mb-5"></p>

            <!-- This is either Error has occured or a sucessfuly Inserted thank you message -->
            <p class="lead text-gray-800 mb-5"><?php echo $ResultMessage?></p>
            <p class="text-gray-500 mb-0"></p>
            <p class="text-gray-500 mb-0"><?php echo $ResultText?></p>
            
            <p>
            <a href="styledFindSpec.php">&larr; Back to Insert Product</a>
        </div>

        </div>

        
        <!-- Bootstrap core JavaScript -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="assets/js/grayscale.min.js"></script>
        
    </body>
</html>
