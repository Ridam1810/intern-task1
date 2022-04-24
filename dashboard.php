<?php

if (!isset($_SESSION)) {
  session_start();
}
include 'splitfile/navbar.php';
include "init.php";
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");



// }


// if (isset($_POST['submit'])) {
//   header("Location: guestentry.php");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style1.css">
  <title>Medic</title>
</head>

<body style="background-color: #E8E8E8">



  <div class="main">
    <section class="intro">
      <div class="col1">
        <h2>A range of programs for healthcare</h2>
        <h1>Special Touch</h1>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et aliquet orci, non posuere
        <button id="myButton" class="float-left submit-button" >Submit Your Problem</button>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "guestentry.php";
    };
</script>

      </div>
      <div class="col2"><img src="./img/doctor.jpg" alt="doctor" id="homedoc">
      </div>
    </section>





    <section class="service">
      <h1> Our Services</h1>
      <p>We offfer complete healthcare to individuals with various health concers.</p>
      <div class="col1">
        <span>Cardiology</span>
        <p class="hide">Learn more 🡢</p>
      </div>
      <div class="col2">
        <span>CT & X-Ray</span>
        <p class="hide">Learn more 🡢</p>
      </div>
      <div class="col3">
        <i class="fa-thin fa-tooth"></i>
        <span>Dentistry</span>
        <p class="hide">Learn more 🡢</p>
      </div>
      <div class="col4">
        <span>Neorological <br>Treatment</span>
        <p class="hide">Learn more 🡢</p>
      </div>

    </section>




    <section class="mmp">
      <h1>Meet Medicus Physicians</h1>
      <p>If you want to find a doctor, we can assist you in choosing from our diverse pool of health specialists.</p>

      <div class="col2">
        <img src="./Uploads/doctor.jpg" alt="">
        <span class="docname">Dr. Nick Sims</span>
        <br>
        <span class="doctitle">Cardiologist</span>
      </div>

      <div class="col2">
        <img src="./Uploads/doctor.jpg" alt="">
        <span class="docname">dr. Amy Adams</span>
        <br>
        <span class="doctitle">Dentist</span>
      </div>

      <div class="col2">
        <img src="./Uploads/doctor.jpg" alt="">
        <span class="docname">Dr. Max Turner</span>
        <br>
        <span class="doctitle">CT & X-Ray</span>
      </div>

      <div class="col2">
        <img src="./Uploads/doctor.jpg" alt="">
        <span class="docname">Dr. Julia Jameson</span>
        <br>
        <span class="doctitle">Neorologist</span>
      </div>

    </section>


    <section class="tstmnls">

      <h1>Testimonials</h1>

      <div class="col1">
        <p class="quote">“I just can't say enough good things about the Medical Clinic. I am so happy to be a patient there. It saved my life.”</p>
        <img src="./Uploads/6245855eae9d07.11060690.jpg" alt="" style="object-fit: cover;">
        <div class="qinfo">
          <p class="qname">Paul Peterson</p>
          <br>
          <p class="tmtitle">Patient</p>
        </div>
      </div>


      <div class="col2">
        <p class="quote">“I feel like the team really cares about my personal health and feels invested in my well-being into the future.”</p>
        <img src="./Uploads/6245855eae9d07.11060690.jpg" alt="" style="object-fit: cover;">
        <div class="qinfo">
          <p class="qname">Lori Williams</p>
          <br>
          <p class="tmtitle">Patient</p>
        </div>
      </div>
    </section>




    <section class="newsletter">

      <h2> Subscribe to Newsletter</h2>

      <p>Stay up to date with our latest news, updates and speical offers. </p>
      <div class="nlinput">
        <input type="email" placeholder="Enter your email address">
        <button>Send Now</button>
      </div>

    </section>





    <footer>

      <div>

        <p style="color: #1480EC;">me</p>
        <p style="color: #043C75;">dic</p>
      </div>

      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">Contact</a></li>
      </ul>

      <span>© 2022. Medic. All Rights Reserved.</span>

    </footer>




  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>