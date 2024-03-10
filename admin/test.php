<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<table width="1200" border="0" align="center">
  <tr>
    <td>Type</td>
    <td>Nombre</td>
  </tr>
  <tr>
    <td>Personne physique</td>
    <td>
    <?php
    include("../connection.php");
	$sql=mysqli_query($con,"select*from client where type='Personne physique'");
	$nombre=mysqli_num_rows($sql);
	echo"$nombre";
	?>
    </td>
  </tr>
  <tr>
    <td>Entreprise</td>
    <td> <?php
    include("../connection.php");
	$sql=mysqli_query($con,"select*from client where type='Entreprise'");
	$nombre1=mysqli_num_rows($sql);
	echo"$nombre1";
	?></td>
  </tr>
</table>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type', 'Nombre'],
          ['Personne physique',     <?php echo"$nombre"; ?>],
          ['Entreprise',      <?php echo"$nombre1"; ?>]
         
        ]);

        var options = {
          title: 'Répartition des clients selon leurs types'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
 
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  
</body>
</html>