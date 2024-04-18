<?php

	include 'db.php';

	$issubmit = 0;

	if(!empty($_POST)) {
		$issubmit = $_POST['submitting'];
		if ($issubmit == 1) {
			$nama = $_POST['nama'];
			$tempatlahir = $_POST['tempatlahir'];
			$tgllahir = $_POST['tgllahir'];
			$alamatindo = $_POST['alamatindo'];
			$telponindo = $_POST['telponindo'];
			$email = $_POST['email'];
			$pekerjaan = $_POST['pekerjaan'];
			$tempatkerja = $_POST['tempatkerja'];
			$anggota = $_POST['anggota'];
			$tarbiyahnz = $_POST['tarbiyahnz'];
			$tottarbiyah = $_POST['tottarbiyah'];
			$tglpindah = $_POST['tglpindah'];
			$alasan = $_POST['alasan'];
			$status = $_POST['status'];
			$partner = $_POST['partner'];	
			$pembina = $_POST['pembina'];
			$domisili = $_POST['domisili'];
			$telponpembina = $_POST['telponpembina'];

			$sql = "INSERT INTO mutasi (nama, tempatlahir, tgllahir, alamatindo, telponindo, email, pekerjaan, tempatkerja,
										anggota, tarbiyahnz, tottarbiyah, tglpindah, alasan, status, partner,
										pembina, domisili, telponpembina)
					VALUES ('$nama', '$tempatlahir', '$tgllahir', '$alamatindo', '$telponindo', '$email', '$pekerjaan', '$tempatkerja',
							'$anggota', '$tarbiyahnz', '$tottarbiyah', '$tglpindah', '$alasan', '$status', '$partner',
							'$pembina', '$domisili', '$telponpembina')";

			$db->query($sql);
		}
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=3" />
	</head>
	<body style="font-family:Poppins;background-color:#101820;">

		<div style="background-color:#fe5000;padding:15px;text-align:center;">
		  <h1>Form Kelengkapan Data Mutasi Kader dari New Zealand</h1>
		</div>

		<div style="overflow:auto;background-color:white;">
		  	<div class="main">
<?php
				if ($issubmit == 0) {
?>
			  		<br>
				    <form name="formisian" method="post" action="formmutasi.php">
				    	<input type="hidden" name="submitting" value="1">
				    	<label for="nama">Nama Lengkap : </label>
				    	<input type="text" id="nama" name="nama" style="width:360px;font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="tempatlahir">Tempat Lahir : </label>
				    	<input type="text" id="tempatlahir" name="tempatlahir" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="tgllahir">Tanggal Lahir : </label>
				    	<input type="date" name="tgllahir" id="tgllahir" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="alamatindo">Alamat Mutasi : </label>
				    	<textarea id="alamatindo" name="alamatindo" cols="40" rows="3" style="vertical-align:top;font-size:100%;font-family:Poppins;"></textarea>
				    	<hr />

				    	<label for="telponindo">No. Telepon : </label>
				    	<input type="text" id="telponindo" name="telponindo" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="email">Email : </label>
				    	<input type="text" id="email" name="email" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="pekerjaan">Pekerjaan : </label>
				    	<input type="text" id="pekerjaan" name="pekerjaan" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="tempatkerja">Tempat Kerja : </label>
				    	<input type="text" id="tempatkerja" name="tempatkerja" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="anggota">Status Keanggotaan : </label>
				    	<select name="anggota" id="anggota" style="font-size:100%;font-family:Poppins;">
						    <option value="">--Pilih Jenjang Anggota--</option>
						    <option value="Anggota Utama">Anggota Utama</option>
						    <option value="Anggota Dewasa">Anggota Dewasa</option>
						    <option value="Anggota Madya">Anggota Madya</option>
						    <option value="Anggota Pratama">Anggota Pratama</option>
						    <option value="Anggota Muda">Anggota Muda</option>
						    <option value="Anggota Siaga">Anggota Siaga</option>
						    <option value="Anggota Pemula">Anggota Pemula</option>
						</select>
						  <hr />

				    	<label for="tarbiyahnz">Lama Tarbiyah di NZ : </label>
				    	<input type="number" step="any" id="tarbiyahnz" name="tarbiyahnz" style="width:50px;font-size:100%;font-family:Poppins;">
				    	<label>Tahun</label>
				    	<hr />

				    	<label for="tottarbiyah">Total Lama Tarbiyah : </label>
				    	<input type="number" step="any" id="tottarbiyah" name="tottarbiyah" style="width:50px;font-size:100%;font-family:Poppins;">
				    	<label>Tahun</label>
				    	<hr />

				    	<label for="tglpindah">Tanggal Pindah dari NZ : </label>
				    	<input type="date" id="tglpindah" name="tglpindah" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="alasan">Alasan Mutasi : </label>
				    	<textarea id="alasan" name="alasan" cols="40" rows="3" style="vertical-align:top;font-size:100%;font-family:Poppins;"></textarea>
				    	<hr />

				    	<label for="status">Status Pernikahan : </label>
				    	<select name="status" id="status" style="font-size:100%;font-family:Poppins;">
						    <option value="">--Pilih Status--</option>
						    <option value="Menikah">Menikah</option>
						    <option value="Tidak Menikah">Tidak Menikah</option>
						</select>
				    	<hr />

				    	<label for="partner">Nama Pasangan : </label>
				    	<input type="text" id="partner" name="partner" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="pembina">Nama Pembina : </label>
				    	<select name="pembina" id="pembina" style="font-size:100%;font-family:Poppins;">
						    <option value="">--Pilih Pembina--</option>
						    <option value="Mico Yustika">Mico Yustika</option>
						    <option value="Wirasatya Adhikara">Wirasatya Adhikara</option>
						    <option value="Adhisti">Adhisti</option>
						    <option value="Rahajeng Aditya">Rahajeng Aditya</option>
						</select>
				    	<hr />

				    	<label for="domisili">Domisili Pembina : </label>
				    	<select name="domisili" id="domisili" style="font-size:100%;font-family:Poppins;">
						    <option value="">--Pilih Domisili--</option>
						    <option value="Australia">Australia</option>
						    <option value="New Zealand">New Zealand</option>
						    <option value="Indonesia">Indonesia</option>
						</select>
				    	<hr />

				    	<label for="telponpembina">No. Telepon Pembina : </label>
				    	<select name="telponpembina" id="telponpembina" style="font-size:100%;font-family:Poppins;">
						    <option value="">--Pilih No. Telepon--</option>
						    <option value="+61 412 277 468">+61 412 277 468 (Mico)</option>
						    <option value="+64 21 236 4539">+64 21 236 4539 (Wira)</option>
						    <option value="+64 21 235 3680">+64 21 235 3680 (Adhis)</option>
						    <option value="+62 812 1370 3191">+62 812 1370 3191(Ajeng)</option>
						</select>
				    	<hr />

						<input type="submit" name="dataisian" value="Kirim" size="50%" style="font-size:100%;font-family:Poppins;">
					</form>
					<br>
<?php
				} else {
?>
					<form name="resetform" method="post" action="formmutasi.php">
				    	<input type="hidden" name="submitting" value="0"><br>
						<input type="submit" name="resetisian" value="<< Isi Form Mutasi Lagi" size="50%" style="font-size:100%;font-family:Poppins;">
					</form>
					<br>
<?php
				}
?>	
		  	</div>
		</div>
	</body>
</html>