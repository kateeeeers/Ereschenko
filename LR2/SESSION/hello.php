<?
session_start();
if (isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"] !=""&& $_POST["email"] !="") 
{
  $_SESSION['email'] = $_POST["email"];
  $_SESSION['pass'] = $_POST["pass"];
	$value=$_SESSION['email']
}
else 
{
	if(isset($_SESSION['email'])&& isset($_SESSION['pass'])&& $_SESSION['email']!=""&& $_SESSION['pass']!="")
	{
		$value=$_SESSION['email']
	}
	else
	{
		header("Location:/Ereschenko/index.php");
	}
} 
session_write_close();
?>-
<html>
<head></head>
<body>
<h1> Hello <?=$value?></h1>
<div>
	<a href="/Ereschenko/index.php?logout=yes">Выход</a>
</div>	
</body>	
</html>
