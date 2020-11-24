<?php
include('includes/_config.php');

$page_title = "Gallery"

?>

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php include("includes/head.php")?>

<body>

<!-- header -->
<?php include("includes/header.php")?>

<div class="ourteam" id="ourteam">
		<h1 class="title"><?php echo $page_title; ?></h1>
		<div class="ourteam_wrapper">
			<div class="team-1 team">
				<div class="team_member">
					<img src="./assets/images/wenger.jpg" alt="Team_Image">
				</div>
				<div class="team_member">
					<img src="./assets/images/edu.jpg" alt="Team_Image">
				</div>
				<div class="team_member">
					<img src="./assets/images/arteta.jpg" alt="Team_Image">
				</div>
			</div>
			<div class="team-2 team">
				<div class="team_member">
					<img src="./assets/images/igwe.jpg" alt="Team_Image">
				</div>
				<div class="team_member">
					<img src="./assets/images/poldi.jpg" alt="Team_Image">
				</div>
				<div class="team_member">
					<img src="./assets/images/m10.jpg" alt="Team_Image">
				</div>
			</div>
		</div>
	</div>


    <!-- footer -->
	<?php include("includes/footer.php")?>




    </body>
    </html>