<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="kode.css">
	<title></title>
</head>
<body>
	<div class="container">
	<h3><center> Tambah Data Jurusan </h3></center>
	<form action="proses_tambah_jurusan.php" method="post">
		<label>Nama Jurusan : </label> <br>
		<center><input type="text" name="nama_jurusan" value="" class="form-control" ></center>
        <br> 
		<label>Angkatan : </label> <br>
		<center><input type="text" name="angkatan" value="" class="form-control"></center><br>
		<center><input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></center>
	</form>
      
</body>
</html>