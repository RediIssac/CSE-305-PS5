<!--Name Rediet Negash, CSE 305 PS 5-->
  
<!--Main Page--- Home-->
  <!-- Bootstrap core External CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="assets/css/grayscale.min.css" rel="stylesheet">



<body id="page-top">

  <!-- Navigation -->
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
            <a class="nav-link js-scroll-trigger" href="#laptop">Laptop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#pc">PC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#maker">Get Manufacturer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#budget">Under Budget</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#insertProduct">Insert Product</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">FIND ME PC</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Enter specs and find a PC that you like</h2>
        <a href="#pc" class="btn btn-primary js-scroll-trigger">Get Started</a>
        
      </div>
    </div>
  </header>
 
  

   <!-- PC Section -->
   <section id="pc" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Input required Price and Find PC</h2>

          <form action = "desiredPC_Price.php" class="form-inline d-flex">
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "price" id=" requiredinputPrice" placeholder="   Enter PC Price...">
            <button type="submit" class="btn btn-primary mx-auto">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </section>

   <!-- Laptop Section -->
  <section id="laptop" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Input Spec and Find Laptop!</h2>

          <form  action="desiredLaptop.php" class="form-inline d-flex">
         
            <input required type="text"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name = "speed" id=" requiredinputEmail" placeholder="   Enter speed...">
          
            <input required type="text"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name = "ram" id=" requiredinputRam" placeholder="   Enter RAM...">
            
            <input required type="text"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name = "weight" id=" requiredinputWeight" placeholder="   Enter weight...">
            
            <h2 class="text-white-50 mx-auto mt-2 mb-5">...............................................................</h2>
            
            <input required type="text"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name = "hd" id=" requiredinputHd" placeholder="   Enter Hard Disk Size...">
            
            <button type="submit" class="btn btn-primary mx-auto">Submit</button>
         
          </form>

        </div>
      </div>
    </div>
  </section>

     <!-- Manufacturer Section -->
  <section id="maker" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Enter Manufacturer and Display Specifications of the product</h2>

          <form action = "maker.php" class="form-inline d-flex">
            <input required type="text"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "maker" id=" requiredinputMaker" placeholder="   Enter Manufacturer...">
            <button type="submit" class="btn btn-primary mx-auto">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </section>

     <!-- Budget Section -->
  <section id="budget" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Enter your Budget and minimum speed to get a product under your budget</h2>

          <form action = "budget.php" class="form-inline d-flex">
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "budget" id=" requiredinputBudget" placeholder="   Enter your Budget here...">
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "speed" id=" requiredinputSpeed" placeholder="   Enter speed here...">
            
            <button type="submit" class="btn btn-primary mx-auto">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </section>
  
     <!-- Insert Product Section -->
  <section id="insertProduct" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Insert your Product Specificaiton here</h2>

          <form action = "insertProduct.php" class="form-inline d-flex">
            <input required type="text"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "maker" id=" requiredinputBudget" placeholder="   Enter Maker...">
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "model" id=" requiredinputModel" placeholder="   Enter model...">
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "speed" id=" requiredinputSpeed" placeholder="   Enter speed...">
            <h2 class="text-white-50 mx-auto mt-2 mb-5">You can only insert Product type "PC"</h2>
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "ram" id=" requiredinputRam" placeholder="   Enter RAM...">
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "hd" id=" requiredinputHD" placeholder="   Enter HD...">
            <input required type="number"    class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name= "price" id=" requiredinputPrice" placeholder="   Enter price...">
            
        
            <button type="submit" class="btn btn-primary mx-auto">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Redi Webapp CSE 305 2020
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/grayscale.min.js"></script>