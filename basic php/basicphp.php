<?php

include"ex.php";//including ex.php page in basicphp.php page.

echo "hello";
echo ' world';//echo used to print data.

$t=100;//int variable.

$r=12.46;//float variable.

$s="vinod";

$s2='kumar';//string variable.

$b=true;//boolean variable.

$a=array('vinod','stish',"lalit");//neumeric array.

$b=array('vinod'=>20,'satish'=>49,"lalit"=>37);//associative array.

for($i=0;$i<3;$i++)
{

echo "<br/> $a[$i]";//echo "<br>".$a[$i];
}

foreach ($b as $k=>$v)
{
echo '<br/>'.$k."=>".$v;
}

function add($i,$j){

$k=$i+$j;
return ($k);
}

echo "<br>". add($t,$r);

mult(10,20);

?>