<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
   
    <style>


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

.upload{
background-color: white;
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
  box-shadow:20px 20px 50px grey; 
  height: 50%;
  width: 70%;

}

input{
  width: 20%;
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
<br>
<br>
<br>

        <center><div class="upload">
<form class='jack' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
<input type="file" name="file"><font color='black' size="4" >subject name
<input type="text" name="subject">
branch
<input type="text" name="branch">
<input type="submit" name="submit" value="upload"></font>
</form>
</center><br>
<br>
<br>
</div>

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
$branch = $_POST['branch'];


if($file_name!="" && $file_size<=6144000000000)

if(move_uploaded_file ($file_path,'images/'.$file_name))
$query=mysql_query("insert into user(photo,subject,branch)values('$file_name','$subject','$branch')");

if($query==true)
{
    echo "<font color='blue'><center>File Uploaded</center></font>";
}
}
echo '<div class="grid-container">';

//To retrieve uploaded file immediately or write code in separate .php file if you wanna later or by clicking.
$result=  mysql_query("SELECT photo,subject,branch FROM user ORDER BY subject");
while($row=  mysql_fetch_array($result)){
   
echo "<center><div class='grid-item'><a href='images/".$row['photo']."'><img src='images/".$row['photo']."' height = '300px' width = '300pxx' class='img-thumbnail'><p>".$row['subject']."</p><p>".$row['branch']."</a></div></center>";
}

echo '</div>';
?>






</body>
</html>
