<!-- navbar -->
<!-- <style>
    body {
      background-image: url('img/k.jpg');
    }
    </style> -->
<!-- <div class="container-fluid sticky-top">
    <div class="row bg-light">
      <div class=" col-6 text-center m-auto"><a href="index.php" class="btn">
          <h1 class="text-info">Icddrb</h1>
        </a> </div>
      <div class="col-6  mt-3">
        <form action="" method="POST">

          <div class="row ml-5">
            
            <a href="list.php" class="btn btn-outline-info mr-2">List</a>
            <a href="index.php" class="btn btn-outline-info mr-2">Add New</a>

          </div>

        </form>
      </div>
    </div>
  </div> -->
  
  <!-- <nav class="navbar navbar-expand-lg navbar-blue  bg-dark">
    <div class="container-fluid">
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php"style="color: black;">icddrb</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./list.php" class="container-fluid justify-content-start" class="btn btn-outline-success me-2">List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php" class="container-fluid justify-content-start" class="btn btn-outline-success me-2">Add new</a>
          </li>
          <li class="nav-item">
            <?php  
            // if(isset($_SESSION['username'])){ ?>

<a class="nav-link" href="./logout.php" class="container-fluid justify-content-start" class="btn btn-outline-success me-2">logout</a>


            <?php 
          // } else { 
            ?>
<a class="nav-link" href="./login.php" class="container-fluid justify-content-start" class="btn btn-outline-success me-2">login</a>
            <?php 
            // .} 
            ?>
           
          </li>
        
          
          
          
        </ul>
      </div>
    </div>
  </nav> -->





  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Fixed Layout Example</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <div class="header-logo"> <!-- logo-->
						<a href="./dashboard.php">
							<!--<img alt="icddr,b" width="100" data-sticky-width="62" data-sticky-height="40" data-sticky-top="33" src="/templates/ICDDRB/images/logo_60_year.png">-->
							<img alt="icddr,b" width="190" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
						</a>
					</div>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                
                <a href="./guestentry.php" class="nav-item nav-link">Services</a>
                <a href="./list.php" class="nav-item nav-link">Employees</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="./index1.php" class="nav-item nav-link">Register</a>
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>
</nav>
<!-- <div class="container">
    <div class="p-5 my-4 bg-light rounded-3">
        <h1>Learn to Create Websites</h1>
        <p class="lead">In today's world internet is the most popular way of connecting with the people. At <a href="https://www.tutorialrepublic.com" class="text-success" target="_blank">tutorialrepublic.com</a> you will learn the essential web development technologies along with real life practice examples, so that you can create your own website to connect with the people around the world.</p>
        <p><a href="https://www.tutorialrepublic.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>HTML</h2>
            <p>HTML is the standard markup language for describing the structure of the web pages. Our HTML tutorials will help you to understand the basics of latest HTML5 language, so that you can create your own web pages or website.</p>
            <p><a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>CSS</h2>
            <p>CSS is used for describing the presentation of web pages. CSS can save a lot of time and effort. Our CSS tutorials will help you to learn the essentials of latest CSS3, so that you can control the style and layout of your website.</p>
            <p><a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Bootstrap</h2>
            <p>Bootstrap is a powerful front-end framework for faster and easier web development. Our Bootstrap tutorials will help you to learn all the features of latest Bootstrap 4 framework so that you can easily create responsive websites.</p>
            <p><a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div> -->
</body>
</html>


