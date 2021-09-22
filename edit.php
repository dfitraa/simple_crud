<?php
// including the database connection file
include_once("config.php");

if (isset($_POST['update'])) {

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);

	$nim = mysqli_real_escape_string($mysqli, $_POST['nim']);
	$nama_mahasiswa = mysqli_real_escape_string($mysqli, $_POST['nama_mahasiswa']);
	$program_studi = mysqli_real_escape_string($mysqli, $_POST['program_studi']);
	$alamat_domisili = mysqli_real_escape_string($mysqli, $_POST['alamat_domisili']);
	$nomor_hp = mysqli_real_escape_string($mysqli, $_POST['nomor_hp']);

	// checking empty fields
	if (empty($nim) || empty($nama_mahasiswa) || empty($program_studi) || empty($alamat_domisili) || empty($nomor_hp)) {

		if (empty($nim)) {
			echo "<font color='red'>NIM Kosong.</font><br/>";
		}

		if (empty($nama_mahasiswa)) {
			echo "<font color='red'>Nama Mahasiswa Kosong.</font><br/>";
		}

		if (empty($program_studi)) {
			echo "<font color='red'>Program Studi Kosong.</font><br/>";
		}

		if (empty($alamat_domisili)) {
			echo "<font color='red'>Alamat Domisili Kosong.</font><br/>";
		}

		if (empty($nomor_hp)) {
			echo "<font color='red'>Nomor Hp Kosong.</font><br/>";
		}
	} else {
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE ali2 SET nim='$nim',nama_mahasiswa='$nama_mahasiswa',program_studi='$program_studi',alamat_domisili='$alamat_domisili',nomor_hp='$nomor_hp' WHERE id=$id");

		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM ali2 WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$nim = $res['nim'];
	$nama_mahasiswa = $res['nama_mahasiswa'];
	$program_studi = $res['program_studi'];
	$alamat_domisili = $res['alamat_domisili'];
	$nomor_hp = $res['nomor_hp'];
}
?>
<html>

<head>
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br /><br />

	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="nama_mahasiswa" value="<?php echo $nama_mahasiswa; ?>"></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><input type="text" name="program_studi" value="<?php echo $program_studi; ?>"></td>
			</tr>
			<tr>
				<td>Alamat Domisili</td>
				<td><input type="text" name="alamat_domisili" value="<?php echo $alamat_domisili; ?>"></td>
			</tr>
			<tr>
				<td>Nomor Hp</td>
				<td><input type="text" name="nomor_hp" value="<?php echo $nomor_hp; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
				<td>
					<input type="reset" name="Reset" value="Hapus">
					<input type="submit" name="update" value="Kirim">
				</td>
			</tr>
		</table>
	</form>
</body>

</html>