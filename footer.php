<!doctype html>
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
      
.footer-widget p {
    margin-bottom: 27px;
}
p {
    font-family: 'Poppins';
    font-size: 16px;
  color: #541f5c;
    line-height: 28px;
}

   .animate-border {
  position: relative;
  display: block;
  width: 115px;
  height: 3px;
  background: #541f5c; }

.animate-border:after {
  position: absolute;
  content: "";
  width: 35px;
  height: 3px;
  left: 0;
  bottom: 0;
  border-left: 10px solid #fff;
  border-right: 10px solid #fff;
  -webkit-animation: animborder 2s linear infinite;
  animation: animborder 2s linear infinite; }

@-webkit-keyframes animborder {
  0% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px); }
  100% {
    -webkit-transform: translateX(113px);
    transform: translateX(113px); } }

@keyframes animborder {
  0% {
    -webkit-transform: translateX(0px);
    transform: translateX(0px); }
  100% {
    -webkit-transform: translateX(113px);
    transform: translateX(113px); } }

.animate-border.border-white:after {
  border-color: #541f5c; }

.animate-border.border-yellow:after {
  border-color: #541f5c; }

.animate-border.border-orange:after {
  border-right-color: #541f5c;
  border-left-color: #541f5c; }

.animate-border.border-ash:after {
  border-right-color: #541f5c;
  border-left-color: #541f5c; }

.animate-border.border-offwhite:after {
  border-right-color: #541f5c;
  border-left-color: #541f5c; }

/* Animated heading border */
@keyframes primary-short {
  0% {
    width: 15%; }
  50% {
    width: 90%; }
  100% {
    width: 10%; } }

@keyframes primary-long {
  0% {
    width: 80%; }
  50% {
    width: 0%; }
  100% {
    width: 80%; } } 

.dk-footer {
  padding: 120px 0 0;
  background-color: #fffcf8;
  position: relative;
  z-index: 2; 
}
  
 

.dk-footer-box-info {
  position: absolute;
  top: -100px;
  background: #fffcf8;
  padding: 30px;
  z-index: 2; 
}
  .dk-footer-box-info .footer-social-link h3 {
    color: #541f5c;
    font-size: 24px;
    margin-bottom: 25px;
     }
  .dk-footer-box-info .footer-social-link ul {
    list-style-type: none;
    padding: 0;
    margin: 0; 
}
  .dk-footer-box-info .footer-social-link li {
    display: inline-block;
     }
  .dk-footer-box-info .footer-social-link a i {
    display: block;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    background: #000;
    margin-right: 5px;
    color: #541f5c;
    border: 1PX solid #541f5c;
     }
    .dk-footer-box-info .footer-social-link a i {
      background-color: #fffcf8;
  }
  .dk-footer-box-info .footer-social-link a i:hover{
      background-color: #541f5c;
      color:#fff;
  }

.footer-awarad {
  margin-top: 285px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 100%;
  -moz-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .footer-awarad p {
    color: #541f5c;
    font-size: 24px;
    font-weight: 700;
    margin-left: 20px;
    padding-top: 15px; }

.footer-info-text {
  margin: 26px 0 32px; }



.footer-widget .section-heading {
  margin-bottom: 35px; }

.footer-widget h3 {
  font-size: 24px;
  color: #541f5c;
  position: relative;
  margin-bottom: 15px;
  max-width: -webkit-fit-content;
  max-width: -moz-fit-content;
  max-width: fit-content; }

.footer-widget ul {
  width: 50%;
  float: left;
  list-style: none;
  margin: 0;
  padding: 0; }

.footer-widget li {
  margin-bottom: 18px; }

.footer-widget p {
  margin-bottom: 27px; }

.footer-widget a {
  color: #541f5c;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  text-decoration: unset;
   }

  .footer-widget a:hover {
    color: #e98caa; 
}

.footer-widget:after {
  content: "";
  display: block;
  clear: both; }

.dk-footer-form {
  position: relative; }
  .dk-footer-form input[type=email] {
    padding: 14px 28px;
    border-radius: 50px;
    background: #fffcf8;
    border: 1px solid #2E2E2E; }
  .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::-webkit-input-placeholder {
    color: #878787;
    font-size: 14px; }
  .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::placeholder {
    color: #878787;
    font-size: 14px; }
  .dk-footer-form button[type=submit] {
    position: absolute;
    top: 0;
    right: 0;
    padding: 21px 24px 14px 17px;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    border: 1px solid #541f5c;
    background: #541f5c;
    color: #fff; }
  .dk-footer-form button:hover {
    cursor: pointer;
     }

.footer-social-link a {
    text-decoration: none !important;
}
/* ========================== Contact =============================*/
.contact-icon {
  position: absolute;
   }
  .contact-icon i {
    font-size: 36px;
    top: -5px;
    position: relative;
    color: #541f5c; 
}

.contact-info {
  margin-left: 75px;
  color: #541f5c; 
}
  .contact-info h3 {
    font-size: 20px;
    color: #541f5c;
    margin-bottom: 0; }

.copyright {
  padding: 28px 0;
  margin-top: 55px;
  background-color: #fffcf8; 
  border-top: 1px solid #541f5c;
}
  .copyright span,
  .copyright a {
    color: #541f5c;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear; 
}
.copyright .col-md-12{
    text-align: center;
}

/* Media Query */
@media screen and (max-width: 992px){
.dk-footer-box-info {
  position: relative;
  background: #fffcf8;
  z-index: 2; 
  padding: 20px 15px;
}
.col-md-12.col-lg-4 {
    height: 100%;
    min-height: 100px;
    display: block;
    max-height: 260px;
}
.dk-footer-box-info img.img-fluid{
    max-width: 50%;
    width: 100%;
}
}
@media(min-width: 992px){
  .dk-footer .contact-us {
    margin-top: 0;
    margin-bottom: 30px;
    padding-left: 80px; 
}
    .dk-footer .contact-us .contact-info {
      margin-left: 50px;
       }
    .dk-footer .contact-us.contact-us-last {
      margin-left: -80px; 
  }
    .contact-us {
  position: relative;
  z-index: 2;
  margin-top: 65px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  align-items: center; 
}
 .dk-footer .contact-icon i {
    font-size: 24px;
    top: -15px;
    position: relative;
    color:#541f5c; 
}
.footer-left-widget {
  padding-left: 80px;
}
}
  
  </style>
</head>
<body>
<footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="images/logo-new.png" class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                           Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>  
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>Kolhapur India</h3>
                                    <p>5353 Road KVJ Park</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>91 56 86 11 20</h3>
                                    <p>Give us a call</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Subscribe</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                Reference site about Lorem Ipsum, giving information on its origins, as well.</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container mt-0">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © 2021, All Right Reserved Lirena</span>
                    </div>
                </div>
            </div>
        </div>
</footer>
</body>
</html>
