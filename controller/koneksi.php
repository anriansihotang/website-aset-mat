<?php
	try {
		$koneksi = new PDO('mysql:host=localhost;dbname=dataasetmat','root','',array(PDO::ATTR_PERSISTENT=>true));
	}
	catch (PDOException $e){
		echo $e->getMessage();
	}
?>