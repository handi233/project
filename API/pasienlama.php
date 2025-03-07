<?php
include'config/koneksi.php';
if(isset($POST['simpan']))
{
    $no_nik=$_POST['no_nik'];
    $tanggal_kunjung=$_POST['tanggal_kunjung'];
    $poli=$_POST['poli'];

    $insert = mysqli_query($con, "INSERT INTO pasien_lama VALUES ('','$no_nik','$tanggal_kunjung','$poli')") or die  (mysqli_error());
if ($insert){
    echo "<script>alert('Data Berhasil Terkirim')</script>";
    }else{
    echo "<script>alert('Data Gagal Terkirim!!Ulangi Lagi!!')</script>".mysqli_error($con);
    }
}
?>