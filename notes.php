<!DOCTYPE html>
<html>
<head>
    <title>notes</title>
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


<?php
require_once 'config.php';
if(@$_POST['submit'])
{
    //storing all necessary data into the respective variables.
$file = $_FILES['file'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$subject = $_POST['subject'];

if($file_name!="" && $file_size<=6144000000000)
 
/*
 if ($file_type == "application/pdf") {
        move_uploaded_file ($file_path,'paper/'.$file_name)
        $query=mysql_query("insert into user(photo)values('$file_name')");
     }
*/

if(move_uploaded_file ($file_path,'images/'.$file_name))//"images" is just a folder name here we will load the file.

$query=mysql_query("insert into user(photo)values('$file_name')");

if($query==true)
{
    echo "File Uploaded";
}
}
echo '<div class="grid-container">';
$result=  mysql_query("SELECT photo,subject FROM user ORDER BY photo ASC");
while($row=  mysql_fetch_array($result)){
 


 function all(){
echo '<div class="grid-container">';
$result =  mysql_query("SELECT photo,subject,branch FROM user ORDER BY photo ASC");
while($row=  mysql_fetch_array($result)){
echo "<center><div class='grid-item'><a href='images/".$row['photo']."'><img src='images/".$row['photo']."' height = '300px' width = '300pxx'><p>".$row['subject']."</a></a></div></center>";
}
echo '</div>';
}
  all();
}


?>


</body>
</html>
