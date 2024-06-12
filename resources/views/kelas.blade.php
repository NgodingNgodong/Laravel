<B>DATA TABEL KELAS 11 (SEBELAS)</B>
<br>
@session('berhasil')
    <div class="alert alert.berhasil">
        {{ session('berhasil') }}
    </div>
@endsession

@session('galat')
    <div class="alert alert.galat">
        {{ session('galat') }}
    </div>
@endsession

<a href="{{ url('/kelas/create') }}">Tambah data</a>
<table border="1" bordercolor="pink">
    <tr>
    <td>No</td>
    <td>Nama Kelas</td>
    <td>Jurusan</td>
    <td>Lokasi Ruangan</td>
    <td>Nama Wali Kelas</td>
    <td>Hari Libur</td>
    <td colspan="2">Opsi</td>
    </tr>
    @foreach ($kelas as $row)
        <tr>
        <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
        <td>{{ $row->nama_kelas }}</td>
        <td>{{ $row->jurusan }}</td>
        <td>{{ $row->lokasi_ruangan }}</td>
        <td>{{ $row->nama_wali_kelas }}</td>
        <td>{{ $row->hari_libur }}</td>
        <td><a href="{{ url('/kelas/edit/'. $row->id) }}">Edit</td>
            <td>
                <form action="{{ url('/kelas', $row->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>