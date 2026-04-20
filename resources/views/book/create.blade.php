<form action="/book" method="POST">
    @csrf
    <input type="text" name="judul" placeholder="Judul Buku">
    <input type="text" name="penulis" placeholder="Penulis">
    <input type="text" name="penerbit" placeholder="Penerbit">
    <input type="number" name="tahun_terbit" placeholder="Tahun Terbit">
    <input type="number" name="stok" placeholder="Stok">
    <button type="submit">Simpan</button>
</form>