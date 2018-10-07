<!DOCTYPE html>
<html>
<head>
    <title>user detail</title>


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
</style>
<style>
 .log{
  position: center;
 }
 input[type=text], input[type=password] {
    width:200px;
    height:30px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 5px;

}
 button {
    background-color: #000;
    color: white;
    padding: 14px 35px;
    margin: auto;
    margin-left: 150px;
    border: none;
    cursor: pointer;
}
button:hover {
    opacity: 0.8;
}

#white{
  margin-top: 200px;
  color: white;
}
.log {
  margin: auto;
  margin-top: 10%;
  width: 400px;
  height: 250px;
    padding:10px;
    border: 1px solid white;
     box-shadow: 5px 10px #000;
}
.cont{
  margin-left:50px;
  margin-top:50px;

}
.koko{
  margin-right: 10px;
  color: white;
}

</style>


<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="#paper">Sampale paper</a></li>
  <li><a href="#notes">notes</a></li>
  <li><a href="welcome.php">userinfo</a></li>
    <li><a href="logout.php" class="signin">logout</a></li>
</ul><center><br><br></div>

<?php
$connect=mysql_connect('localhost', 'root', '');

mysql_select_db("dox");
$query="select * from registration";

$result= mysql_query($query);

If($result){

echo "<center><table id='white' border='1' width ='540'>
      <tr color ='#5D9951>";
$i=0;

    If(mysql_num_rows($result)>0)
    {
         //here you fetch the data from the database and print it in the respective columns   
        while($i<mysql_num_fields($result))
        {    
             echo "<th>".mysql_field_name($result, $i)."</th>";
             $i++;
        }
        echo "</tr>";

        $color=1;

        while($rows=mysql_fetch_array($result, MYSQL_ASSOC))
        {    
            If ($color==1){
                echo "<tr color='#'#cccccc'>";

                foreach ($rows as $data){
                    echo "<td align='center'>".$data. "</td>";
                }

                $color=2;
            }
            $color=1;
        }
     } else {
        echo"no results found";
        echo "</table></center>";
    } 
}
?>

</body>
</html>
