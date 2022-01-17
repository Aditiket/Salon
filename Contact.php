<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>Beauty Salon</title>
  <style type="text/css">
  .contact_page nav {
    top: -22px;
  }
</style>
</head>

<body class="contact_page" style="overflow-x: hidden;">
  <!-- Navigation Menu -->
  <?php include 'header.php';?>
  <section class="map pt-5">
    <div style="width: 100%; margin-top: 50px;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="400" frameborder="0" style="border:0"></iframe>
   </div>
 </section>
 <section class="row_padding" id="book_apponiment">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 form_booking">
        <h2 class="pl-4">Get in Touch</h2>
        <p class="pl-4">Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti.</p>
        <div class="booking_form" id="contact_form">
          <h5>Make an Appointment</h5>
          <form class="form" action="contact_db.php" method="POST" id="appointment_form">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Name" name="name">
              </div>
              <div class="col">
                <input type="phone" class="form-control" placeholder="Phone" name="phone">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type='Email' class="form-control"  name="email" placeholder="Email">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <textarea class="form-control" name="meassage" id="exampleFormControlTextarea1" rows="5"
                placeholder="Message"></textarea>
              </div>
              <div>
                  <input type="submit" name="submit" value="Book Now" class="book_now" id="book_now" >
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-6 contact_address">
        <h3 class="info_contact">Contact Info</h3>
        <div class="text-editor">
         <p><span style="font-weight: 500; color: #541f5c;" class="gt3_font-weight"><i class="fa fa-phone" aria-hidden="true"></i>
         Phone:</span><br>8 800 563 423</p>
         <p><span style="font-weight: 500; color: #541f5c;" class="gt3_font-weight"><i class="fa fa-map-marker" aria-hidden="true"></i>
         Address:</span><br>121 Waldeck Street, NY, USA</p>
         <p><span style="font-weight: 500; color: #541f5c;" class="gt3_font-weight"><i class="fa fa-envelope" aria-hidden="true"></i>
         Email:</span><br>email@example.com</p>
         <p><span style="font-weight: 500; color: #541f5c;" class="gt3_font-weight"><i class="fa fa-clock-o" aria-hidden="true"></i>
         Opening hours:&nbsp;</span><br>Monday to Friday: 09:00 am – 08:00 pm<br>Saturday to Sunday: 09:00 am – 06:00 pm</p> 
       </div>
     </div>
   </div>
 </div>
</section> 

<!-- FOoter  -->

<?php include 'footer.php';?>
</body>
</html>