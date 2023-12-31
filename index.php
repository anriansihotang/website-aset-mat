<?php
	session_start();
  	if($_SESSION['status']!="login")
  {
    header("location:loginpage.php?peringatan=silahkanlogindulu");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
  </head>
  <body>
	<header class="bg-body-tertiary container-fluid">
	<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">PT MITRA ALAT TERNAK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		  Aset
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="tampilankendaraan.php">Kendaraan</a></li>
            <li><a class="dropdown-item" href="tampilanfurnitur.php">Furnitur</a></li>
            <li><a class="dropdown-item" href="./tampilanelektronik.php">Elektronik</a></li>
          </ul>
        </li>
		<li class="nav-item">
          <a class="nav-link " aria-current="page" href="./logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
	</header>
	<main>
	<div class="row" >
          <div class="offset-sm-2 col-sm-8">
            <canvas id="mychart" width="100px" height="45px"></canvas>
            </div>
        </div>
	</main>
    <h1>user</h1>
	<?php
 $koneksi = mysqli_connect("localhost","root","","dataasetmat");
 require_once './controller/datachart.php';
?>
	<!-- scriptchart -->
	<script>
var ctx = document.getElementById("mychart");

var datas = {
  labels: ['Kendaraan','Furnitur','Elektronik'],
  datasets: [{
    label: 'Data A',
    data: [<?php
              $query = "SELECT SUM(jumlah) as totalkb FROM crudkendaraan";
              $halamanUtama->diagramKB($query);
          ?>,
          <?php
          $query = "SELECT SUM(jumlah) as totalfurnitur FROM crudfurnitur";
          $halamanUtama->diagramfurnitur($query);
      ?>,
      <?php
      $query = "SELECT SUM(jumlah) as totalelektronik FROM crudelektronik";
      $halamanUtama->diagramelektronik($query);
  ?>],
    backgroundColor: [
      "#FF6384",
      "#4BC0C0",
      "#FFCE56",
      "#E7E9ED",
      "#36A2EB"
    ],
  }, ]
};

var options = {
  responsive: true,
  hover: {
    mode: 'label',
  },
  tooltips: {
    enabled: true,
    callbacks: {
      
    }

  }
};


var chr = new Chart(ctx, {
  data: datas,
  type: 'pie',
  options: options,
});

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>