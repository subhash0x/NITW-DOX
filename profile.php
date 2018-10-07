<!DOCTYPE html>
<html lang="en" class="mdl-js">
  <title>NITW -DoX-</title>
<link rel="stylesheet" media="screen" href="style.css">
<style type="text/css">
  
  .profile{
    height: 300px;
    width: 300px;
  }
</style>
</head>
<body>



 <ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="paper.php">Sampale paper</a></li>
  <li><a href="notes.php">notes</a></li>
  <li><a href="#about">About us</a></li>
    <li><a href="index.html" class="signin">signout</a></li>
 

</ul>
<center><br><br></div>

      <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">

<div class="profile"> <font color=white><h1>update profile</h1></font>
 
 <fieldset>
          <h3>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"><br>
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email"><br>

          <label for="password">Password:</label><br>
          <input type="password" id="password" name="password"><br>
          </h3>
          <button type="submit">update</button>
        </fieldset>

</div>
  </body>

  </html>

