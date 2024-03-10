<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<fieldset><legend class="button">boite de reception</legend>
<table width="75%" border="1" align="center" class="greenTable">
<thead>

  <tr>
    <th>code</th>
    <th>nom</th>
    <th>prenom</th>
    <th>email</th>
    <th>message</th>
    <th>date</th>
    <th>action</th>
     
  </tr>
  </thead>
  <?php
  $con=mysqli_connect('localhost','root','','tp');
  $sql=mysqli_query($con,"select*from contact");
  while($res=mysqli_fetch_array($sql))
  {
	  $code=$res["code"];
	   $nom=$res["nom"];
	    $prenom=$res["prenom"];
		 $email=$res["email"];
		  $message=$res["message"];
		   $date=$res["date"];
  
  ?>
  <tbody>
  <tr>
    <td><?php echo"$code";?></td>
    <td><?php echo"$nom";?></td>
    <td><?php echo"$prenom";?></td>
    <td><?php echo"$email";?></td>
    <td><?php echo"$message";?></td>
    <td><?php echo"$date";?></td>
     <td><a href="supp.php?code=<?php echo"$code";?>" onclick="return(confirm('etes vous sure de supprimer cette message?'))">supprimer</a>
     <a href="mailto:khaoularomdhani11@gmail.com">repondre</a>
     </td>
      </tr>
  
  <?php
  }
  ?>
  </tbody>
</table>
</fieldset>
</body>
</html>