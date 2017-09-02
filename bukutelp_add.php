<?php
 include "koneksi.php";

 $sql = "INSERT INTO buku_telp (nama, alamat, email, telp)
 		 VALUES (?,?,?,?)";

 // if the statement was prepared
 if($stmt = $mysqli->prepare($sql)){
	 /*
	 * bind the values,
	 * "ssss" means 4 string were being binded,
	 * aside from s for string, you can also use:
	 * i for integer
	 * d for decimal
	 * b for blob
	 */
	 $stmt->bind_param("ssss",
	 				    $_POST['nama'],
	 				    $_POST['alamat'],
	 				    $_POST['telp'],
	 				    $_POST['email']);

	 // execute the insert query
	 if ($stmt->execute()){
	 	echo "Sukses menyimpan data <br />
	 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
	 	$stmt->close();
	 } else {
	 	die("Gagal menyimpan data.");
	 }
  
  } else {
  	die("Gagal prepare statement.");
  }
 
 // close the database
 $mysqli->close();
?>