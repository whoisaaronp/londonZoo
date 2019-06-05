<!-- PHP Start -->
<?php
// How it works: User can use the site as a identifier 
// to search for how many animal types that are stored on website system
// I.e. If i want to see how many tan lions' versus dark lions photos are stored I can get an 
// amount
require "database.php";
// echo "This is hooked up!!";
// echo $name;

$name = $_POST['Search'];

// Write my mySQL
$query = "SELECT * FROM animalTypes WHERE animal = '$name'";
// Pull results from database
$result_set = mysqli_query($conn, $query);
// while looks through you datebase and finds the words that match the variable
while ($animalTypes = mysqli_fetch_assoc($result_set)) {
// variables
$animal =  $animalTypes['animal'];
$teeth =  $animalTypes['teeth'];
$hair =  $animalTypes['hair'];
$diet =  $animalTypes['diet'];
$class =  $animalTypes['class'];
	
}

// city zone
$city = 'London';
mysqli_close($conn);
?>
<!-- End PHP -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>Lions, Tigers and Bears Oh May!!</title>
		<link href="css/reset.css" rel="stylesheet" type="text/css">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Gravitas+One&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,700" rel="stylesheet">
		<!--  PHP Image Array -->
		<?php 
		$photos = ['bears_small_0.jpg', 'bears_small_1.jpg','bears_small_2.jpg','leopard_small_0.jpg','leopard_small_1.jpg','leopard_small_2.jpg','lion_small_0.jpg','lion_small_1.jpg','lion_small_2.jpg','snake_small_0.jpg', 'snake_small_1.jpg','snake_small_2.jpg','frog_small_0.jpg', 'frog_small_1.jpg', 'frog_small_2.jpg','bird_small_0.jpg','bird_small_1.jpg','bird_small_2.jpg'];
		?>
	</head>
	<body>
		<!-- peach background -->
		<div class="siteWrapper">
			<div class="siteCon">
				<!-- content is here -->
				<div id="content">
							<h3> Lions, Tigers, Bears and Snakes that Bite!</h3>
							<h4 id="location">Welcome the the first ever animal library in <?php echo $city; ?> Ontario.</h4>
							<!-- l is day -->
							<!-- F is Month -->
							<!-- Y is Year -->
							<p> It's almost the weekend, today is <?php echo date("l, M/d/Y")?>!</p>
							<div class="keyline"></div>
							<div class="searchForm">
								<form method="POST" action="start.php" id="searchform">
										<input type="text" name="Search" placeholder="Find an animal picture">
										<input id="searchBut" type="submit" name="submit" value="search">
									</form>
							</div>
							<!-- print data results field styling  -->
							<div class="printData">
									<p class="dataStyle">Animal: <?php echo $animal;?></p>
									<p class="dataStyle">Teeth: <?php echo $teeth;?></p>
									<p class="dataStyle">Hair: <?php echo $hair;?></p>
									<p class="dataStyle">Diet: <?php echo $diet;?></p>
									<p class="dataStyle">Class: <?php echo $class;?></p>
							</div>
							<div class="keyline"></div>
							<section class="gallery">
								<!-- Images stored in here of 3 columns -->
								<div class="three_col">
									<?php 
										$num = count($photos);
			
										for($i=0; $i<$num; $i++){
												echo '<img class="thumbs" src="images/'.$photos[$i].'">';}
									?>
								</div>
							</section>
				</div>
			</div>
			<!-- outside gallery -->
		<div class="mainFooter">
				<section class="footer siteCon">
					<h2 class="hidden">footer</h2>
					<div class="title">
								<?php 
										echo 'This awesome gallery is done using PHP & Javascript…';
								?>
							</div>
				</section>
		</div>
		</div>
	</body>
		<script src="js/main.js"></script>
</html>
