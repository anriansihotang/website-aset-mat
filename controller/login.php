<?php 
	require_once 'koneksi.php';
	class login {
    protected $db;
    public function __construct ($koneksi){
        $this->db=$koneksi;
    } 

    public function logincheck($nik,$username,$password){
        $loginuser = $this->db->prepare("SELECT * from login where nik='$nik' and username='$username' and password='$password'");
        $loginuser->execute();
        session_start();

        while($row=$loginuser->fetch(PDO::FETCH_ASSOC))
        {
            if($loginuser->rowCount()==1){
                $_SESSION['username'] = $username;
                $_SESSION['hak_akses'] = $row['hak_akses'];
                $_SESSION['status'] = "login";
            
                if($_SESSION['hak_akses']=='admin'){
                    header("location:admin.php");
                }
                
                if($_SESSION['hak_akses']=='user'){
                    header("location:index.php");
                }
            }
        }
    }
}

$login = new login($koneksi);
?>
