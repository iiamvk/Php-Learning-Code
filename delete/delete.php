<?php

$fname = $_GET['fname'];

$con = mysql_connect('localhost','root');

mysql_select_db('student');

$q=" DELETE FROM student WHERE fname='$fname' ";//delete query store in q variable.

$i=mysql_query($q);//query is execute.

echo $i;

?>