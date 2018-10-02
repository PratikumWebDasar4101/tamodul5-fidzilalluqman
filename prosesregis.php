<?php
session_start();

$dir = "upload/";
$nama_file = $_FILES["uploadfoto"]["name"];
$nama_file_tmp = $_FILES["uploadfoto"]["tmp_name"];
$target_file = $dir.$nama_file;

if (move_uploaded_file($nama_file_tmp, $target_file)) {
}

$user = array(
	"nim" => $_POST['nim'],
	"nama" => $_POST['nama'],
	"email" => $_POST['email'],
	"jeniskel" => $_POST['jeniskel'],
	"prodi" => $_POST['prodi'],
	"fakultas" => $_POST['fakultas'],
	"hobby" => $_POST["hobby"],
	"uploadfoto" => $target_file
);

$_SESSION["user"] = $user;
?>

<table align="center" border="1">
	<tr align="left">
		<th>Nim</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jenis Kelamin</th>
		<th>Program Studi</th>
		<th>Fakultas</th>
		<th>Hobby</th>
		<th>Foto</th>
	</tr>
	<tr valign="top">
		<td><?php echo $user['nim']; ?></td>
		<td><?php echo $user['nama']; ?></td>
		<td><?php echo $user['email']; ?></td>
		<td><?php echo $user['jeniskel']; ?></td>
		<td><?php echo $user['prodi']; ?></td>
		<td><?php echo $user['fakultas']; ?></td>
		<td><?php
				foreach ($user['hobby'] as $hobby => $value) {
			 		echo $value . '<br>';
			 	} 	
			?></td>
		<td>
			<img style="width: 300px" src="<?php echo $user["uploadfoto"]; ?>" alt="">
		</td>
	</tr>
</table>
