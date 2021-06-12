<form action="{{ route('perpus.store') }}" method="post">
    @csrf
    ID RAK: <input type="text" name="id">
    ID BUKU: <input type="text" name="id_buku">
    ID JENIS BUKU: <input type="text" name="id_jenis_buku">
    <button type="submit">Simpan</button>
</form>