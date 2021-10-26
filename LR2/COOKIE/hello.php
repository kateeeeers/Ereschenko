<?
if (isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"] !=")
{
	$user_email=$_POST["email"];
	$user_pass=$_POST["pass"];
	setcookie("email",$user_email,time()+3600);
	setcookie("pass",$user_pass,time()+3600);
	header("Location:/Ereschenko/hello.php");
}

print_r($_COOKIE);
?>
<form action="/Ereschenko/index.php" method="POST">
<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
</form>
<head></head>
<body>
<h1> Hello <?=$_COOKIE["email"]?></h1>
