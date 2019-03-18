<!DOCTYPE html>
<html>
<head>
	<title>Film</title>
</head>
<body>


	<h3>Edit Film</h3>

	<a href="/film"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($film as $row)
	<form action="/film/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $row->id_film }}"> <br/>
		id film <input type="text" required="required" name="id_film" value="{{ $row->id_film }}"> <br/>
		id kategori <input type="text" required="required" name="id_kategori" value="{{ $row->id_kategori }}"> <br/>
	    judul film <input type="text" required="required" name="judul_film" value="{{ $row->judul_film }}"> <br/>
		tahun rilis <textarea required="required" name="tahun_rilis">{{ $row->tahun_rilis }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>