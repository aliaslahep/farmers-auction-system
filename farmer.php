<?php

session_start();
include 'firstimport.php';

$name = $_SESSION['name'];
if(isset($_SESSION['name'])){}
	else{
		header("location:signup.php");
		
}

	


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="farmer.css">

	<title>AgriBid</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AgriBid</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="mystore.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text"> Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Farmer's Dashboard</h1>
					<ul class="breadcrumb">
						<li>
						<a href="#"> Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
			<?php
				$sql = "select * from trade where uname='$name'";
				$result = mysqli_query($conn,$sql);
				$rowcount = mysqli_num_rows( $result );
		
			echo
				'<ul class="box-info">
				<li>
					<i class="bx bxs-calendar-check" ></i>
					<span class="text">
						<h3 id="myorder">'.$rowcount;?></h3>
						<p>My sell items</p>
					</span>
				</li>
				
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$ <span class="totalprice" id="totalprice">0</span></h3>
						<p>Total profit</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Sell Items</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<form class="form" action="farmer.php" method="post">
						<h4>Crop</h4><input type="text" placeholder="Crop" name="crop" class="crop"><br><br>
						<h4>place</h4><input type="text" placeholder="place" name="place" class="place"><br><br>
						<h4>quantity</h4><input type="text" placeholder="quantity" name="quantity" class="quantity"><br><br>
						<h4>base price</h4><input type="text" placeholder="baseprice" name="baseprice" class="baseprice"><br><br>
						<input type="submit" value="Enter" name="submit" class="submit">
			        </form>
				</div>

				<?php 
					
					if(isset($_POST['submit'])){
						
						$crop = $_POST['crop'];
						$place = $_POST['place'];
						$quantity = $_POST['quantity'];
						$baseprice = $_POST['baseprice'];
						

						$sql1 = "insert into `trade` (tradeid,uname,crop,place,quantity,baseprice,status) values('','$name','$crop','$place','$quantity','$baseprice','');";
			
			 			$result2 = mysqli_query($conn,$sql1);
					}
?>
											
														
						</tbody>
					</table>
                    <script>
                         function myorder(){
							
							// alert("successfully bought the crop");

                            x = document.getElementById("myorder").innerHTML;
                            x = parseInt(x);
                            document.getElementById("myorder").innerHTML = x+1;
							
							
                        }
						
						

						$(document).ready(function(){
							$(".buy").click(function(){
								$(this).closest("tr").remove();
							});
						});
						

                    
                    </script>
				</div>
				 
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="ag.js"></script>
</body>
</html>