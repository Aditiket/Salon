
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

</head>

<body style="overflow-x: hidden;">
  <!-- Navigation Menu -->
  <?php include 'header.php';?>

  <section class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/banner-1.jpg') ">
          <div class="carousel-text">
            <p>Welcome to spa</p>
            <h5>My Salon & Spa</h5>
            <div class="carousel-button">
              <span class="contact_us">Contact Us</span>
              <span class="read_more">Read More</span>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/banner-2.jpg') ">
          <div class="carousel-text">
            <p>Welcome to spa</p>
            <h5>Beauty & Harmony</h5>
            <div class="carousel-button">
              <span class="contact_us">Contact Us</span>
              <span class="read_more">Read More</span>
            </div>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('images/banner-3.jpg') ">
          <div class="carousel-text">
            <p>Welcome to spa</p>
            <h5>My Salon </h5>
            <div class="carousel-button">
              <span class="contact_us">Contact Us</span>
              <span class="read_more">Read More</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--   beautypress_expirence section  -->
  <section class="row_padding" id="beautypress_expirence">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 expirence">
          <h2 class="beautypress-sub-heading" style="font-weight: 800;" data-text="20+">20+ Years of experience</h2>
          <span class="beautypress-separetor"></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin neque a enim dapibus accumsan.
          </p>
          <span class="appointment">Appointment Now</span>
        </div>
        <div class="col-sm-6 expirence">
          <div class="row">
            <div class="col-sm-6 about_img1 beautypress_img"><img src="images/about-new-img-1.png" alt="Paris"></div>
            <div class="col-sm-6 about_img2 beautypress_img"><img src="images/about-new-img-2.png" alt="Paris"></div>
            <div class="col-sm-6 about_img3 beautypress_img"><img src="images/about-new-img-3.png" alt="Paris"></div>
            <div class="col-sm-6 about_img4 beautypress_img"><img src="images/about-new-img-4.png" alt="Paris"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our_philosopy Section -->
   <section class="row_padding" id="our_philosopy">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="images/phy.png" alt="Paris">
        </div>
        <div class="col-sm-6 philosopy">
          <h2>Our Philosophy</h2>
          <h4>Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam.</h4>
          <p>Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti ex nec
            te sit tale atqui abhorreant luptatum conclusionemque cum quo et wisi ignota semper.</p>
          <div class="row">
            <div class="col-sm-6 list">
              <i class="fa fa-check"></i><span>Te est consul graeco.</span>
              <i class="fa fa-check"></i><span>At inermis praesent usu.</span>
              <i class="fa fa-check"></i><span>Movet oblique probatus.</span>
            </div>
            <div class="col-sm-6 list">
             <i class="fa fa-check"></i><span>Te est consul graeco.</span>
              <i class="fa fa-check"></i><span>At inermis praesent usu.</span>
              <i class="fa fa-check"></i><span>Movet oblique probatus.</span>
            </div>
            <span class="appointment">Appointment Now</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Gallary section -->
  <section class="row_padding" id="latest_news">
    <div class="container">
      <div class="row">
        <h2>Latest News</h2>
        <div class="col-sm-4">
          <img src="images/latest_news1.jpg">
          <h4>Ne Tibique Constituto Eam</h4>
          <span class="post_date">9 Apr, 2019</span>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-4">
          <img src="images/latest_news2.jpg">
          <h4>Sit ea Commodo Delenit</h4>
          <span class="post_date">20 Apr, 2019</span>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
        <div class="col-sm-4">
          <img src="images/latest_news3.jpg">
          <h4>Et Atqui Deleniti Copiosae</h4>
          <span class="post_date">12 May, 2019</span>
          <p>If you run a blog, magazine or portfolio website, then a Pinterest style design, which is a grid type, is a
            great...</p>
        </div>
      </div>
    </div>
  </section> 
  <!-- Services -->
   <section class="row_padding" id="services">
    <div class="container">
      <div class="row" id="Description_row">
        <h2> Our Services</h2>
        <p>Mea ei paulo debitis affert nominati usu eu, et ius nec te sit tale atqui abhorreant luptatum conclusionemque
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
  <!-- Book Apointment -->
 <section class="row_padding" id="book_apponiment">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 form_booking">
          <h2>Make an Appointment</h2>
          <p>Mea ei paulo debitis affert nominati usu eu, et ius dicta detraxit probatus facete nusquam deleniti.</p>
          <div class="booking_form">
            <form class="form" action="appointment_db.php" method="POST" id="appointment_form">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First name" name="first_name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last name" name="last_name">
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <select id="select_down" name="services_list">
                    <option value="Procedure">Procedure</option>
                    <option value="Facials">Facials</option>
                    <option value="Body Treatments">Body Treatments</option>
                    <option value="Waxing">Waxing</option>
                    <option value="Massage">Massage</option>
                    <option value="Finishing">Finishing Touches</option>
                    <option value="Hands & Feet">Hands & Feet</option>
                    <option value="Aroma Therapy">Aroma Therapy</option>
                    <option value="Tea Therapy">Tea Therapy</option>
                  </select>
                </div>
                <div class='input-group date col' id='datetimepicker1'>
                  <input type='text' class="form-control" id="datepicker" name="date" placeholder="Y-M-D" />
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
        <div class="col-sm-6 booking_time">
          <h3>Opening Hours</h3>
          <p>Where nature meets bliss</p>
          <div class="day_time">
            <div>
              <span class="day">Monday to Friday:</span>
            </div>
            <div>
              <span class="time">09:00 am – 08:00 pm</span>
            </div>
          </div>
          <div class="day_time">
            <div>
              <span class="day">Saturday:</span>
            </div>
            <div>
              <span class="time">09:00 am – 03:00 pm</span>
            </div>
          </div>
          <div class="day_time">
            <div>
              <span class="day">Sunday:</span>
            </div>
            <div>
              <span class="time">09:00 am – 08:00 pm</span>
            </div>
          </div>
          <p class="discounts">Check out seasonal discounts for registered users.</p>
        </div>
      </div>
    </div>
    </div>
  </section> 
  <!-- Pricing Section -->
  <section class="row_padding" id="pricing">
    <div class="container">
      <div class="row">
        <h3>We are awesome</h3>
        <h2>Pricing Plan</h2>
        <div class="col-sm-4">
          <div class="card">
            <div class="card_img card_img1">
              <img src="images/pricing-1.jpg" class="card-img-top" alt="...">
            </div>
            <div class="prices">
              <div class="treatment">
                <p>Hair Cut</p>
              </div>
              <div class="price">
                <p>Starting From</p>
                <p>₹ 100</p>
              </div>
            </div>
            <div class="card-body">
              <div class="day_time">
                <div>
                  <span class="day">Teen's haircut</span>
                  <span class="time">100</span>
                </div>
                <div>
                  <span class="day">Men's haircut</span>
                  <span class="time">120</span>
                </div>
                <div>
                  <span class="day">Children's haircut</span>
                  <span class="time">150</span>
                </div>
                <div>
                  <span class="day">Women's haircut</span>
                  <span class="time">120</span>
                </div>
              </div> 
              <div class="btn_price">
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" ">
            <div class="card_img card_img2">
              <img src="images/pricing-2.jpg" class="card-img-top" alt="...">
            </div>
            <div class="prices">
              <div class="treatment">
                <p>Makeup</p>
              </div>
              <div class="price">
                <p>Starting From</p>
                <p>₹ 300</p>
              </div>
            </div>
            <div class="card-body">
              <div class="day_time">
                <div>
                  <span class="day">Teen's haircut</span>
                  <span class="time">100</span>
                </div>
                <div>
                  <span class="day">Men's haircut</span>
                  <span class="time">120</span>
                </div>
                <div>
                  <span class="day">Children's haircut</span>
                  <span class="time">150</span>
                </div>
                <div>
                  <span class="day">Women's haircut</span>
                  <span class="time">120</span>
                </div>
              </div>
              <div class="btn_price">
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card_img card_img3">
              <img src="images/pricing-3.jpg" class="card-img-top" alt="...">
            </div>
            <div class="prices">
              <div class="treatment">
                <p>Hair Color</p>
              </div>
              <div class="price">
                <p>Starting From</p>
                <p>₹ 500</p>
              </div>
            </div>
            <div class="card-body">
              <div class="day_time">
                <div>
                  <span class="day">Teen's haircut</span>
                  <span class="time">100</span>
                </div>
                <div>
                  <span class="day">Men's haircut</span>
                  <span class="time">120</span>
                </div>
                <div>
                  <span class="day">Children's haircut</span>
                  <span class="time">150</span>
                </div>
                <div>
                  <span class="day">Women's haircut</span>
                  <span class="time">120</span>
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
  <!-- Gallary Section -->
   <section class="gallary row_padding">
    <div class=" img_gallary">
      <div class="row">
        <h2 class="gallary_title">Our Gallery</h2>
        <div class="col-sm-4 box">
        <div class="imgbx">
          <img src="images/imgbx1.jpg" class="card-img-top" alt="...">
        </div>
        <div class="contentbx">
          <h2>Waxing</h2>
          <p>No erant timeam eam, debet antiopam consequat mea ei. Quot omittam insolens pri no. Maluisset...</p>
        </div>
        </div>
        <div class="col-sm-4 box1">
          <div class="imgbx">
            <img src="images/imagbx.jpg" class="card-img-top" alt="...">
          </div>
          <div class="contentbx">
            <h2>Aroma Theraphy</h2>
            <p>No erant timeam eam, debet antiopam consequat mea ei. Quot omittam insolens pri no. Maluisset...</p>
          </div>
          </div>
          <div class="col-sm-4 box2">
            <div class="imgbx">
              <img src="images/imgbx.jpg" class="card-img-top" alt="...">
            </div>
            <div class="contentbx">
              <h2>Manual Massage</h2>
              <p>No erant timeam eam, debet antiopam consequat mea ei. Quot omittam insolens pri no. Maluisset...</p>
            </div>
            </div>
          
      </div>
      </div>
  </section> 
