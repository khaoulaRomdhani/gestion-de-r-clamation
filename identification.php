<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="75%" border="1" align="center">
    <tr>
      <td>login</td>
      <td><label for="t1"></label>
      <input type="text" name="t1" id="t1" /></td>
    </tr>
    <tr>
      <td>pass</td>
      <td><label for="t2"></label>
      <input type="password" name="t2" id="t2" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="b1" id="b1" value="S'authentifier" /></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST["b1"]))
{
	$con=mysqli_connect('localhost','root','',"tp");
	$loginf=$_POST["t1"];
	$passf=$_POST["t2"];
	$passf=md5($passf);
	$sql=mysqli_query($con,"select*from admin");
	while($res=mysqli_fetch_array($sql))
	{
		$code=$res["code"];
		$logint=$res["login"];
		$passt=$res["pass"];
		if(($loginf==$logint)&&($passf==$passt))
		{
			session_start();
			$_SESSION["code"]=$code;
			header("location:admin/index.php");
		}
		else
		{
			echo"veillez verifier votre login et/ou votre password";
		}
	}
}
?>
</body>
</html>