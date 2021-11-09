<?
if (isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"] !="")
{
	$user_email=$_POST["email"];
	$user_pass=$_POST["pass"];
	setcookie("email",$user_email,time()+3600);
	setcookie("pass",$user_pass,time()+3600);
	header("Location:/Ereschenko/COOKIE/hello.php");
}
session_start();
if (isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"] !="") 
{
  $_SESSION['email'] = $_POST["email"];
  $_SESSION['pass'] = $_POST["pass"];
}

session_write_close();
?>
<form action="/Ereschenko/COOKIE/index.php" method="POST">
<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
</form>
<head></head>
<body>
<h1> Hello <?=$_SESSION["email"]?></h1>
