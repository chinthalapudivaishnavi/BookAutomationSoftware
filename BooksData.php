 
<!DOCTYPE html>
<html>
<head>
	<title>Book Automation Software</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="stylebooksdata.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<style>
		body{
			margin:0;
		}
		.header{
			background-color: #999999;
			position: fixed;
			overflow: hidden;
			width: 100%;
			z-index: 5;
		}
		.navbar{
			background-color: #6495ED;
			position: fixed;
			width: 100vw;
			height: 90px;
		}
		.sidenav{
			margin-top: 90px;
		}
	</style>
	
</head>
<body>
	<div id="header"></div>
	<script>
		$("#header").load("nav.html");
		
	</script>
	<div class="sidenav">
		<a href="recomendedbooks.html" style="margin: 10px;">Recommended Books</a>
		<a href="recentbooks.html" style="margin: 10px;">Recently Released Books</a>
		<a href="uploadbooks.html" style="margin: 10px;">Upload Recommended Books</a>
	</div>
	<div class="books" style="margin-top: 150px;">
		<?php
			$server = "localhost";
			$user = "root";
			$password = "";
			$db = "signuppage";
			$con =mysqli_connect($server,$user,$password,$db);
			if(!$con){
				echo "Somthing went wrong...";
			}
			$tablequery="";
			if($_POST['q'] != ''){
				$tablequery="SELECT * FROM books WHERE Title LIKE '%".$_POST['q']."%'";
			}
			else{
				$tablequery = "select * from books";
			}
			$query = mysqli_query($con, $tablequery);
			$num_rows=mysqli_num_rows($query);
			while($row = mysqli_fetch_array($query)) {
				$id = $row['Id'];
				$title = $row['Title'];
				$author=$row['Author'];
				$price=$row['Price'];
				$image=$row['Image'];
				echo "<div class=\"book\" style=\"margin-top: 200px\">
						<img src='$image.jpg' width='300' height='300' align='left' style='margin-right: 10px'/>";
				echo "<h2>$title</h2>";
				echo $author."<br><br>";
				echo $price."<br><br>";
				echo '<a href="buynow.php?id='.$row["Id"].'">BuyNow</a></div><br><br>';
				//echo '<a href="buynow.php">BuyNow</a>';
			}
		?>

		<div class="book" style="margin-top: 200px">
			<img src="personalitygrowth.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">World's Greatest Books For Personal Growth & Wealth (Set of 4 Books)</p></h2>
			<p class="author">by Dale Carnegie, Napoleon Hill, et al. | 1 August 2019</p>
			<p>Price: <i class="fa$db fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button" ><a href="buynow.php">Buy Now</a></button>
		</div><br><br>
		<div class="book" style="margin-top: 100px">
			<img src="attitude.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">Attitude is Everything</p></h2>
			<p class="author">by Keller Jeff | 15 May 2015</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div><br>
		<div class="book" style="margin-top: 200px">
			<img src="book3.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">The POWER of your SUBCONSCIOUS MIND</p></h2>
			<p class="author">by Roger Fritz and Ph.D. Edited by Arthur R. Pell | 1 September 2019</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>
		<div class="book" style="margin-top: 200px">
			<img src="book4.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">EATING IN THE AGE OF DIETING</p></h2>
			<p class="author">by Rujuta Diwekar | 16 November 2020</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>
		<div class="book" style="margin-top: 200px">
			<img src="book5.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">MEMORY HOW TO DEVELOP,TRAIN,AND USE IT</p></h2>
			<p class="author">by Joseph Murphy Dale Carnegie, Napoleon Hill | 1 November 2020</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>
		<div class="book" style="margin-top: 200px">
			<img src="book6.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">BARACK OBAMA</p></h2>
			<p class="author">by Barack Obama | 17 November 2020</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>
		<div class="book" style="margin-top: 200px">
			<img src="book7.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">THE ALCHEMIST</p></h2>
			<p class="author">by Paulo Coelho | 17 October 2005</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>
		<div class="book" style="margin-top: 200px">
			<img src="book8.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">LIFE'S AMAZING SECRETS</p></h2>
			<p class="author">by Roger Fritz and Ph.D. Edited by Arthur R. Pell | 1 September 2019</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>
		<div class="book" style="margin-top: 200px">
			<img src="book9.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">THE RICHEST MAN IN BABYLON</p></h2>
			<p class="author">by Héctor García and Francesc Miralles | 27 September 2017</p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>
		<div class="book" style="margin-top: 200px">
			<img src="book10.jpg" width="300" height="300" align="left" style="margin-right: 10px">
			<h2><p class ="para">THE THEORY OF EVERYTHING</p></h2>
			<p class="author">by George S. Clason | 1 August 2019 </p>
			<p>Price: <i class="fa fa-inr"></i>400.00<sub><i class="fa fa-inr"></i><strike>550</strike></sub></p>
			<p>Save extra with Cashback</p>
			<button type="button"><a href="buynow.php">Buy Now</a></button>
		</div>

		
	</div>
</body>
</html>