<?php

$fname=$_GET['fname'];

$number=$_GET['mobile'];

$class=$_GET['class']; //data recived.

$con = mysql_connect('localhost','root');//php connection to mysql.

mysql_select_db('student');//select database.

$q="UPDATE student SET branch='$class',contact=$number WHERE fname='$fname' ";//update query store in q variable.

mysql_query($q);//update query execute.

mysql_close($con);

?>