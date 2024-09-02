<?php
if($_POST){
    $id_pegawai=$_POST['id_pegawai'];
    $Nik_pegawai=$_POST['Nik_pegawai'];
    $Nama=$_POST['Nama'];
    $Jenis_kelamin=$_POST['jenis_kelamin'];
    $No_tlp=$_POST['uNo_tlp'];
    $Jabatan= $_POST['Jabatan'];
    if(empty($Nama)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='Tambah_pegawai.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='Tambah_pegawai.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='Tambah_pegawai.php';</script>";
    } else {
        include "db.php";
        $insert=mysqli_query($conn,"insert into pegawai (Nama,Nik_pegawai, Jenis_kelamin, alamat, id_pegawai, No_tlp, Jabatan) value ('".$Nama."','".$Nik_pegawai."','".$Jenis_kelamin."','".$alamat."','".$id_pegawai."','".$No_tlp."'"','".$Jabatan."')")) or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
    
?>
