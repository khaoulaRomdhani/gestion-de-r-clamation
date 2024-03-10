<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <!-- partial:../../partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Statistiques</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Tableau de bord</span>
          
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-chart-bar  menu-icon"></i>
            <span class="menu-title">Satisfaction client</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-chart-areaspline menu-icon"></i>
            <span class="menu-title"> Niveau de satisfaction</span>
            
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Dérangements</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" >
            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            <span class="menu-title">Types dérangements</span>
           
          </a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/forms/basic_elements.html">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Réclamation individuelle</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/charts/chartjs.html">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Dommage réseau</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Classification</span>
          </a>
        </li>
        <li class="nav-item" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <a class="nav-link">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Historique réclamation</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Par N° de ligne</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Par date</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Par N° de contact</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Par type</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item" data-bs-toggle="collapse" href="#dommage" aria-expanded="false" aria-controls="ui-basic">
          <a class="nav-link">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Historique dommage</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="dommage">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Par date</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Par N° de contact</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Par type</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>Utilisateurs</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Pages utilisateurs</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Gérer comptes </a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Déconnexion </a></li>
              
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>Apps</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="docs/documentation.html">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.bootstrapdash.com/product/spica-admin/">
            <button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
          </a>
        </li>
      </ul>
    </nav>
<!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row"  style="background:url(../img/cc.jpg);">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="index.html"><img src="../img/logo.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../img/logo.png" alt="logo"/></a>
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">TUNISIE TELECOM,Gestion des dérangements</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
            </li>
            <li class="nav-item dropdown me-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">
                <?php
  $con=mysqli_connect('localhost','root','','tp');
  $sql=mysqli_query($con,"select*from contact");

$nombre=mysqli_num_rows($sql);
echo"$nombre";
?>

                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <?php
  $con=mysqli_connect('localhost','root','','tp');
  $sql=mysqli_query($con,"select*from contact order by date desc limit 3");
  while($res=mysqli_fetch_array($sql))
  {
	  $code=$res["code"];
	   $nom=$res["nom"];
	    $prenom=$res["prenom"];
		 $email=$res["email"];
		  $message=$res["message"];
		   $date=$res["date"];
  
  ?>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="../img/user.png" alt="image" class="profile-pic">
                  </div>
                 
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"><?php echo"$nom $prenom"; ?>
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                     <?php echo"$date"; ?>
                    </p>
                  </div>
                </a>
                <?php } ?>
                
               
              </div>
            </li>
            <li class="nav-item dropdown me-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">1</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/face5.jpg" alt="profile"/>
                <span class="nav-profile-name">Eleanor Richardson</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-plus-circle-outline"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-web"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-clock-outline"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajout d'un nouveau client</h4>
                 
              
<form id="form1" name="form1" method="post" action="" class="forms-sample">
<div class="form-group">
     <label for="t1">N° de téléphone</label>
       <input name="t1" type="text" id="t1" required pattern="[0-9]{8}" class="form-control" placeholder="numero de telephone"/>
      </div>
    <div class="form-group">
       <label for="t2">Nom</label>
      <input type="text" name="t2" id="t2" class="form-control" placeholder="nom" required>
    </div>
   <div class="form-group">
       <label for="t3">Prenom</label>
      <input type="text" name="t3" id="t3" class="form-control" placeholder="prenom" required>
    </div>
    <div class="form-group">
       <label for="t4">Adresse</label>
      <input type="text" name="t4" id="t4" class="form-control" placeholder="adresse" required>
    </div>
     <div class="form-group">
      <label for="t5">Code postal</td>
     <input type="text" name="t5" id="t5" required pattern="[0-9]{4}" class="form-control" placeholder="code postale">
    </div>
   <div class="form-group">
       <label for="t6">Commune</label>
      <input type="text" name="t6" id="t6" class="form-control" placeholder="commune" required>
    </div>
     <div class="form-group">
      <label for="t7">Type</label>
     <select name="t7" id="t7" class="form-control">
        <option>Personne physique</option>
        <option>Entreprise</option>
      </select>
   </div>
        <input type="submit" name="Submit" value="Ajouter"  class="btn btn-primary me-2"/>
        
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

                 
                 
                 
                  
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Nombre des clients selon leurs types</h4>
                 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
  <tr class="table-primary">
    <td>Type</td>
    <td>Nombre</td>
  </tr>
  <tr class="table-info">
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
  <tr class="table-warning">
    <td>Entreprise</td>
    <td> <?php
    include("../connection.php");
	$sql=mysqli_query($con,"select*from client where type='Entreprise'");
	$nombre1=mysqli_num_rows($sql);
	echo"$nombre1";
	?></td>
  </tr>
</table>
</div>

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
 
    <div id="piechart" style="width: 700px; height: 500px;"></div>
  
</body>
</html>
                </div>
              </div>
            </div>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des clients</h4>
                 
                 
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
<thead>
  <tr class="table-primary">
    <th>N° de tel</th>
    <th>Nom</th>
    <th>Prénom</th>
     <th>Adresse</th>
      <th>Code postal</th>
       <th>Commune</th>
       <th>type</th>
    <th>Action</th>
  </tr>
</thead>
  <?php
  include("../connection.php");
  $sql="select* from client";
  $req=mysqli_query($con,$sql);
  while($res=mysqli_fetch_array($req))
  {
  $tel=$res["tel"];
  $nom=$res["nom"];
  $prenom=$res["prenom"];
  $adresse=$res["adresse"];
  $cp=$res["cp"];
  $commune=$res["commune"];
  $type=$res["type"];
  ?>
  <tbody >
  <tr class="table-info">
    <td ><?php echo"$tel"; ?></td>
    <td ><?php echo"$nom"; ?></td>
    <td ><?php echo"$prenom"; ?></td>
    <td ><?php echo"$adresse"; ?></td>
    <td ><?php echo"$cp"; ?></td>
    <td ><?php echo"$commune"; ?></td>
    <td ><?php echo"$type"; ?></td>
    <td >><a href="supp_client.php?tel=<?php echo"$tel"; ?>" onClick="return(confirm('Etes-vous sûr de vouloir archiver ce client?'));"><img src="../img/edit_delete.png" width="32" height="32" border="0" /></a><a href="modif_client.php?tel=<?php echo"$tel"; ?>"><img src="../img/edit.gif" width="32" height="32" border="0" /></a></div></td>
  </tr>
  </tbody>
  <?php
  }
  ?>
</table>
</div>

                 
                 
                 
                </div>
              </div>
            </div>
         
           
            
         
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © Khaoula&Dorra 2024</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
