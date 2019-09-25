<?php
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	
	$nama		= $_POST['nama'];	//membuat variabel $id dan datanya dari inputan hidden id
	$username	= $_POST['username'];	//membuat variabel $nis dan datanya dari inputan NIS
	$password	= $_POST['password'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$email		= $_POST['email'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysqli_query($koneksi,"UPDATE mydata SET Nama='$nama', Username='$username', Password='$password', Email='$email' WHERE Id='$id'");
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>