<!DOCTYPE html>
<html>
<head>
    <title>paper</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
.grid-container {
  display: grid;
  grid-column-gap: 50px;
  grid-template-columns: auto auto auto;
 
  padding: 10px;
}
.grid-item {
  background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
  box-shadow:20px 20px 50px grey; 
}


input[type=button], input[type=submit] {
    background-color: black;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

.paperx{
  padding-top: 50px;
   background-color:yellow;
    width:80%;
    height:100px;
    box-shadow:20px 20px 50px grey; 
   
}
    </style>
</head>
<body>

 <ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="paper.php">Sampale paper</a></li>
  <li><a href="notes.php">notes</a></li>
  <li><a href="#about">About us</a></li>
    <li><a href="signin.php" class="signin">signin</a></li>
  <li><a href="signup.php" class="signup">signup</a></li>

</ul>


<center>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
  <div class='paperx'>
            <input type="submit" name="MCA" value="MCA">
            <input type="submit" name="btech" value="btech">
             <input type="submit" name="mtech" value="mtech">
            <input type="submit" name="mba" value="mba">
            <input type="submit" name="all" value="all">
          </form>
          
</div>
</center>
<?php
require_once 'config.php';
/*
*/
?>

<?php  

if(isset($_POST['MCA'])) {
        mca();
    }
    if(isset($_POST['btech'])) {
        btech();
    }
    if(isset($_POST['mtech'])) {
        mtech();
    }
if(isset($_POST['mba'])) {
        mba();
    }
    if(isset($_POST['all'])) {
        all();
    }



function all(){
echo '<div class="grid-container">';
$result =  mysql_query("SELECT photo,subject,branch FROM user ORDER BY photo ASC");
while($row=  mysql_fetch_array($result)){
echo "<center><div class='grid-item'><a href='images/".$row['photo']."'><img src='images/".$row['photo']."' height = '300px' width = '300pxx'><p>".$row['subject']."</a></a></div></center>";
}
echo '</div>';
}



function btech(){
  echo '<div class="grid-container">';
   $btech = mysql_query("SELECT photo,subject,branch FROM user where branch = 'B.tech'");
while($row=  mysql_fetch_array($btech)){
echo "<center><div class='grid-item'><a href='images/".$row['photo']."'><img src='images/".$row['photo']."' height = '300px' width = '300pxx'><p>".$row['subject']."</a></a></div></center>";
}
echo '</div>';
}


function mca(){
  echo '<div class="grid-container">';
   $mca = mysql_query("SELECT photo,subject,branch FROM user where branch = 'MCA'");
while($row=  mysql_fetch_array($mca)){
echo "<center><div class='grid-item'><a href='images/".$row['photo']."'><img src='images/".$row['photo']."' height = '300px' width = '300pxx'><p>".$row['subject']."</a></a></div></center>";
}
echo '</div>';
}

function mtech(){
  echo '<div class="grid-container">';
   $mtech = mysql_query("SELECT photo,subject,branch FROM user where branch = 'M.tech'");
while($row=  mysql_fetch_array($mtech)){
echo "<center><div class='grid-item'><a href='images/".$row['photo']."'><img src='images/".$row['photo']."' height = '300px' width = '300pxx'><p>".$row['subject']."</a></a></div></center>";
}
echo '</div>';
}


function mba(){
  echo '<div class="grid-container">';
   $mba = mysql_query("SELECT photo,subject,branch FROM user where branch = 'mba'");
while($row=  mysql_fetch_array($mba)){
echo "<center><div class='grid-item'><a href='images/".$row['photo']."'><img src='images/".$row['photo']."' height = '300px' width = '300pxx'><p>".$row['subject']."</a></a></div></center>";
}
echo '</div>';
}

?>


</body>
</html>
