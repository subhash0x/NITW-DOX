<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php

$imgData = file_get_contents($filename);
$size = getimagesize($filename);
mysql_connect("localhost", "$root", "$password");
mysql_select_db ("$dox");
// mysqli 
// $link = mysqli_connect("localhost", $username, $password,$dbname); 



$sql = sprintf("INSERT INTO testblob
    (image_type, image, image_size, image_name)
    VALUES
    ('%s', '%s', '%d', '%s')",
    /***
     * For all mysqli_ functions below, the syntax is:
     * mysqli_whartever($link, $functionContents); 
     ***/
    mysql_real_escape_string($size['mime']),
    mysql_real_escape_string($imgData),
    $size[3],
    mysql_real_escape_string($_FILES['userfile']['name'])
    );
mysql_query($sql);


?>

<center>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" name="submit" value="Search">
</center>
</body>
</html>