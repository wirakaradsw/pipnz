<?php

	include 'db.php';
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=1" />
	</head>
	<body style="font-family:Poppins;background-color:#101820;">

		<div style="background-color:#fe5000;padding:15px;text-align:center;">
		  <h1><a href="index.php">Data Mutasi Kader dari New Zealand</a></h1>
		</div>

		<div style="overflow:auto;background-color:white;">
		  	<div class="main">
<?php
				if(!empty($_POST)) {
					$user = $_POST['user'];
					$password = $_POST['password'];	

					$sql = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";

					$q = $db->query($sql);

					if ($q->rowCount() > 0) {
?>
						<table width="1000px" border="0" align="center" cellpadding="10" cellspacing="1" style="background-color:white;">
							<tr style="background-color:#ffa500;">
								<td>ID</td>
								<td>NAMA</td>
								<td>TANGGAL PINDAH</td>
								<td>PEMBINA</td>
							</tr>
<?php 
							$sql = "SELECT * FROM mutasi";

							$q = $db->query($sql);

							if ($q->rowCount() > 0) {
								while ($row = $q->fetch()):
?>
									<tr style="background-color:#FFD580;">
										<td>
											<?php
												$id = $row['no'];
												$nama = $row['nama'];
											?>
											<form target="print_popup" name="tampilkansurat" method="post" action="suratmutasi.php" onsubmit="window.open('about:blank','print_popup','width=833,height=1179');">
												<input type="hidden" name="no" value="<?php echo $id;?>">
												<input type="hidden" name="nama" value="<?php echo $nama;?>">
												<input type="submit" name="idsurat" value="<?php echo $id;?>" size="50%" style="font-size:100%;font-family:Poppins;">
											</form>
										</td>
										<td style="text-align:left;"><?php echo $row['nama']; ?></td>
										<td><?php echo $row['tglpindah']; ?></td>
										<td style="text-align:left;"><?php echo $row['pembina']; ?></td>
									</tr>
<?php 
								endwhile;
							}
?>
					  	</table>
					  	<br>
<?php 	
					} else {
?>
						<h3>Access Denied</h3>
						<br>

					    <form name="resetform" method="post" action="index.php">
							<input type="submit" name="resetkembali" value="<< Kembali" size="50%" style="font-size:100%;font-family:Poppins;">
						</form>
						<br>
<?php
					}
				}
?>		  		
		  	</div>
		</div>
	</body>
</html>