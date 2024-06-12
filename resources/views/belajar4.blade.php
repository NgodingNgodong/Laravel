Belajar Laravel, saya senang sekali!
<br>
<table border="1">
    <tr>
    <td>No</td>
    <td>Nama Lengkap</td>
    <td>Jenis Kelamin</td>
    <td>Golongan Darah</td>
    </tr>
    @foreach ($siswa as $row)
        <tr>
        <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
        <td>{{ $row->nama_lengkap }}</td>
        <td>{{ $row->jk }}</td>
        <td>{{ $row->golongan_darah }}</td>
        </tr>
    @endforeach
</table>