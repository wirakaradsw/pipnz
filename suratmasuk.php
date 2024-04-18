<?php

	include 'db.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Surat Kader NZ_<?php echo $_POST['nama']; ?></title>
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=3" />
	</head>
	<body style="font-family:Poppins;background-color:white;">

		<div style="background-color:#fe5000;padding:15px;text-align:center;">
		  <h1>Data Kader New Zealand</h1>
		</div>

		<div style="overflow:auto;background-color:white;">
		  	<div class="main">
		  		<table width="600px" border="0" align="center" cellpadding="1" cellspacing="1" style="background-color:white;">
<?php
					if(!empty($_POST)) {
						$id = $_POST['id'];	

						$sql = "SELECT * FROM masuk WHERE id = '$id'";

						$q = $db->query($sql);

						if ($q->rowCount() > 0) {
							while ($row = $q->fetch()):
?>
								<tr><td><br></td></tr>

								<tr>
									<td style="text-align:left;"><b>Data Pribadi</b></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Nama Lengkap</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['nama']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Tempat, Tanggal Lahir</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;">
										<?php
											$t = $row['tempatlahir'];
											$d = $row['tgllahir'];
											$newDate = date("d-m-Y", strtotime($d));
											$ttl = $t . ", " . $newDate;
											echo $ttl;
										?>
									</td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Kota</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['kotanz']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Telepon</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['telponnz']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Email</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['email']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Pekerjaan</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['pekerjaan']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Tempat Kerja</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['tempatkerja']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Status Keanggotaan</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['anggota']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Total Lama Tarbiyah</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['tottarbiyah'] . " Tahun"; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Tanggal Pindah ke NZ</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;">
										<?php
											$d = $row['tglpindah'];
											$newDate = date("d-m-Y", strtotime($d));
											echo $newDate;
										?>
									</td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Alasan Pindah</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['alasan']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Status Pernikahan</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['status']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Nama Pasangan</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['partner']; ?></td>
								</tr>

								<tr><td><br></td></tr>

								<tr>
									<td style="text-align:left;"><b>Data Pembina Sebelumnya</b></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Nama Pembina</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['pembina']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Domisili Pembina</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['domisili']; ?></td>
								</tr>

								<tr>
									<td style="text-align:left;vertical-align:top;">Telepon Pembina</td>
									<td style="vertical-align:top;">:</td>
									<td style="text-align:left;vertical-align:top;"><?php echo $row['telponpembina']; ?></td>
								</tr>
<?php
							endwhile;
						}
					}
?>
		  		</table>
		  	</div>
		</div>

	</body>
</html>