<?
if (isset($_GET["email"]) && isset($_GET["pass"]) && $_GET["pass"] !="")
{
	$user_email=$_GET["email"];
	$user_pass=$_GET["pass"];
	setcookie("email",$user_email,time()+3600);
	setcookie("pass",$user_pass,time()+3600);
	header("Location:/Verholetov/login.php");
}

print_r($_COOKIE);
?>
<form action="/Ereschenko/index.php" method="GET">
<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
</form>
<head></head>
<body>
<h1> Hello <?=$_COOKIE["email"]?></h1>