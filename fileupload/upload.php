<?php

//print_r($_FILES['my']);//print_r(); are used to print array.

$f =$_FILES['my']["name"];//name of file.
$tmp=$_FILES['my']['tmp_name'];//temparary location of file.
$size=$_FILES['my']['size'];//size of file.
$type=$_FILES['my']['type'];//type of file.
$error=$_FILES['my']['error'];//number of error in file.
$extention=explode(".",$f);//explode("separeter","string"orvariable name);//it convert string to array.
$ext=strtolower(end($extention));//end(variablr name); return end of string.
$newfile =uniqid().".".$ext;//uniqid(); genrate id based on current time.
$storage="../fileupload/storage/".$newfile;//storage location & namr of file.
/*
move_uploaded_file("temparory name of file","storage location of file ".name of file); 
*/
if($size<=1000000){
if($ext=='jpg'||$ext=='png'||$ext=='gif'){
move_uploaded_file($tmp,$storage);
echo "<h2>Upload successfully....</h2>";
}
else{
echo "<h1>please upload jpg,png,gif image</h1>";
}
}
else{
echo"<h1>please upload image only <=1mb</h1>";
}



?>