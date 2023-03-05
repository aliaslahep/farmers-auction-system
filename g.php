<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
  background-color: black;
}
.animate-charcter
{  
   text-transform: uppercase;
   
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #297a10 29%,
    #817478 67%,
    #fff800 100%
  );
  
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: rgb(255, 255, 255);
  background-clip: text;
  -webkit-text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
   
}
.container{
  height: 100vh;
}

@keyframes textclip {
  to {
    background-position: 200% center;
   
  }
}
.btns{
  margin: 300px;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  margin-top: 150px;
}
.loginbtn,.signupbtn{
  width: 120px;
  height: 50px;
  background-color: #3C91E6;
  color: white;
  border-radius: 20px;
}
a{
  text-decoration: none;
  font-size: 20px;
  color:white;
}
    </style>
</head>
<body>
    <link rel="stylesheet" href="g.css">
    <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
        <center>
      <h3 class="animate-charcter" valign="middle"> AG-BIDS</h3>
        </center>
      
        <div class="btns">
      <?php
      echo '<form action="login1.php" method="post">
        <input class="loginbtn" type="submit" value="Login">
      </form>'
      
      echo'
      <form action="signup.php" method="post">
         <input class="signupbtn" type="submit" value="Sign Up">
    </form>'
    ?>
    </div>
    </div>
  </div>
</div>
<style>
  @import url("https://fonts.googleapis.com/css2?family=PT+Serif&display=swap");

body{
  background-color: black;
}
.animate-charcter
{  
   text-transform: uppercase;
   
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #297a10 29%,
    #817478 67%,
    #fff800 100%
  );
  
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: rgb(255, 255, 255);
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 190px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
   
  }
}
* {
  padding: 0;
  margin: 0;
}

body {
  background-color: #000000;
  font-family: 'PT Serif', serif;
}

.container {
  margin: 20px 40px;
  color: rgb(167, 135, 135);
}

.heading {
  font-size: 60px;
  color: white;
}

.heading span {
  font-style: italic;
  font-size: 30px;
}
.team{
  color:rgb(167, 135, 135);
 
}
.profiles {
  display: flex;
  justify-content: space-around;
  margin: 20px 80px;
}

.profile {
  flex-basis: 260px;
}

.profile .profile-img {
  height: 260px;
  width: 260px;
  border-radius: 50%;
  filter: grayscale(100%);
  cursor: pointer;
  transition: 400ms;
}

.profile:hover .profile-img {
  filter: grayscale(0);
}

.user-name {
  margin-top: 30px;
  font-size: 35px;
}

.profile h5 {
  font-size: 18px;
  font-weight: 100;
  letter-spacing: 3px;
  color: #ccc;
}

.profile p {
  font-size: 16px;
  margin-top: 20px;
  text-align: justify;
}

@media only screen and (max-width: 1150px) {
  .profiles {
    flex-direction: column;
  }

  .profile {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .profile p {
    text-align: center;
    margin: 20px 60px 80px 60px;
    font-size: 20px;
  }
}

@media only screen and (max-width: 900px) {
  .heading {
    font-size: 40px;
    color: white;
    text-align: center;
  }

  .heading span {
    font-size: 15px;
  }

  .profiles {
    margin: 20px 0;
  }

  .profile p {
    margin: 20px 10px 80px 10px;
  }
}

</style>
<body>
  <div class="container">
    <h1 class="heading"><span>meet</span><span class="team">Our Team</span></h1>

    <div class="profiles">
      <div class="profile">
        <img src="SmartSelect_20230305_103232_Instagram.jpg" class="profile-img">

        <h3 class="user-name">Ali aslah</h3>
        <h5>Backend Developer</h5>
        <p>Ali Aslah is a proficient coder with exceptional problem solving skills with 7+ years of experience.
          Photography and editing skills are to be noted.</p>
      </div>
      <div class="profile">
        <img src="1642264494321_012424.jpg" width="auto" class="profile-img">

        <h3 class="user-name">Sherhin</h3>
        <h5>Web Designer</h5>
        <p>Sherhin is adept in collaborating with UX and design teams to plan the technical writing and execution,
          engaging in innovative high-quality webflow with an emphasis on user interface and experience.</p>
      </div>
      <div class="profile">
        <img src="1677992532825.jpg" width="auto" class="profile-img">

        <h3 class="user-name">Aswathi</h3>
        <h5>Front end Developer</h5>
        <p>Focused Front-end Developer with diverse and extensive experience focusing on semantic and standards compliance.
           Motivated to combine the art of design with that of programming.</p>
      </div>
      <div class="profile">
        <img src="20221024_135901.jpg" class="profile-img">

        <h3 class="user-name">Nigash</h3>
        <h5>Database Manager</h5>
        <p>Skilled in managing database management systems.
          Proven achievement in agile-based time managed projects from working in large teams to one-on- one client focused bespoke websites. 
          </p>
      </div>
    </div>
  </div>

</body>
</html>
