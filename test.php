
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Upload File To MySQL Database</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">

<!--
.box {
	margin-left: auto;
	margin-right: auto;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	border: 1px solid #000000;
}
-->

</style>
</head>

<body>

<h1>Add Uploads</h1>

<?php
require_once 'config.php';

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
		$fileName = $_FILES['userfile']['name'];
		$tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		
		$fp = fopen($tmpName, 'r');
		$content = fread($fp, $fileSize);
		$content = addslashes($content);
		fclose($fp);
		
		if(!get_magic_quotes_gpc())
		{
			$fileName = addslashes($fileName);
		}
		
		
		$query = "INSERT INTO upload (name, size, type, content ) ".
		         "VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

		mysql_query($query) or die('Error, query failed');					
		
		echo "<p class='style2' align='center'>File '$fileName' uploaded</p>";
}		
?>

<form method="post" enctype="multipart/form-data" name="uploadform">
  <table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
    <tr>
        <td width="246">
	  	  <input type="hidden" name="MAX_FILE_SIZE" value="10000000"><!--10mb file limit-->
	  	  <input name="userfile" type="file" class="box" id="userfile">
	    </td>
      <td width="80"><input name="upload" type="submit" class="box" id="upload" value="  Upload  "></td>
    </tr>
  </table>
</form>

<?php
require_once 'welcome.php';

?>

</body>
</html>