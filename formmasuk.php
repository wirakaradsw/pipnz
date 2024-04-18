<?php

	include 'db.php';

	$issubmit = 0;

	if(!empty($_POST)) {
		$issubmit = $_POST['submitting'];
		if ($issubmit == 1) {
			$nama = $_POST['nama'];
			$tempatlahir = $_POST['tempatlahir'];
			$tgllahir = $_POST['tgllahir'];
			$kotanz = $_POST['kotanz'];
			$telponnz = $_POST['telponnz'];
			$email = $_POST['email'];
			$pekerjaan = $_POST['pekerjaan'];
			$tempatkerja = $_POST['tempatkerja'];
			$anggota = $_POST['anggota'];
			$tottarbiyah = $_POST['tottarbiyah'];
			$tglpindah = $_POST['tglpindah'];
			$alasan = $_POST['alasan'];
			$status = $_POST['status'];
			$partner = $_POST['partner'];	
			$pembina = $_POST['pembina'];
			$domisili = $_POST['domisili'];
			$telponpembina = $_POST['telponpembina'];
			$aktif = $_POST['aktif'];

			$sql = "INSERT INTO masuk (nama, tempatlahir, tgllahir, kotanz, telponnz, email, pekerjaan, tempatkerja,
										anggota, tottarbiyah, tglpindah, alasan, status, partner,
										pembina, domisili, telponpembina, aktif)
					VALUES ('$nama', '$tempatlahir', '$tgllahir', '$kotanz', '$telponnz', '$email', '$pekerjaan', '$tempatkerja',
							'$anggota', '$tottarbiyah', '$tglpindah', '$alasan', '$status', '$partner',
							'$pembina', '$domisili', '$telponpembina', '$aktif')";

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
		  <h1>Form Kelengkapan Data Kader di New Zealand</h1>
		</div>

		<div style="overflow:auto;background-color:white;">
		  	<div class="main">
<?php
				if ($issubmit == 0) {
?>
			  		<br>
				    <form name="formisian" method="post" action="formmasuk.php">
				    	<input type="hidden" name="submitting" value="1">
				    	<label><b>Data Pribadi : </b></label>
				    	<hr />

				    	<label for="nama">Nama Lengkap : </label>
				    	<input type="text" id="nama" name="nama" style="width:360px;font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="tempatlahir">Tempat Lahir : </label>
				    	<input type="text" id="tempatlahir" name="tempatlahir" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="tgllahir">Tanggal Lahir : </label>
				    	<input type="date" name="tgllahir" id="tgllahir" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="kotanz">Kota Menetap di NZ : </label>
				    	<select name="kotanz" id="kotanz" style="font-size:100%;font-family:Poppins;">
							<option value="">--Pilih Kota--</option>
							<option value="Auckland">Auckland</option>
							<option value="Wellington">Wellington</option>
							<option value="Christchurch">Christchurch</option>
							<option value="Hamilton">Hamilton</option>
							<option value="Napier-Hastings">Napier-Hastings</option>
							<option value="Tauranga">Tauranga</option>
							<option value="Dunedin">Dunedin</option>
							<option value="Palmerston North">Palmerston North</option>
							<option value="Nelson">Nelson</option>
							<option value="New Plymouth">New Plymouth</option>
							<option value="Invercargill">Invercargill</option>
							<option value="Queenstown">Queenstown</option>
							<option value="Lain-Lain">Lain-Lain</option>
						</select>
				    	<hr />

				    	<label for="telponnz">No. Telepon : </label>
				    	<input type="text" id="telponnz" name="telponnz" style="font-size:100%;font-family:Poppins;">
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

				    	<label for="tottarbiyah">Total Lama Tarbiyah : </label>
				    	<input type="number" step="any" id="tottarbiyah" name="tottarbiyah" style="width:50px;font-size:100%;font-family:Poppins;">
				    	<label>Tahun</label>
				    	<hr />

				    	<label for="tglpindah">Tanggal Pindah ke NZ : </label>
				    	<input type="date" id="tglpindah" name="tglpindah" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="alasan">Alasan Pindah : </label>
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

				    	<label><b>Data Pembina Sebelumnya : </b></label>
				    	<hr />

				    	<label for="pembina">Nama Pembina : </label>
				    	<input type="text" id="pembina" name="pembina" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="domisili">Domisili Pembina : </label>
				    	<input type="text" id="domisili" name="domisili" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<label for="telponpembina">No. Telepon Pembina : </label>
				    	<input type="text" id="telponpembina" name="telponpembina" style="font-size:100%;font-family:Poppins;">
				    	<hr />

				    	<input type="hidden" name="aktif" value="1">

						<input type="submit" name="dataisian" value="Kirim" size="50%" style="font-size:100%;font-family:Poppins;">
					</form>
					<br>
<?php
				} else {
?>
					<form name="resetform" method="post" action="formmasuk.php">
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