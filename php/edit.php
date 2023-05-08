<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
		integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="icon" href="ss.ico">
	<link rel="stylesheet" type="text/css" href="css/phpStyle.css">
	<title>Adi Levi - Edit Product</title>
	<!-- Fonts -->
	<link href="https://fonts.cdnfonts.com/css/amarillo-usaf" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
</head>

<body>
	<section id="wrapper">
		<section id="container">
			<section class="holder">
				<?php
				$nm = $_GET["fullName"];
				$pos = $_GET["position"];
				$clr = $_GET["color"];
				if ($clr == "BT") {
					echo '
					<h1> <b>Hello ' . $pos . ' ' . $nm . ' </b></h1>
					<section class="dominaor">
					<div class="camera-x">
						<div class="camera -y">
							<div class="camera -z">
								<div class="dominator">
									<div class="body"></div>
									<div class="under">
										<div class="inner"></div>
										<div class="sensor"></div>
										<div class="forend"></div>
									</div>
									<div class="grip">
										<div class="trigger"></div>
										<div class="panel -left"></div>
									</div>
									<div class="barrel"></div>
									<div class="slide"></div>
								</div>
							</div>
						</div>
					</div>
					</section>
					<p>Good news!<br>A drone is on his way with your new dominator!
					<br>Thank you for using our site.<br>We hope we will see you again.</p>
					</section>
					<div class="temp">
					<object data="tamplate.svg"></object>
				</div>
					';
				} else {

					echo '
					<div class="temp">
					<object data="tamplate.svg"></object>
				</div>
				<section>
					<h1><b> Hello ' . $pos . ' ' . $nm . ', </b></h1>
					<p>this type of dominator isnt available at the moment.</p>
					<p>please try again next time.</p>
					</section>';
				}
				echo '';
				?>
			</section>
		</section>
	</section>
</body>

</html>