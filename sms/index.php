  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <!-- < meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>School Management System</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
      <!-- Google Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  </head>
  <body>
      <!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#"><B>SMS</B></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Sign Up</a>
          <a class="dropdown-item" href="#">Registration Form</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">
          <i class="fab fa-google-plus-g"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
    <div class="d-flex shadow" style="height:500px;  background: linear-gradient(-45deg, navy, transparent 50%);">
      <div class="container-fluid my-auto">
        <div class="row">
          <div class="col-lg-6 my-auto">
            <h1 class="display-3 font-weight-bold">School Management System</h1>
             <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, dolore molestiae laudantium impedit molestias, provident et facilis inventore exercitationem quas est nobis minus nisi voluptatum voluptatem itaque. Voluptatibus, asperiores totam?</p>
             <a href="" class="btn btn-lg btn-primary">call to Action</a>
            </div>
            <div class="col-lg-6" >
              <div class="w-50 mx-auto card shadow-lg">
                <div class="card-body">
                  <h3>Addmission Form</h3>
                <form action="" method="post" class="">
                  <!-- Material input -->
                  <div class="md-form">
                  <input type="text" id="form1" class="form-control">
                  <label for="form1">Your Name</label>
                   </div>
                    <!-- Material input -->
                  <div class="md-form">
                  <input type="email" id="email" class="form-control">
                  <label for="email">Your Email</label>
                   </div>
                    <!-- Material input -->
                  <div class="md-form">
                  <input type="text" id="mobile" class="form-control">
                  <label for="mobile">Your Mobile</label>
                   </div>
                    <!-- Material input -->
                  <div class="md-form">
                  <input type="text" id="class" class="form-control">
                  <label for="class">Your Class</label>
                   </div>
                   <button class="btn btn-primary btn-block">Submit Form</button> 

              </form>
                </div>
              </div>

              
            </div>
        </div>

      </div>
    </div>  
    <section class="py-5">
      <div class="text-center mb-5">
        <h2 class="text-center font-weight-bold">Our Courses</h2>
        <P class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit deserunt et saepe distinctio dolor placeat molestias nostrum labore? Veniam ratione voluptates minus asperiores tempora quae, in soluta eligendi fuga?</P>
    </div>
    <div class="container">
      <div class="row">
        <?php
        for($i=0;$i<12;$i++) {?>
        <div class="col-lg-3 mb-4">
          <div class="card"> 
            <div><img src="./img/2.jfif" alt="" class="img-fluid"></div>
            <div class="card-body">
              <b>Courses Name</b><br>
              <p class="card-text">
                <b>Duration</b><br>
                <b>Price</b>
              </p>
              <button class="btn btn-block btn-primary btn-sm" >Enroll </button>
            </div>
          </div>
        </div>
         <?php }?>

          <!-- <div class="card">
            <div><img src="./img/1.jpg" alt="" class="img-fluid"></div>
            <div class="card-body">
              <b>Courses Name</b><br>
              <p class="card-text">
                <b>Duration</b><br>
                <b>Price</b>
              </p>
              <button class="btn btn-block btn-primary btn-sm" >Enroll </button>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    </section>

    <section class="py-5 bg-light">
    <div class="text-center mb-5">
        <h2 class="text-center font- weight-bold">Our Teacher</h2>
        <P class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores fugit deserunt et saepe distinctio dolor placeat molestias nostrum labore? Veniam ratione voluptates minus asperiores tempora quae, in soluta eligendi fuga?</P>
    </div>
    <div class="container">
      <div class="row">
        <?php for ($i=0; $i <8 ; $i++) { ?>
          
          <div class="col-lg-3">
          <div class="card">
          <div class="col-7 position-absolute" style="top:-50px" >
                <img src="./img/p.png" alt="" class="mw-100 border rounded-circled">
                </div>
            <div class="card-body pt-5 mt-4">
              <h5 class="card title">Teacher Name</h5>
              <p<i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></p>
              <p class="card-text">
                <b>Courses</b><br>
                <b>Ratings</b>
              </p>
               
              <!-- <div class="row">
                
                <div class="col-8"> -->

                </div>
              </div>
            </div>
          </div>
        </div>
       <<?php } ?>
      </div>
    </div>
    </section>
  

     <!-- JQuery -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Bootstrap tooltips -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
     <!-- Bootstrap core JavaScript -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <!-- MDB core JavaScript -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  </body>
  </html>