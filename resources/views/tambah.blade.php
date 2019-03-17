<!DOCTYPE html>
<html>
<head>
	<title>laravel</title>
</head>
<body>

	
	<h3>Data Film</h3>

	<a href="/film"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/film/store" method="post">
		{{ csrf_field() }}
		id_film <input type="text" name="id_film" required="required"> <br/>
		id_kategori <input type="text" name="id_kategori" required="required"> <br/>
		judul_film <input type="text" name="judul_film" required="required"> <br/>
		tahun_rilis <textarea name="tahun_rilis" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>