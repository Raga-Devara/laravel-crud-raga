<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tambah.css">
    <title>Laravel | Tambah-Data</title>
</head>
<body>
<div class="wrapper">
		<div class="title">
			Tambah Mahasiswa
		</div>
		<form action="/simpan" method="post" class="#">
            {{ csrf_field() }}
			<div class="field">
				<input type="text" name="Nama" required>
				<label>Nama Mahasiswa</label>
			</div>

			<div class="field">
				<input type="text" name="NIM" required>
				<label>NIM</label>
			</div>

			<div class="field">
				<input type="text" name="Jurusan" required>
				<label>Jurusan</label>
			</div>

			<div class="field">
				<input type="submit" value="Submit">
			</div>

            <div class="back">
				<a href="/crud"><--Back</a>
			</div>
		</form>
	</div>
</body>
</html>