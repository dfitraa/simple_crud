<html>

<head>
	<title>Add Data</title>
</head>

<body>
	<?php
	//including the database connection file
	include_once("config.php");

	if (isset($_POST['Submit'])) {
		$nim = mysqli_real_escape_string($mysqli, $_POST['nim']);
		$nama_mahasiswa = mysqli_real_escape_string($mysqli, $_POST['nama_mahasiswa']);
		$program_studi = mysqli_real_escape_string($mysqli, $_POST['program_studi']);
		$alamat_domisili = mysqli_real_escape_string($mysqli, $_POST['alamat_domisili']);
		$nomor_hp = mysqli_real_escape_string($mysqli, $_POST['nomor_hp']);

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

			//link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else {
			// if all the fields are filled (not empty) 

			//insert data to database	
			$result = mysqli_query($mysqli, "INSERT INTO ali2(nim,nama_mahasiswa,program_studi,alamat_domisili,nomor_hp) VALUES('$nim','$nama_mahasiswa','$program_studi','$alamat_domisili','$nomor_hp')");

			//display success message
			echo "<font color='green'>Data added successfully.";
			echo "<br/><a href='index.php'>View Result</a>";
		}
	}
	?>
</body>

</html>