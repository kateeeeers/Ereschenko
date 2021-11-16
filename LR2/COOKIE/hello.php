<?
session_start();
if (isset($_POST["email"]) && isset($_POST["pass"])) 
{
  $_SESSION['email'] = $_POST["email"];
  $_SESSION['pass'] = $_POST["pass"];
}
session_write_close();
?>
<head></head>
<body>
<form action="/Ereschenko/COOKIE/index.php" method="POST">
<button type="submit" class="btn btn-primary mb-3">Выход</button>
</form>
<h1> Hello <?=$_SESSION["email"]?></h1>
</body>
