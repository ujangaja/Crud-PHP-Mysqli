<h3>Buku Telp [Pencarian]</h3>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="q" placeholder="Masukkan nama" value="<?php if (isset($_GET['q'])){ echo $_GET['q']; } ?>"/>	
</form>

<?php
 include "koneksi.php";
 if (isset($_GET['q'])){
 	$query = "SElECT * FROM buku_telp WHERE nama LIKE '%$_GET[q]%' OR telp LIKE '%$_GET[q]%'";
	$result = $mysqli->query($query);
	$jml = $result->num_rows;
	
	if ($jml>0){
	 	echo "<table border=\"1\">
	 			<tr>
	 			  <th>No</th>
	 			  <th>Nama</th>
	 			  <th>Alamat</th>
	 			  <th>Telp</th>
	 			  <th>Email</th>
	 			</tr>";
		$no=1;	
		
		while ($r = $result->fetch_assoc()) {
	 	 echo "<tr>
	 			  <td>$no</td>
	 			  <td>$r[nama]</td>
	 			  <td>$r[alamat]</td>
	 			  <td>$r[telp]</td>
	 			  <td>$r[email]</td>
	 			</tr>";	
		 $no++;	
		}
		echo "</table>"; 		
	} else {
		echo "Pencarian $_GET[q] tidak ditemukan";
	}
 }

 $mysqli->close();
 
?>