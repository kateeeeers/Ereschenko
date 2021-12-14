<?
session_start();
if (isset($_POST["email"]) && isset($_POST["pass"]) && $_POST["pass"] !=""&& $_POST["email"] !="") 
{
  $_SESSION['email'] = $_POST["email"];
  $_SESSION['pass'] = $_POST["pass"];
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
?>
<form action="/Ereschenko/index.php" method="POST">
<button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
</form>
<head></head>
<body>
<h1> Hello <?=$value?></h1>
