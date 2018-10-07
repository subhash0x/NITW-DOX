<!DOCTYPE html>
<html lang="en" class="mdl-js">
  <title>NITW -DoX-</title>
<link rel="stylesheet" media="screen" href="style.css">

</head>
<body>
<?php
require_once 'config.php';

 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
       
      $email = $_POST['email'];
      $password = $_POST['password']; 
      
      $forlogin = "select * from registration";
$result = mysql_query($forlogin);
if($flag = true){
while ($row = mysql_fetch_array($result)) {
if($email == $row['email'] && $password == $row['password']) {
$_SESSION['currentuser'] = $user;
header('Location: /pro/dashboard.php');

}
else{
$flag = false;
echo "<script>alert('please enter right crienditail');</script>";

}
}
}

     
   }
?>
 <ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="#paper">Sampale paper</a></li>
  <li><a href="#notes">notes</a></li>
  <li><a href="#about">About us</a></li>
    <li><a href="signin.php" class="signin">signin</a></li>
  <li><a href="signup.php" class="signup">signup</a></li>
</ul><center><br><br></div>

      <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">

<div class="log"> <font color=white><h1>Sign in</h1></font>
  <div class="cont">

<label class="koko" for="uname"><b>Email &nbsp&nbsp&nbsp&nbsp&nbsp</b></label>
<input type="text" placeholder="Enter Email ID" name="email" required></div><br>
<div class="cont" style="margin-top:5px;">
<label class="koko" for="psd"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required>
</div><br>
 <button style="margin-top: 8px" type="submit" name="submit">Login</button>  <a href="signup.php">not register</a>

</div>
  </body>

  </html>
