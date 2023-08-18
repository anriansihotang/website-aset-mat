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
	<title>Data Elektronik</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="plugins/icofont/icofont.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
	<?php 
		if($_SESSION['hak_akses'] == 'user'){
	?>
	<header class="bg-body-tertiary container-fluid">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a class="navbar-brand" href="./index.php">PT MITRA ALAT TERNAK</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="./index.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
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
	<main class="container-fluid">
		<h1 class="text-center py-3">Data Elektronik</h1>
		<div class="container-fluid">
			<table class="table">
				<thead>
					<tr>
						<th class="col">Kode Barang</th>
						<th class="col">Model</th>
						<th class="col">Merk</th>
						<th class="col">Status</th>
						<th class="col">Tanggal Input</th>
						<th class="col">Tanggal Beli</th>
						<th class="col">Jumlah</th>
						<th class="col">Satuan Harga</th>
						<th class="col">Total harga</th>
					</tr>
				</thead>
				<tbody class="table-group-divider">
					<?php 
  require_once './controller/dataelektronik.php';
  $query = "SELECT * FROM crudelektronik ORDER BY th_beli DESC";
  
  if($_SESSION['hak_akses'] == 'user'){
    $aset->Tampilelektronik($query);
  }
  else if($_SESSION['hak_akses'] == 'admin'){
      $aset->Tampiladminelektronik($query);
  }
  ?>
				</tbody>
			</table>
	</main>
	<h1>user</h1>
	<?php
		} else if($_SESSION['hak_akses'] == 'admin'){
	?>
	<header class="bg-body-tertiary container-fluid">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a class="navbar-brand" href="./admin.php">PT MITRA ALAT TERNAK</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="./admin.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
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
	<main class="container-fluid">
		<h1 class="text-center my-4">Data Elektronik</h1>
		<?php 
        require_once './controller/dataelektronik.php';
        $tgl=date('Y-m-d');
        if(isset($_POST['simpan'])){
          $no_brg = $_POST['no_barang'];
          $merk = $_POST['merk'];
          $status = $_POST['status'];
          $th_beli = $_POST['th_beli'];
          $jumlah = $_POST['jumlah'];
          $stn_hrg = $_POST['stn_hrg'];
              if( $no_brg=='' || $merk=='' || $status=='' || $th_beli=='' || $jumlah=='' || $stn_hrg=='' )
              {
                echo '<script>
                alert("Data belum lengkap");
                </script>';
              }
             
              else{

                $total = $jumlah * $stn_hrg;
                require_once 'controller/koneksi.php';
                $query1="SELECT * FROM kba_elektronik where no_brg = '$no_brg'";
                $query = $koneksi->prepare($query1);
                $query->execute();
               

                while($row = $query->fetch(PDO::FETCH_ASSOC))
                  {

                    $model = $row['model'];
                    $idmodel = $row['id'];
                   
                  }
                if ($aset->Insertelektronik($idmodel,$no_brg, $model, $merk, $status, $tgl, $th_beli, $jumlah, $stn_hrg,$total))
                {
                  echo '<script>
                  alert("Data berhasil ditambahkan");
                  </script>' ;
                }
              } 
        }
        
        
        ?>
		<button>tambah data</button>

		<table class="table">
			<thead>
				<tr>
					<th class="col">Kode Barang</th>
					<th class="col">Model</th>
					<th class="col">Merk</th>
					<th class="col">Status</th>
					<th class="col">Tanggal Input</th>
					<th class="col">Tanggal Beli</th>
					<th class="col">Jumlah</th>
					<th class="col">Satuan Harga</th>
					<th class="col">Total harga</th>
					<th class="col">Fitur</th>
				</tr>
			</thead>
			<tbody class="table-group-divider">
				<?php 
  require_once './controller/dataelektronik.php';
  $query = "SELECT * FROM crudelektronik ORDER BY th_beli DESC";
  
  if($_SESSION['hak_akses'] == 'user'){
    $aset->Tampilelektronik($query);
  }
  else if($_SESSION['hak_akses'] == 'admin'){
      $aset->Tampiladminelektronik($query);
  }
  ?>
			</tbody>
		</table>
	</main>
	<h1>admin</h1>
	<?php
		}
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
	</script>
</body>

</html>