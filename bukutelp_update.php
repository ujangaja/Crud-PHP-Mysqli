<?php 
include 'koneksi.php';
$sql = "UPDATE buku_telp SET nama=?,alamat=?,telp=?,email=? WHERE id=?";

// jalankan statekmnt prepeare
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssssi",
					$_POST['nama'],
					$_POST['alamat'],
					$_POST['telp'],
					$_POST['email'],
					$_POST['id']);
// jalankan statament execute
if($stmt->execute()){
	echo "Sukses mengubah data <br>
	<a href=\"bukutelp_view.php\">Lihat Buku Telp</a>";
	// menutp statament
	$stmt->close();
}else{
	die("gagal Mengubah data");
}
// menutup koneksi
$mysqli->close();

 ?>