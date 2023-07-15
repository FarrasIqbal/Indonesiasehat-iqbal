<?php
session_start();

//membuat koneksi databse
$conn = mysqli_connect("localhost", "root", "", "indonesiasehat");
// AWAL TAMBAH Data

if (isset($_POST['tambahMasyarakat'])) {
    $Nik = $_POST['nik'];
    $Nama  = $_POST['nama'];
    $Riwayat = $_POST['riwayat'];
    $Vaksin = $_POST['vaksin'];
    $Alamat = $_POST['alamat'];
    $Usia = $_POST['usia'];
    $id = $_POST['id'];
    $addtotable = mysqli_query($conn, "INSERT INTO masyarakat (nik, nama, riwayat, vaksin, alamat, usia) VALUES ('$Nik','$Nama', '$Riwayat','$Vaksin','$Alamat', '$Usia')");
    if ($addtotable) {
      header('location:admin.php');
    } else {
      header('location:index.php');
    }
  }

// if (isset($_POST['tambahMasyarakat1'])) {
//     $Nik = $_POST['nik'];
//     $Nama  = $_POST['nama'];
//     $Riwayat = $_POST['riwayat'];
//     $Vaksin = $_POST['vaksin'];
//     $Alamat = $_POST['alamat'];
//     $Usia = $_POST['usia'];
//     $id = $_POST['id'];
    
//     $addtotable=mysqli_query($conn, "SELECT * FROM masyarakat where nik='$Nik'");
//     $cek =mysqli_num_rows($addtotable);
    
//     if($cek==0){
//       mysqli_query($conn, "INSERT INTO masyarakat (nik, nama, riwayat, vaksin, alamat, usia) VALUES ('$Nik','$Nama', '$Riwayat','$Vaksin','$Alamat', '$Usia')");
//     }
//     else{
//       $alert="<div class='alert alert-warning alert-dismissible fade show' role='alert'>
//         Nik Sudah Terdaftar
//       <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//     </div>";
//     }

//   }



  if (isset($_POST['editMasyarakat'])) {
    $Nik = $_POST['nik'];
    $Nama  = $_POST['nama'];
    $Riwayat = $_POST['riwayat'];
    $Vaksin = $_POST['vaksin'];
    $Alamat = $_POST['alamat'];
    $Usia = $_POST['usia'];
    $id = $_POST['id'];
    $addtotable = mysqli_query($conn, "UPDATE masyarakat SET nik='$Nik', nama='$Nama', riwayat='$Riwayat', vaksin='$Vaksin', alamat='$Alamat', usia='$Usia' WHERE id ='$id'");
    if ($addtotable) {
      header('location:admin.php');
    } else {
      header('location:index.php');
    }
  }

  if (isset($_POST['hapusdataMasyarakat'])) {
    $id = $_POST['id'];
  
    $hapus = mysqli_query($conn, "delete from masyarakat where id='$id'");
    if ($hapus) {
      header('location:admin.php');
    } else {
      header('location:index.php');
    }
  }

  if (isset($_POST['tambahVaksin'])) {
    $nama = $_POST['nama'];
    $dosis  = $_POST['dosis'];
    $id_vaksin = $_POST['id_vaksin'];
    $addtotable = mysqli_query($conn, "INSERT INTO vaksin (nama, dosis) VALUES ('$nama','$dosis')");
    if ($addtotable) {
      header('location:vaksin.php');
    } else {
      header('location:index.php');
    }
  }

  if (isset($_POST['editVaksin'])) {
    $nama = $_POST['nama'];
    $dosis  = $_POST['dosis'];
    $id_vaksin = $_POST['id_vaksin'];
    $addtotable = mysqli_query($conn, "UPDATE vaksin SET nama='$nama', dosis='$dosis' WHERE id_vaksin ='$id_vaksin'");
    if ($addtotable) {
      header('location:vaksin.php');
    } else {
      header('location:index.php');
    }
  }

  if (isset($_POST['hapusVaksin'])) {
    $id_vakisn = $_POST['id_vaksin'];
  
    $hapus = mysqli_query($conn, "delete from vaksin where id_vaksin='$id_vakisn'");
    if ($hapus) {
      header('location:vaksin.php');
    } else {
      header('location:index.php');
    }
  }

  if (isset($_POST['tambahDaftarVaksin'])) {
    $Nik = $_POST['nik'];
    $Nama  = $_POST['nama'];
    $Riwayat = $_POST['riwayat'];
    $Vaksin = $_POST['vaksin'];
    $Alamat = $_POST['alamat'];
    $Usia = $_POST['usia'];
    $id = $_POST['id'];
    $addtotable = mysqli_query($conn, "INSERT INTO masyarakat (nik, nama, riwayat, vaksin, alamat, usia) VALUES ('$Nik','$Nama', '$Riwayat','$Vaksin','$Alamat', '$Usia')");
    if ($addtotable) {
      header('location:admin.php');
    } else {
      header('location:index.php');
    }
  }

?>