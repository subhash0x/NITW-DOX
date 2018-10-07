<!DOCTYPE html>
<html lang="en" class="mdl-js">
  <title>NITW -DoX-</title>
<link rel="stylesheet" media="screen" href="style.css">

<style>
 body {
  background-image:url(image/background.jpg);
  background-repeat: no-repeat;
  background-size:100%;
 }

.topnav {
  overflow: hidden;
  background-color: #333;
}
.fp-caption{
  color: red;
  font-size: 30px;

}
#btn{
  background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 70px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;

}

#lil{

  color: white;
  font-size:16px;
}
li{
  float: left;
}

li a{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover{
  background-color: #111;
}
ul{
  list-style-type: none;
  margin:0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
.signin{
  align: right;
}

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="email"],
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}



select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}


 button {
    background-color: #000;
    color: white;
    padding: 14px 35px;
    margin: auto;
    margin-left: 30px;
    border: none;
    cursor: pointer;
}
button:hover {
    opacity: 0.8;
}


fieldset {

  margin-bottom: 30px;
  border: none;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

@media screen and (min-width: 480px) {

  form {
    padding-top: 10px;
    max-width: 480px;
  }

}

label{

  color: white;
  size: 20px;
}
</style>
   </head>
    <body>
      <?php
require_once 'config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  
  $table="INSERT INTO registration(name,email,password)
  VALUES ('$name','$email','$password')";
  
  if(!mysql_query($table,$conn))

    echo "<font color='red' size='7'>not success</font>".mysql_error($conn);
  }
?>


<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="paper.php">Sampale paper</a></li>
  <li><a href="#notes">notes</a></li>
  <li><a href="#about">About us</a></li>
    <li><a href="signin.php" class="signin">signin</a></li>
  <li><a href="signup.php" class="signup">signup</a></li>
</ul><center><br><br></div>

      <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
      <div class="eko">
       <label> <h1>Sign Up</h1></label>
        
        <fieldset>
          <h3>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">

          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
          </h3>
          <button type="submit">Sign Up</button>
        </fieldset>
        
      </form>
      </div>
    </body>
</html>