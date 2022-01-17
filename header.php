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
 .toggel_menu{
  float: right;
  line-height: 60px;
  font-size: : 30px;
  cursor: pointer;
  display: none;
}
@media(max-width:768px) {
  header{
    padding: 0px 20px;
  }
  .toggel_menu{
    display: block;
  }
  .nav-link{
    position: absolute;
    width: 100%;
    top: 85px;
    z-index: 1;
    right: 0px;
    left: 0px;
   display: none;
    background: #541f5c;
    padding: 20px 40px;
    box-sizing: border-box;
    transition: 0.5s;
    color: #fff;
  }
  nav .logo{
    margin-left: 0px;
  }
  nav .nav-link ul li {

     display: block;
    text-align: center;
  }

  nav .nav-link ul li a{
    border-bottom: 1px solid white;
    color: #fff;
  }
  .nav-link.active{
    display: block !important;
  }
  .fa-times{
   font-family: 'FontAwesome';
  
  }
  .fa-bars{
     font-size:30px;
  }
  .fa-remove:before, .fa-close:before, .fa-times:before {
    content: "\f00d";
      font-size:30px;
    padding-right: 12px;
}
}
@media(max-width:768px) {
  .nav-link{
   display: none !important;
}
}

</style>
</head>

<body>
<section class="header">
   <header>
    <nav>
      <a href="index.html" class="logo"><img src="images/logo-new.png" style="height: 66px;"></a>
      <div class="nav-link topnav " id="myTopnav">
        <ul>
          <li><a href="/Beuty/index.php">Home</a></li>
          <li><a href="/Beuty/About us.php">About Us</a></li>
          <li><a href="/Beuty/Services.php">Services</a></li>
          <li><a href="/Beuty/Contact.php">Contact Us</a></li>
        </ul>
      </div>
       <div class="toggel_menu"><i class="fa fa-bars"></i></div>
    </nav>
   
    </header>
  </section>
  <script>
    jQuery(document).ready(function(){ 
    jQuery('.toggel_menu').click(function(){
     
      jQuery(this).toggleClass('fa-times');
      jQuery('.nav-link').toggleClass('active');
    });
});
</script>
</body>