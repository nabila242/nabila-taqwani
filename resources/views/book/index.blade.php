<a href="/book/create">Tambah Data</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($books as $index => $b)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->penerbit }}</td>
        <td>{{ $b->tahun_terbit }}</td>
        <td>{{ $b->stok }}</td>
        <td>
            <a href="/book/{{ $b->id }}/edit">Edit</a>
            
            <form action="/book/{{ $b->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>