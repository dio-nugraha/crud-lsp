<?php
$database=mysqli_connect('localhost','root','','menoko');
session_start();

//AI SESSION YGY
if (isset($_POST['email'])){
  var_dump($_POST['email']);
  ProsesLogin($_POST['email'],$_POST['password']);
}

if (isset($_GET['messege'])){
  if ($_GET['messege']=="logout"){
    ProsesLogout();
  }
}


// AI NYA MENOKO YGY with
if (isset($_GET['upload'])||isset($_GET['delete'])||isset($_POST['upload'])) {
      if(isset($_POST['upload'])){
        if ($_POST['upload']=="tambah"){
          $DataTambah=$_POST;
          UploadBarang();
        }
      }

      if (isset($_GET['upload'])){
        $data=FormUpdateBarang($_GET['upload']);
        $_SESSION['where']=$_GET['upload'];
      }

      if (isset($_POST['upload'])) {
        if ($_POST['upload']=="update"){
          $DataUpdate=$_POST;
          UpdateBarang($_SESSION['where']);
        }
      }

      if (isset($_GET['delete'])) {
        DeleteBarang($_GET['delete']);
      }
   
    }


function DataBarang() {
    global $database;
    $query="select * from menoko.barang";
    $DataArray=mysqli_query($database,$query);
    return $DataArray;     
  }

function UploadBarang(){
    global $database;
    global $DataTambah;
    $kode =$DataTambah['kode'] ;
    $nama =$DataTambah['nama'];
    $harga =$DataTambah['harga'];
    $supllier =$DataTambah['supllier'];
    $query="INSERT INTO `barang` (`kode`, `nama`, `harga`, `supllier`) VALUES ('$kode','$nama','$harga','$supllier')";
    mysqli_query($database,$query);
    header("location:admin/dashboard.php");
}

function DeleteBarang($KodeDelete){
    global $database;
    $query="DELETE FROM barang WHERE `barang`.`kode` = $KodeDelete";
    mysqli_query($database,$query);
    header("location:admin/dashboard.php");
}

function FormUpdateBarang($kadal){
  global $database;
  $query="select * from barang where kode=$kadal";
  $DataKadal=mysqli_query($database,$query);
  $data = mysqli_fetch_assoc($DataKadal);
  return $data;
}

function UpdateBarang($KodeUpdate){
  global $database;
  global $DataUpdate;
  $kode =$DataUpdate['kode'] ;
  $nama =$DataUpdate['nama'];
  $harga =$DataUpdate['harga'];
  $supllier =$DataUpdate['supllier'];
  $query="UPDATE `barang` SET `kode` = '$kode', `nama` = '$nama', `harga` = '$harga', `supllier` = '$supllier' WHERE `barang`.`kode` = $KodeUpdate";
  mysqli_query($database,$query);
  header("location:admin/dashboard.php");
}

function ProsesLogin($email,$password){
  global $database;
  $query="SELECT * from menoko.user where email='$email' and password='$password'";
  $query_token=mysqli_query($database,$query);
  $token=mysqli_num_rows($query_token);
  if ($token > 0){
      $_SESSION['email']=$email;
      $_SESSION['status']='login';
      header("location:admin/dashboard.php");
  }
  else {
      header("location:../login.php?messege=login_gagal");
  }
}

function ProsesLogout(){
  session_destroy();
  header("location:auth/login.php?messege=logout_success");
}

?>