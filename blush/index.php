<?php
$servername="localhost";
$username="root";
$password="";
$dbname="booking";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
  die("connect fail");
}
if (isset($_POST['booking_form'])) {

$full_name=$_POST['full_name'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$time=$_POST['time'];
$service=$_POST['service'];
$message=$_POST['message'];

$sql="INSERT INTO `book` ( `full_name`, `email`, `dob`,'time', `service`, `message`) VALUES ( '$full_name', '$email', '$dob','$time' '$service', '$message')";

if($conn->query($sql)==true)
{
  echo "new record added";
}
else
{
  echo "Error";
}}


if (isset($_POST['contact_form'])) {
$first_name=$_POST['name'];
$last_name=$_POST['last_name'];
$address=$_POST['address'];
$subject=$_POST['subject'];


$sql="INSERT INTO `contact` ( `first_name`, `last_name`, `address`, `subject`) VALUES ( '$first_name', '$last_name', '$address', '$subject')";

if($conn->query($sql)==true)
{
  echo "new record added";
}
else
{
  echo "Error";
}}
$conn->close();
?>





<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saloon Apointment system</title>
  <link rel="stylesheet" href="css/saloon.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="home" data-bs-spy="scroll" data-bs-target="navbar">

  <nav class="navbar navbar-expand-lg  bg-dark fixed-top bg-black">
    <a class="navbar-brand text-white" href="#"><I>BLUSH</I></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav ml-auto" id="navbarNav">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#home">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#about">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#service">Service</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#review">Review</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="#gallary">Gallary</a>
        </li>
      </ul>

    </div>
  </nav>

  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="display-3 text-white"><b>Let your do the talking.</b></h1>
          <p class="text-white">lorem ipsum dolor sit amet,consecteture adipisicing elit.soluta veritis in tenetur doloremque,moiores</p>
          <a href="#" class="btn btn-brand"></a>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookingmodel">Book Now</button>

        </div>

      </div>

    </div>

  </section>
  <section id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img src="img/about.png.jpg">

        </div>
        <div class="col-lg-4 offset-lg-1">
          <h6>About us</h6>
          <h1>About Blush saloon</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem quasi sunt quo suscipit laboriosam qui,
            recusandae maiores odio, maxime quibusdam reprehenderit.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ut illum, inventore quisquam libero quod
            assumenda.</p>



        </div>
      </div>
    </div>
  </section>
  <section id="service">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 intro">
          <h6>About</h6>
          <h1>What we provide?</h1>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus reprehenderit esse corrupti labore, in
            accusamus necessitatibus quaerat illo illum consectetur placeat repellendus quasi exercitationem itaque sed
            ipsa nemo ea vitae deleniti. Dolor repudiandae voluptas omnis?</p>
        </div>

      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service">
            <img src="img/sevice1.jpg">
            <div class="content">

              <h3 class="h5">Service title</h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service">
            <img src="img/sevice2.jpg">
            <div class="content">

              <h3 class="h5">Service title</h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service">
            <img src="img/sevice3.jpg">
            <div class="content">

              <h3 class="h5">Service title</h3>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section id="contact">
    <div class="container">
      <div style="text-align:center">
        <h2>Contact Us</h2>
        <p>Swing by for a saloon, or leave us a message:</p>
      </div>
      
      <div class="row">
        <div class="column">
          <img src="img/contact.jpg" style="width:100%">
        </div>
        <div class="column">
        <form method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="name" placeholder="Your name.." required>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="last_name" placeholder="Your last name.." required>
            <label for="Address">Address</label>
              <input type="text" id="address" name="address" placeholder="Your address.." ></input>
            <label for="subject">subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
            <button type="submit" name="contact_form" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
  

  </section>
  
<section id="review">
  <div class="container">
    <div class="row">
      <div class="col-12 intro text-center">
        <h6>Reviews</h6>
        <h1>Listen to our customers</h1>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
          alteration in some form, by injected humour, or randomised words which</p>
        
      </div>
    </div>
    <div class="row  gy-4">
      <div class="col-lg-4 col-md-6 card">
        <div class="review">
          <div class="d-flex">
            <img src="img/review1.jpg" alt="">
          </div>
          <div class="ms-3 ">
          <h5>Wade Warren</h5>
          <small>@WadeWarren</small>
        </div>
        <div class="icon"><i class="fa fa-twitter"></i></div>
      </div>
      <p>Many of life's failurs are people who did not realize how close they were to sucess when they gave up.</p>
    </div>
    <div class="col-lg-4 col-md-6 card">
      <div class="review">
        <div class="d-flex">
          <img src="img/review2.jpg" alt="">
        </div>
        <div class="ms-3 ">
        <h5>Wade Warren</h5>
        <small>@WadeWarren</small>
      </div>
      <div class="icon"><i class="fa fa-twitter"></i></div>
    </div>
    <p>Many of life's failurs are people who did not realize how close they were to sucess when they gave up.</p>
  </div> <div class="col-lg-4 col-md-6 card">
    <div class="review">
      <div class="d-flex">
        <img src="img/review3.jpg" alt="">
      </div>
      <div class="ms-3 ">
      <h5>Wade Warren</h5>
      <small>@WadeWarren</small>
    </div>
    <div class="icon"><i class="fa fa-twitter"></i></div>
  </div>
  <p>Many of life's failurs are people who did not realize how close they were to sucess when they gave up.</p>
</div> <div class="col-lg-4 col-md-6 card">
  <div class="review">
    <div class="d-flex">
      <img src="img/review4.jpg" alt="">
    </div>
    <div class="ms-3 ">
    <h5>Wade Warren</h5>
    <small>@WadeWarren</small>
  </div>
  <div class="icon"><i class="fa fa-twitter"></i></div>
</div>
<p>Many of life's failurs are people who did not realize how close they were to sucess when they gave up.</p>
</div> <div class="col-lg-4 col-md-6 card">
  <div class="review">
    <div class="d-flex">
      <img src="img/review5.jpg" alt="">
    </div>
    <div class="ms-3 ">
    <h5>Wade Warren</h5>
    <small>@WadeWarren</small>
  </div>
  <div class="icon"><i class="fa fa-twitter"></i></div>
</div>
<p>Many of life's failurs are people who did not realize how close they were to sucess when they gave up.</p>
</div> <div class="col-lg-4 col-md-6 card">
  <div class="review">
    <div class="d-flex">
      <img src="img/review6.jpg" alt="">
    </div>
    <div class="ms-3 ">
    <h5>Wade Warren</h5>
    <small>@WadeWarren</small>
  </div>
  <div class="icon"><i class="fa fa-twitter"></i></div>
</div>
<p>Many of life's failurs are people who did not realize how close they were to sucess when they gave up.</p>
</div>
  </div>
  </div>
  

</section>
 
 
<section id="gallary">
  <div class="container">
    <div class="row">
      <div class="col-12 intro text-center">
        <h6>Gallary</h6>
        
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
alteration in some form, by injected humour, or randomised words which</p>
        
      </div>
    </div>
 <div class="row">
  <div class="col-lg-4 col-md-6">
    <article class="blog-post">
      <img src="img/galary1.jpg" alt="">
      <h3 class="h5">2026 men's hair trends everywhere</h3>
      <p>but the majority have suffered alterration in some form,by injected humour, or randomised words which</p>


    </article>
  </div>
  <div class="col-lg-4 col-md-6">
    <article class="blog-post">
      <img src="img/galary2.jpg" alt="">
      <h3 class="h5">2026 men's hair trends everywhere</h3>
      <p>but the majority have suffered alterration in some form,by injected humour, or randomised words which</p>


    </article>
  </div>
  <div class="col-lg-4 col-md-6">
    <article class="blog-post">
      <img src="img/galary3.jpg" alt="">
      <h3 class="h5">2026 men's hair trends everywhere</h3>
      <p>but the majority have suffered alterration in some form,by injected humour, or randomised words which</p>


    </article>
  </div>
  <div class="col-lg-4 col-md-6">
    <article class="blog-post">
      <img src="img/galary4.jpg" alt="">
      <h3 class="h5">2026 men's hair trends everywhere</h3>
      <p>but the majority have suffered alterration in some form,by injected humour, or randomised words which</p>


    </article>
  </div>
  <div class="col-lg-4 col-md-6">
    <article class="blog-post">
      <img src="img/galary5.jpg" alt="">
      <h3 class="h5">2026 men's hair trends everywhere</h3>
      <p>but the majority have suffered alterration in some form,by injected humour, or randomised words which</p>

    </article>
  </div>
  <div class="col-lg-4 col-md-6">
    <article class="blog-post">
      <img src="img/galary6.jpg" alt="">
      <h3 class="h5">2026 men's hair trends everywhere</h3>
      <p>but the majority have suffered alterration in some form,by injected humour, or randomised words which</p>


    </article>
  </div>
 </div>
</section>

<footer>
  <div class="footer-top">
    <div class="container">
     <div class="row">
      <div class="col-lg-4">
        <h3>Blush</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, accusantium repellat? Sed, nobis? Eos facere, harum facilis doloremque provident quam tempora veniam totam? Assumenda?</p>
        <div class="social-links">
          <a href="#>"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa  fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-google"></i></a>
        </div>
      </div>
      <div class="col-lg-4">
        <h4>Working hours</h4>
        <div>
          <h6>Monday - satuday
          </h6>
          <p>09:am 09:pm</p>
        </div>
        <div>
          <h6>Sunday
          </h6>
          <p>we're colsed</p>
        </div>
      </div>
      <div class="col-lg-4">
        <h4>Contact</h4>
        
          
          <p>
            <i class="ri-map-pin-2-fill"></i>
            <span>2464 Royal Ln. Mesa, New Jersey 4563</span>
          </p>
          <p>
            <i class="ri-mail-fill"></i>
            <span>eample454@gmail.com</span>
          </p>

          <p>
            <i class="ri-phone-fill"></i>
            <span>(907) 555-0101</span>
          </p>
        </div>
     </div>
        
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-auto">
            <p>copright @blush. All Rights ewserved</p>
          </div>
          <div class="col-auto">
            <p>Design by Mamtaj Alam</p>
          </div>
        </div>
      </div>
    </div>
 
</footer>
<div class="modal" tabindex="-1" role="dialog" id="bookingmodel">
  <div class="modal-dialog" role="document">
    <form method="post">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Book Now</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 , mx-auto">
               
                  <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maxime reprehenderit atque, ducimus inventore quis reiciendis, dolor porro cupiditate perferendis odit accusantium tenetur ipsa maiores quidem commodi aperiam!</p>
        
                  </div>
                  <div class="form-group col-12">
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                  </div>
                  <div class="form-group col-12">
                    <input type="email" class="form-control"  name="email" placeholder="Email Address" required>
                  </div>
                  <div class="form-group col-12">
                    <input type="date" class="form-control" name="dob" placeholder="SELECT DATE" required>
                  </div>
                  <div class="form-group col-12">
                  <input type="time" class="form-control" name="time" placeholder="Appointment Time" require>
                  </div>
                  <div class="form-group col-12">
                    <select class="form-select form-control"  name="service" id="Service" aria-label="Select Service" required>
                      <option selected>Select service</option>
                      <option value="1">Hair Cut</option>
                      <option value="2">Shaving</option>
                      <option value="3">Hair color</option>
                      <option value="4">Massage And Facial</option>
                  </select>
                  </div>
                  <div class="form-group col-12">
                    <textarea class="form-control" name="message" id="" cols="30" rows="5" placeholder="Message" required></textarea>
                  </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">

              <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
              <button type="submit" name="booking_form" class="btn btn-primary">Submit</button>
          </div>
        
      </div>
</form>
  </div>
</div>



</body>
</html>