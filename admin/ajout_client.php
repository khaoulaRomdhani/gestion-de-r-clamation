<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<fieldset>
<legend>Ajout d'un nouveau client</legend>
<form id="form1" name="form1" method="post" action="" onsubmit="return verify()">
  <table width="75%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td width="50%" class="td">N° de téléphone</td>
      <td width="50%"><input name="t1" type="text" id="t1" required pattern="[0-9]{8}" /></td>
    </tr>
    <tr>
      <td class="td">Nom</td>
      <td><input type="text" name="t2" id="t2" required></td>
    </tr>
    <tr>
      <td class="td">Prénom</td>
      <td><input type="text" name="t3" id="t3" required></td>
    </tr>
    <tr>
      <td class="td">Adresse</td>
      <td><input type="text" name="t4" id="t4" required></td>
    </tr>
    <tr>
      <td class="td">Code postal</td>
      <td><input type="text" name="t5" id="t5" required pattern="[0-9]{4}"></td>
    </tr>
    <tr>
      <td class="td">Commune</td>
      <td><input type="text" name="t6" id="t6" required></td>
    </tr>
    <tr>
      <td class="td">Type</td>
      <td><select name="t7" id="t7">
        <option>Personne physique</option>
        <option>Entreprise</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Ajouter"  />
        </div></td>
    </tr>
  </table>
</form>
<?php
if(isset($_POST["Submit"]))
{
include("../connection.php");
$tel=$_POST["t1"];

$nom=$_POST["t2"];
$prenom=$_POST["t3"];
$adresse=$_POST["t4"];
$cp=$_POST["t5"];
$commune=$_POST["t6"];
$type=$_POST["t7"];
$sql="insert into client(tel, nom, prenom, adresse, cp, commune, type) values('$tel', '$nom', '$prenom', '$adresse', '$cp', '$commune', '$type')";
$req=mysqli_query($con,$sql);
if($req)
{
?>
<script language="javascript">
alert("l'ajout de nouveau client à été bien éffectuée");
</script>
<?php
}
else
echo "echec d'ajout";
}
?>
</fieldset>
</body>
</html>