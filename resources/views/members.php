@foreach ($datafilm as $row)

<table border="2">
<tr>
<td>{{  $row->id_members }}</td>
<td>{{  $row->nama_members }}</td>
<td>{{  $row->umur }}</td>
<td>{{  $row->alamat }}</td>
</tr>
@endforeach