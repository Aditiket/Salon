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
  <!-- Banner -->
  <section class="banner pt-5" id="services_banner_img">
    <div class="about_banner">
      <div class="banner_img">
        <div class="carousel-text">
          <h1 class="">Services</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Why we choose -->
  <section class="row_padding" id="why_we_choose">
    <div class="container">
      <div class="row">
        <h2 class="text-left mb-3">Why Choose Us</h2>
        <p class="w-75 pb-5">Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti ex nec te sit tale atqui abhorreant luptatum conclu</p>
        <div class="col-sm-4">
          <h4 class="count">01.</h4>
          <h3 class="w-50">We are Professional</h3>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
          great...</p>
        </div>
        <div class="col-sm-4">
          <h4 class="count">02.</h4>
          <h3 class="w-100">Natural & Organic Cosmetics</h3>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
          great...</p>
        </div>
        <div class="col-sm-4">
          <h4 class="count">03.</h4>
          <h3 class="w-50">Relax Atmosphere</h3>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
          great...</p>
        </div>
      </div>
    </div>
  </section> 

  <!-- We Work for You -->

  <section class="row_padding" id="We_Work_for_You">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="images/image-59.jpg" alt="Paris" class="w-100">
        </div>
        <div class="col-sm-6">
          <h2 class="text-left mb-3">We Work for You</h2>
          <h4 class="pb-2">Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam.</h4>
          <div class="tab">
          <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'Relaxation')">Relaxation</button>
          <button class="tablinks" onclick="openCity(event, 'Massages')">Massages</button>
          <button class="tablinks" onclick="openCity(event, 'Therapies')">Therapies</button>
          </div>
          <div id="Relaxation" class="tabcontent">
            <p class="mb-1">Timeam efficiantur deterruisset ne vis, ex delectus salutandi vis, te labore erroribus has. Eum in nostrud utroque nusquam. Volumus volutpat similique pri te, vix ne agam nihil intellegebat. Pri molestiae torquatos ad</p>
          </div>

          <div id="Massages" class="tabcontent">
            <p class="mb-1">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </p> 
          </div>

          <div id="Therapies" class="tabcontent">
            <p class="mb-1">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div class="row">
            <div class="col-sm-6 list pt-1">
              <i class="fa fa-check"></i><span>Te est consul graeco.</span>
              <i class="fa fa-check"></i><span>At inermis praesent usu.</span>
              <i class="fa fa-check"></i><span>Movet oblique probatus.</span>
            </div>
          </div>
          <span class="appointment"><a href="/Beuty/Contact.php">Contact Us</a></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Services -->
   <section class="row_padding" id="services">
    <div class="container">
      <div class="row" id="Description_row">
        <h2 class="mb-3"> Our Services</h2>
        <p class="">Mea ei paulo debitis affert nominati usu eu, et ius nec te sit tale atqui abhorreant luptatum conclusionemque
          cum quo et wisi ignota semper.</p>
      </div>
      <div class="row services_row_first">
        <div class="col-sm-3">
          <img src="images/facepack.png">
          <h4>Facials</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-3">
          <img src="images/body_treatment.png">
          <h4>Body Treatments</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-3">
          <img src="images/Waxing.png">
          <h4>Waxing</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-3">
          <img src="images/Massage.png">
          <h4>Massage</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
      </div>
      <div class="row services_row_first">
        <div class="col-sm-3">
          <img src="images/Finishing Touches.png">
          <h4>Finishing Touches</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-3">
          <img src="images/Hands & Feet.png">
          <h4>Hands & Feet</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-3">
          <img src="images/theropy.png">
          <h4>Tea Therapy</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-3">
          <img src="images/Aroma Therapy.png">
          <h4>Aroma Therapy</h4>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Counter -->
<?php include 'counter.php';?>

<!-- pricing -->
 <section class="row_padding" id="Services_pricing">
    <div class="container">
      <div class="row">
        <h3 class="text-center mt-5">Pricing Plans</h3>
        <p class="text-center mb-3 w-75 plan">Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti ex nec te sit tale atqui abhorreant luptatum conclu</p>
        <div class="col-sm-4">
          <div class="cardone">
            <div class="card-body">
              <div class="day_time">
                <div>
                  <p class="text-center bronze mb-1">Bronze</p>
                  <h3 class="text-center p-3 mb-0">$59/ per month</h3>
                </div>
                <div>
                  <p class="w-50 content">Mea ei paulo debitis Affert nominati dicta</p>
                </div>
              </div> 
              <div class="btn_price">
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
         <div class="col-sm-4">
          <div class="cardtwo">
            <div class="card-body">
              <div class="day_time">
                <div>
                  <p class="text-center bronze mb-1">Gold</p>
                  <h3 class="text-center p-3 mb-0">$120/ per month</h3>
                </div>
                <div>
                  <p class="w-50 content">Mea ei paulo debitis Affert nominati dicta</p>
                </div>
              </div> 
              <div class="btn_price">
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
         <div class="col-sm-4">
          <div class="cardthree">
            <div class="card-body">
              <div class="day_time">
                <div>
                  <p class="text-center bronze mb-1">Sliver</p>
                  <h3 class="text-center p-3 mb-0">$90/ per month</h3>
                </div>
                <div>
                  <p class="w-50 content">Mea ei paulo debitis Affert nominati dicta</p>
                </div>
              </div> 
              <div class="btn_price">
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- FOoter  -->

  <?php include 'footer.php';?>
</body>
<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</html>