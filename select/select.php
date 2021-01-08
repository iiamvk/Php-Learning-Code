<?php
$con = mysql_connect('localhost','root');//connection stablish from php to mysql.

mysql_select_db('student');//select student database.

$q= "select * from student";//select query store.

$result = mysql_query($q);//select query execute and return table which store in result variable.

$numrow = mysql_num_rows($result);//these function return the total number of row in table.

echo "$numrow <br/>";


for ($i=1; $i<=$numrow; $i++)
{
$data = mysql_fetch_assoc($result);

echo $data['fname']."      ".$data['lname']."      ".$data['branch'] ."      ".$data['contact'];

echo "<br/>";
}

mysql_close($con);
?>