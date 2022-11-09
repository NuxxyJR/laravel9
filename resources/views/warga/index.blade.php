<form action="" method="POST" enctype="multipart/form-data">
    <input type="file">
    <button type="submit">upload</button>
</form>
<table border="1">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>NIK</td>
        <td>NO KK</td>
        <td>JENIS KELAMIN</td>
        <td>ALAMAT</td>
    </tr>
    @foreach($warga as $w)
    <tr>
        <td>{{$w->id}}</td>
        <td>{{$w->nama}}</td>
        <td>{{$w->nik}}</td>
        <td>{{$w->no_kk}}</td>
        <td>{{$w->jenis_kelamin}}</td>
        <td>{{$w->alamat}}</td>
    </tr>
    @endforeach
</table>