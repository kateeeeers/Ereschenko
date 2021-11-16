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
<a href = "/Ereschenko/index.php?logout=yes">Выход</a>
<h1> Hello <?=$_SESSION["email"]?></h1>
</body>
