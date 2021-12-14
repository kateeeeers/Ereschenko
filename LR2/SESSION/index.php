session_start();
if(isset($_GET["logout"])&& $_GET["logout"]=='yes')
{   
session_destroy();
}
if(isset($_SESSION['email'])&& isset($_SESSION['pass'])&& $_SESSION['email']!=""&& $_SESSION['pass']!="")
	{
		header("Location:/Ereschenko/hello.php");
	}
<html>
<head></head>
<body>
<form action="/Ereschenko/hello.php" method="POST">
<div class="mb-3" style="margin-bottom: 10px; margin-top:10px">
  <label for="exampleFormControlInput1" class="form-label">Login</label>
  <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="login">
</div>
<div class="col-auto"style="margin-bottom: 10px" >
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input name="pass" type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
  </form>
  </body>
</html>
