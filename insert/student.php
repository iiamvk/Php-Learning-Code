<?php

$fname=$_GET['fname'];
$lname=$_REQUEST["lname"];
$class=$_GET['class'];
$mobile=$_GET['mobile'];//data recive 

echo $class.$lname;

$con = mysql_connect('localhost','root');// php connect to the mysql.

mysql_select_db("student");//select the database which can use to store info.

$q= "insert into student (fname,lname,branch,contact) values ('$fname','$lname','$class',$mobile)";//write insert queey or command to store data.

$i=mysql_query($q);//execute query.

echo $i;//display 1=insert successfully, 0=error.

mysql_close($con);//closing the database connection



?>