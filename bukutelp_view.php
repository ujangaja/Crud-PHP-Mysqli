<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>uku Telp</title>
</head>
<body>
<div class="judul">
  <h2>Buku Telp</h2>
  <h3>Daftar Nama</h3>
</div>

<div class="Table">
   <table border="1">
     <tr>
       <th>No</th>
       <th>Nama</th>
       <th>Alamat</th>
       <th>Telp</th>
       <th>Email</th>
       <th>Aksi</th>
     </tr>
     <?php 
      include 'koneksi.php';
      $sql = "SELECT * FROM buku_telp";
      $result = $mysqli->query($sql);
      $i=1;
      while($row = $result->fetch_assoc()){
        extract($row);
        echo "<tr>
          <td>".$i."</td>
          <td>{$nama}</td>
          <td>{$alamat}</td>
          <td>{$telp}</td>
          <td>{$email}</td>
          <td>
               <a href=\"bukutelp_form_edit?id={$id}\">Edit</a>     
               <a href=\"bukutelp_delete?id={$id}\">Hapus</a>     
          </td>
        </tr>";
        $i++;
      }
      $result->free();
      $mysqli->close();
      ?>
   </table>
 </div> 
  
</body>
</html>