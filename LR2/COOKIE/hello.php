<?
if (isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"] !="" && $_POST["email"] !="")
{
	$user_email=$_POST["email"];
	$user_pass=$_POST["pass"];
	setcookie("email",$user_email,time()+3600);
	setcookie("pass",$user_pass,time()+3600);
	
}
else 
{
	if(isset($_COOKIE["pass"])&& isset($_COOKIE["email"])&& $_COOKIE["pass"]!="" && $_COOKIE["email"]!="")
{
	$_POST["email"]=$_COOKIE["email"];
	$_POST["pass"]=$_COOKIE["pass"];
}
   else
 {	
   header("Location:/Ereschenko/index.php");
 }
}
?>
<head></head>
<body>
<a href = "/Ereschenko/index.php?logout=yes">Выход</a>
<h1> Hello <?=$_SESSION["email"]?></h1>
</body>
