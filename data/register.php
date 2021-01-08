<?php

echo "success!....";

$uname = $_GET['uname'];
$pwd = $_GET['pwd'];
$contact = $_GET['number'];

$con = mysql_connect('localhost','root');
mysql_select_db('detail');
$que ="insert into user (uname,contact,pwd) values ('$uname',$contact,$pwd)";
mysql_query($que);
/*
if(!mysql_query($que))
{
echo "success fully";
}
else
{
echo "error";
}*/
?>