<!-- Testimonial -->


  <section class=" row_padding testimonial">
    
  <div class="container">
    <h2>What Others Say About Us</h2>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen. </p> 
                    <img src="images/client.jpg">
                    <div id="image-caption">Nick Doe</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> 
                    <img src="images/client1.jpg" class="img-fluid">
                    <div id="image-caption">Cromption Greves</div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> 
                    <img src="images/client.2jpg.jpg" class="img-fluid">
                    <div id="image-caption">Harry Mon</div>
                </div>
            </div>
        </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fa fa-arrow-left'></i> </a>
         <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fa fa-arrow-right'></i> </a>
    </div>
</div>
</section>
<!-- partners --> 
<section class="row_padding" id="partners">
  <div class="container">
    <div class="row">
    <div class="col-sm-2">
      <img src="images/brand1.png">
    </div>
    <div class="col-sm-2">
      <img src="images/brand2.png">
    </div>
    <div class="col-sm-2">
      <img src="images/brand3.png">
    </div>
    <div class="col-sm-2">
      <img src="images/brand4.png">
    </div>
    <div class="col-sm-2">
      <img src="images/brand5.png">
    </div>
    <div class="col-sm-2">
      <img src="images/brand6.png">
    </div>
  </div>
</div>
</section>
<!-- Footer -->

<?php include 'footer.php';?>

</body>
<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
  VanillaTilt.init(document.querySelector(".beautypress_img"), {
    max: 25,
    speed: 400
  });
  VanillaTilt.init(document.querySelector(".box"), {
    max: 25,
    speed: 400
  });
  VanillaTilt.init(document.querySelector(".box1"), {
    max: 25,
    speed: 400
  });
  VanillaTilt.init(document.querySelector(".box2"), {
    max: 25,
    speed: 400
  });
  //It also supports NodeList
  VanillaTilt.init(document.querySelectorAll(".beautypress_img"));


</script>
<script>
  
 
</script>
</html>
