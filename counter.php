<html lang="en">

<head>
  <!-- Required meta tags -->
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style type="text/css">
 	/*/ start count stats /*/
section#counter-stats {
	display: flex;
	justify-content: center;
}
.stats {
  text-align: center;
  font-size: 35px;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;
}
.stats img {
    width: 100%;
    float: left;
    max-width: 60px;
}
 </style>
</head>

<body>

<!-- start count stats -->

<section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 stats">
				<div>
				<img src="images/happy.png">
				</div>
				<div class="counting" data-count="455">45+</div>
				<h5>Happy Clients</h5>
			</div>

			<div class="col-lg-3 stats">
				<img src="images/award.png">
				<div class="counting" data-count="50">50+</div>
				<h5>Awards Winning</h5>
			</div>

			<div class="col-lg-3 stats">
				<img src="images/exp.png">
				<div class="counting" data-count="10">10+</div>
				<h5>Years of Experiense</h5>
			</div>

			<div class="col-lg-3 stats">
		    <img src="images/spe.png">
				<div class="counting" data-count="6">6+</div>
				<h5>Perfect Specialists</h5>
			</div>


		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

</section>

<!-- end cont stats -->
</body>
<script type="text/javascript">
	// number count for stats, using jQuery animate

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});
</script>
</html>
