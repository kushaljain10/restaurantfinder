<?php
$cityname = $_GET['city'] ?? 'Chennai';
?>

<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Restaurant Finder</title>
</head>
<body>
	<div class="cover">
		<center>
			<img class="logo" src="logo.png">
			<br>
			<div class="tagline">Find the best restaurants, cafes, and bars</div>
			<br>
			<form>
				<div class="city-select">
					<select onchange="location = this.value;">
						<option value="" disabled selected hidden><?php echo $cityname; ?></option>
					    <option value="index.php?city=Chennai">Chennai</option>
					    <option value="index.php?city=Mumbai">Mumbai</option>
					    <option value="index.php?city=Delhi">Delhi</option>
					    <option value="index.php?city=Bangalore">Bangalore</option>
					    <option value="index.php?city=Kolkata">Kolkata</option>
					    <option value="index.php?city=Surat">Surat</option>
					    <option value="index.php?city=Chandigarh">Chandigarh</option>
					    <option value="index.php?city=Nagpur">Nagpur</option>
					    <option value="index.php?city=Hyderabad">Hyderabad</option>
					    <option value="index.php?city=Pune">Pune</option>
					    <option value="index.php?city=Jaipur">Jaipur</option>
					</select>

					<!-- <select onchange="location = this.value;">
					    <option value="restaurant.php?site=apple">Apple Hotel</option>
					    <option value="restaurant.php?site=banana">Banana Hotel</option>
					    <option value="restaurant.php?site=carrot">Carrot Restaurant</option>
					    <option value="restaurant.php?site=carrotbeans">Carrot Beans Restaurant</option>
					    <option value="restaurant.php?site=strawberry">Strawberry Hotel</option>
					    <option value="restaurant.php?site=blueberry">Blueberry Restaurant</option>
					    <option value="restaurant.php?site=kiwi">Kiwi Hotel</option>
					    <option value="restaurant.php?site=mango">Mango Hotel</option>
					    <option value="restaurant.php?site=orange">Orange Restaurant</option>
					    <option value="restaurant.php?site=lemon">Lemon Restaurant</option>
					    <option value="restaurant.php?site=pineapple">Pineapple Restaurant</option>
					</select> -->
				</div>
			</form>
		</center>
	</div>
	<div>
		<div class="container" style="text-align: center;">
			<div class="card mb-3" style="max-width: 540px; margin: 10px; margin-left: 0px; padding: 10px; text-align: left; display: inline-block;">
				<!-- <img src="res1.jpg" height="100px">
				<span>CASUAL DINING</span>
				<span>1 BHK - BREW HOUSE KITCHEN</span> -->	
				<div class="row no-gutters" style="margin: 0px; padding: 0px; max-height: 200px;">
			    <div class="col-md-4">
			      <img src="res1.jpg" class="card-img" alt="...">
			    </div>
			    <div class="col-md-8" style="margin: 0px; padding-left: 10px;">
			      <div class="card-body" style="padding: 0px;">
			      	<p class="card-text" style="margin: 0px;">CASUAL DINING</p>
			        <p class="card-title" style="font-size: 30px; font-weight: bold; margin: 0px; line-height: 120%;">1 BHK - Brew House Kitchen</p>
			        <p class="card-text" style="font-size: 15px; font-weight: bold; margin: 0px;">Oshiwara, Andheri West</p>
			        <p class="card-text" style="font-size: 15px; margin: 0px;">Ground Floor, Opposite Mega Mall, Near Meera Tower</p>
			      </div>
			    </div>
			  </div>
			  <hr style="margin: 0px; margin-top: 10px;">
			  <div class="row no-gutters">
			  <div class="col-xs-4">
			  	<p class="card-text" style="font-size: 15px; line-height: 170%; color: rgba(0,0,0,0.6);">CUISINES:<BR>COST FOR TWO:<BR>HOURS:<BR>FEATURED IN:</p>
			  </div>
			  <div class="col-xs-8">
			  	<p class="card-text" style="font-size: 15px; line-height: 170%; margin-left: 10px;">North Indian, Italian, Parsi<BR>Rs. 800<BR>11am - 12 midnight (Monday-Sunday)<BR>Value for money</p>
			  </div>
			</div>
			<div>
				
			</div>
		</div>
		<div class="container" style="text-align: center;">
			<div class="card mb-3" style="max-width: 540px; margin: 10px; margin-left: 0px; padding: 10px; text-align: left; display: inline-block;">
				<!-- <img src="res1.jpg" height="100px">
				<span>CASUAL DINING</span>
				<span>1 BHK - BREW HOUSE KITCHEN</span> -->	
				<div class="row no-gutters" style="margin: 0px; padding: 0px; max-height: 200px;">
			    <div class="col-md-4">
			      <img src="res2.jpg" class="card-img" alt="...">
			    </div>
			    <div class="col-md-8" style="margin: 0px; padding-left: 10px;">
			      <div class="card-body" style="padding: 0px;">
			      	<p class="card-text" style="margin: 0px;">CASUAL DINING</p>
			        <p class="card-title" style="font-size: 30px; font-weight: bold; margin: 0px; line-height: 120%;"><a href="joeys.html">Joey's Pizza</a></p>
			        <p class="card-text" style="font-size: 15px; font-weight: bold; margin: 0px;">Malad West</p>
			        <p class="card-text" style="font-size: 15px; margin: 0px;">Shop 1, Plot D, Samruddhi Complex, Chincholi Bunder</p>
			      </div>
			    </div>
			  </div>
			  <hr style="margin: 0px; margin-top: 10px;">
			  <div class="row no-gutters">
			  <div class="col-xs-4">
			  	<p class="card-text" style="font-size: 15px; line-height: 170%; color: rgba(0,0,0,0.6);">CUISINES:<BR>COST FOR TWO:<BR>HOURS:<BR>FEATURED IN:</p>
			  </div>
			  <div class="col-xs-8">
			  	<p class="card-text" style="font-size: 15px; line-height: 170%; margin-left: 10px;">Italian<BR>Rs. 1000<BR>11am - 12 midnight (Monday-Sunday)<BR>Value for money</p>
			  </div>
			</div>
			<div>
				
			</div>
		</div>
		<div class="container" style="text-align: center;">
			<div class="card mb-3" style="max-width: 540px; margin: 10px; margin-left: 0px; padding: 10px; text-align: left; display: inline-block;">
				<!-- <img src="res1.jpg" height="100px">
				<span>CASUAL DINING</span>
				<span>1 BHK - BREW HOUSE KITCHEN</span> -->	
				<div class="row no-gutters" style="margin: 0px; padding: 0px; max-height: 200px;">
			    <div class="col-md-4">
			      <img src="res1.jpg" class="card-img" alt="...">
			    </div>
			    <div class="col-md-8" style="margin: 0px; padding-left: 10px;">
			      <div class="card-body" style="padding: 0px;">
			      	<p class="card-text" style="margin: 0px;">CASUAL DINING</p>
			        <p class="card-title" style="font-size: 30px; font-weight: bold; margin: 0px; line-height: 120%;">Smokin Joe's</p>
			        <p class="card-text" style="font-size: 15px; font-weight: bold; margin: 0px;">Oshiwara, Andheri West</p>
			        <p class="card-text" style="font-size: 15px; margin: 0px;">Shop 978, Adarsh Nagar, Oshiwara, Andheri West</p>
			      </div>
			    </div>
			  </div>
			  <hr style="margin: 0px; margin-top: 10px;">
			  <div class="row no-gutters">
			  <div class="col-xs-4">
			  	<p class="card-text" style="font-size: 15px; line-height: 170%; color: rgba(0,0,0,0.6);">CUISINES:<BR>COST FOR TWO:<BR>HOURS:<BR>FEATURED IN:</p>
			  </div>
			  <div class="col-xs-8">
			  	<p class="card-text" style="font-size: 15px; line-height: 170%; margin-left: 10px;">Italian, Chinese<BR>Rs. 1200<BR>11am - 12 midnight (Monday-Sunday)<BR>Value for money</p>
			  </div>
			</div>
			<div>
				
			</div>
		</div>
	</div>

</body>
</html>