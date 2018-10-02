<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<table align="center" border="1">
		<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
		<tr>
			<th>Nim</th>
			<td><input style="width: 98%" type="text" name="nim" pattern="\d*" maxlength="10" min="0" required></td>
		</tr>
		<tr>
			<th>Nama</th>
			<td><input style="width: 98%" type="text" name="nama" maxlength="25" required></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input style="width: 98%" type="email" name="email" pattern="[a-z0-9._%+-]+@+gmail.+com" required></td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<td><input type="radio" name="jeniskel" value="Laki-laki">Laki - Laki
				<input type="radio" name="jeniskel" value="perempuan">Perempuan</td>
		</tr>
		<tr>
			<th>Program Studi</th>
			<td><select name="prodi">
  				<option value="d3sisteminformasi">D3 Sistem Informasi</option>
  				<option value="ilkom">Ilmu Komunikasi</option>
  				<option value="mbti">Manajemen Bisnis Telekomunikasi dan Informatika</option>
  				<option value="teknikindustri">Teknik Industri</option>
				</select>
		</td>
		</tr>
		<tr>
			<th>Fakultas</th>
			<td><select name="fakultas">
				<option value="fit">FIT
				<option value="fkeb">FKEB
				<option value="fri">FRI
			</td>
		</tr>
		<tr>
			<th>Hobi</th>
			<td><input type="checkbox" name="hobby[]" value="olahraga">Olahraga<br>
			<input type="checkbox" name="hobby[]" value="membaca">Membaca<br>
			<input type="checkbox" name="hobby[]" value="menulis">Menulis<br>
			<input type="checkbox" name="hobby[]" value="bermainmusik">Bermain Musik
			</td>
		</tr>
		<tr>
			<th>Upload Foto</th>
			<td><input type="file" name="uploadfoto" id="uploadfoto"></td>
		</tr>
		<tr>
			<td colspan="2"><input style="width: 100%" type="submit" name="submit" value="submit"></td>
		</tr>
		</form>
	</table>
</body>
</html>
