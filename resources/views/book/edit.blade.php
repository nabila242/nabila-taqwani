<form action="/book/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="judul" value="{{ $book->judul }}">
    <input type="text" name="penulis" value="{{ $book->penulis }}">
    <input type="text" name="penerbit" value="{{ $book->penerbit }}">
    <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}">
    <input type="number" name="stok" value="{{ $book->stok }}">

    <button type="submit">Update</button>
</form>