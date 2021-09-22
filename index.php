<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM ali2 ORDER BY id DESC"); // using mysqli_query instead
?>

<html>

<head>
	<title>Homepage</title>
</head>

<body>
	<a href="add.html">Input Data Mahasiswa</a><br /><br />

	<table width='80%' border=0>

		<tr bgcolor='#CCCCCC'>
			<td>NIM</td>
			<td>Nama Mahasiswa</td>
			<td>Program Studi</td>
			<td>Alamat Domisili</td>
			<td>Nomor Hp</td>
		</tr>

		<?php
		//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
		while ($res = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>" . $res['nim'] . "</td>";
			echo "<td>" . $res['nama_mahasiswa'] . "</td>";
			echo "<td>" . $res['program_studi'] . "</td>";
			echo "<td>" . $res['alamat_domisili'] . "</td>";
			echo "<td>" . $res['nomor_hp'] . "</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Hapus</a></td>";
		}
		?>
	</table>
	<button onClick="window.print();">Print</button>
</body>

</html>