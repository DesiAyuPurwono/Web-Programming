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

	
	<h3>Tambah Data</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>username</td>
				<td>:</td>
				<td><input type="text" name="username" size="30" required></td>
			</tr>
			<tr>
				<td>password</td>
				<td>:</td>
				<td><input type="text" name="password" size="30" required></td>
			</tr>
			<tr>
				<td>email</td>
				<td>:</td>
				<td><input type="text" name="email" size="30" required></td>
			</tr>
			
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<script type="text/javascript" src="css/bootstrap.min.js"></script>
</body>
</html>