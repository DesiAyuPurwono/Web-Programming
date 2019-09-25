<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<h2>My CRUD</h2>
	
	<div class="btn-group m-1" role="group" aria-label="Basic example">
	  <a type="button" href="index.php" class="btn btn-secondary">Beranda</a>
	  <a type="button" href="tambah.php" class="btn btn-secondary">Tambah Data</a>
	</div>
	
	<h3>Data</h3>
	
	<table cellpadding="5" cellspacing="0" class="table">
		<tr bgcolor="#CCCCCC">
			<th>no</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>opsi</th>
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysqli_query($koneksi, "SELECT * FROM mydata ORDER BY id DESC");
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysqli_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysqli_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['Nama'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['Username'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['Password'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['Email'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="edit.php?id='.$data['Id'].'">Edit</a> / <a href="hapus.php?id='.$data['Id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
	<script type="text/javascript" src="css/bootstrap.min.js"></script>
</body>
</html>