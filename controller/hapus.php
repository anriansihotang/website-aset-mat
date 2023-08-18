<?php

require_once 'koneksi.php';

class hapus {
    private $db;
    public function __construct($koneksi){
        $this->db=$koneksi;
    }

    public function hapusKB($no_brg){
	$delete = $this->db->prepare('DELETE FROM crudkb where id ='. $no_brg);
	$delete->execute();

	header("location:../tampilankendaran.php");
    }

    public function hapusfurnitur($no_brg){
        $delete = $this->db->prepare('DELETE FROM crudfurnitur where id ='. $no_brg);
        $delete->execute();
    
        header("location:../tampilanfurnitur.php");
        }

    public function hapuselektronik($no_brg){
        $delete = $this->db->prepare('DELETE FROM crudelektronik where id ='. $no_brg);
        $delete->execute();
        
            header("location:../tampilanelektronik.php");
            }
}
$hapus= new hapus($koneksi);

if(isset($_GET['id_KB'])){
    $no_brg = $_GET['id_KB'];
    $hapus->hapusKB($no_brg);
}

else if(isset($_GET['id_furnitur'])) {
    $no_brg = $_GET['id_furnitur'];
    $hapus->hapusfurnitur($no_brg);
}

else if(isset($_GET['id_elektronik'])){
    $no_brg = $_GET['id_elektronik'];
    $hapus->hapuselektronik($no_brg);
}