<?php
include('includes/_config.php');

$page_title = "Contact Us"

?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include("includes/head.php")?>

<body>

<!-- header -->
<?php include("includes/header.php")?>

<div class="contactus" id="contactus">
		<h1 class="title"><?php echo $page_title; ?></h1>
		<div class="form_wrapper">
			<div class="form_input">
				<input type="text" placeholder="Email">
			</div>
			<div class="form_input">
				<input type="text" placeholder="Subject">
			</div>
			<div class="form_input">
				<textarea placeholder="Message"></textarea>
			</div>
			<div class="btn">
				<a href="#">Submit</a>
			</div>
		</div>
	</div>

    <!-- footer -->
	<?php include("includes/footer.php")?>


    </body>
    </html>