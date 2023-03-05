<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Have an account.</p> <a href="login1.php" class="btn">Login</a>
                </div>
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Register</h2>
                    <form action="signup.php" method="post">
                        <p> <label>Username<span>*</span></label> <input type="text" name="uname">
                        <p> <label>Catagory<span>*</span></label> <select name="cata"><option value="farmer">Farmer</option><option value="trader">Trader</option></select>
                        <p> <label>Password<span>*</span></label> <input type="password" placeholder="Password" name="pass" required> </p>
                        <p> <label>Confirm Password<span>*</span></label> <input type="password" placeholder="Password" required> </p>
                        <p> <input type="submit" name="submit" value="Sign up"> </p>
                    </form>
                </div>
            </div>
            <?php 
                    session_start();
                    include 'firstimport.php';
                    
                    
					if(isset($_POST['submit'])){
						
						$uname = $_POST['uname'];
						$cata = $_POST['cata'];
						$pass = $_POST['pass'];

						$sql1 = "insert into `user` (uname,catagory,pass) values('$uname','$cata','$pass');";
			
			 			$result2 = mysqli_query($conn,$sql1);
                        if($cata=="farmer"){
                            $_SESSION['name'] = $uname;
                            header('Location:farmer.php');
                        }else{
                            $_SESSION['name'] = $uname;
                            header('Location:trader.php');
                        }
					}
            ?>
        </div>
    </div>
    <a href="Sign Up.html">Sign Up</a>
</body>


</html>