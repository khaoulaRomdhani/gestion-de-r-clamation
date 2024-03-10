<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<fieldset>
<legend>Liste des clients</legend>
<table width="75%" border="1" align="center" cellpadding="0" cellspacing="0" class="table">
  <tr>
    <td class="td1"><div align="center">N° de tel</div></td>
    <td class="td1"><div align="center">Nom</div></td>
    <td class="td1"><div align="center">Prénom</div></td>
     <td class="td1"><div align="center">Adresse</div></td>
      <td class="td1"><div align="center">Code postal</div></td>
       <td class="td1"><div align="center">Commune</div></td>
       <td class="td1"><div align="center">type</div></td>
    <td class="td1"><div align="center">Action</div></td>
  </tr>
  <?php
  include("../connection.php");
  $sql="select* from client";
  $req=mysql_query($sql);
  while($res=mysql_fetch_array($req))
  {
  $tel=$res["tel"];
  $nom=$res["nom"];
  $prenom=$res["prenom"];
  $adresse=$res["adresse"];
  $cp=$res["cp"];
  $commune=$res["commune"];
  $type=$res["type"];
  ?>
  <tr>
    <td class="table"><div align="center"><?php echo"$tel"; ?></div></td>
    <td class="table"><div align="center"><?php echo"$nom"; ?></div></td>
    <td class="table"><div align="center"><?php echo"$prenom"; ?></div></td>
    <td class="table"><div align="center"><?php echo"$adresse"; ?></div></td>
    <td class="table"><div align="center"><?php echo"$cp"; ?></div></td>
    <td class="table"><div align="center"><?php echo"$commune"; ?></div></td>
    <td class="table"><div align="center"><?php echo"$type"; ?></div></td>
    <td class="table"><div align="center"><a href="supp_client.php?tel=<?php echo"$tel"; ?>" onclick="return(confirm('Etes-vous sûr de vouloir archiver ce client?'));"><img src="../img/edit_delete.png" width="32" height="32" border="0" /></a><a href="modif_client.php?tel=<?php echo"$tel"; ?>"><img src="../img/edit.gif" width="32" height="32" border="0" /></a></div></td>
  </tr>
  <?php
  }
  ?>
</table>
</fieldset>
</body>
</html>