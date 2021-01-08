<?php
session_start();

$uname =$_GET['uname'];
$pwd =$_GET['pwd'];

$_SESSION['uname']=$uname;
$_SESSION['pwd']=$pwd;

echo "<h1>session page</h1>";
?>
<h1>
<? print_r($_SESSION); ?>
</h1>
<?php
//header("Location:session.html"); it use to redirect page.

header("refresh:5; url=session.html");

?>