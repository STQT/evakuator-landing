<?php
  if(isset($_POST['submitButton'])){
  $apiToken = "711240181:AasdfsadfAGV9";
  $tel = $_POST['tel'];
  $name = $_POST['name'];
  $data = [
    'chat_id' => '-1001526638600', 
    'text' => $name . "\n" . $tel
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
  }    
?>





<!DOCTYPE html>
<html lang="ru">
<head>
<title>Кузовные работы в Алмате</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>
<body>


<!-- Slider -->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-12">
								<h2 style="text-align:center;">Ваша заявка принята!
								
								<?php
                                    if ($tel){
                                        // Inline success
                                        echo $name . $tel;
                                        // or
                                        // Include success
                                        // include("success.php");
                                        // or
                                        // redirect to success
                                        // echo "<meta http-equiv=\"refresh\" content=\"0;URL='success.php'\" />";  
                                    }
                                    
                                ?>
								<br/> Мы свяжемся с Вами в ближайшее время</h2>
								<!--h4 style="text-align:center;">Скачай мобильное приложение <span class="red">CTO<span style="text-transform: lowercase;" class="inner-red">gram</span></span></h4-->
								<div class="w3ls-button">
									<p style="color: white;font-size: 16px;"></p>
								</div>
								<!--div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-ship" aria-hidden="true"></i>
										<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
										<p>lorem ipsum dolor sit amet consectetur adipiscing</p>
									</div>
									<div class="clearfix"></div>
								</div-->
							</div>
							<!--div class="col-md-12">
								<div class="banner-form-agileinfo">
									<h5 style="text-align:center;">Для скачивание приложение отсканируйте QR- код</h5>
									<p style="text-align:center;"><img style="width:250px;" src="images/qr.jpg"></p>
									<Button type="submit" class="hvr-shutter-in-vertical" style="margin:25px auto;padding: 12px 15px;font-size: 15px;color: #fff;letter-spacing: 1px;text-transform: uppercase;
    border: none;
    background: #ff0000;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
	display:block; "> <a style="color:white;"  href="http://onelink.to/ctogram">Скачать приложение</a></button>
								</div>
							</div-->							
						</div>
					</div>
					</div>
				</div>
			</li>	
		</ul>
	</div>
	<div class="clearfix"></div>
</div>


<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

</body>
</html>
