<?php
include('includes/_config.php');

$page_title = "Services"

?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include("includes/head.php")?>

<body>

<!-- header -->
<?php include("includes/header.php")?>

<div class="services" id="services">
		<h1 class="title"><?php echo $page_title; ?></h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ipsum neque, nobis ratione vitae eum quibusdam quidem culpa dolorum autem sequi. Rem at beatae debitis.</p>

		<div class="diff_services">
			<div class="diff_service_item">
				<img src="./assets/images/arimg3.jpg" alt="Service_image">
				<h3>Statdiums</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis.</p>
			</div>
			<div class="diff_service_item">
				<img src="./assets/images/arimg1.jpg" alt="Service_image">
				<h3>Trophy</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis.</p>
			</div>
			<div class="diff_service_item">
				<img src="./assets/images/arimg4.jpg" alt="Service_image">
				<h3>Moments</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, blanditiis.</p>
			</div>
		</div>
	</div>

    <!-- footer -->
	<?php include("includes/footer.php")?>


    </body>
    </html>