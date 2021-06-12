<form action="{{ url('perpus/' . $perpus->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    ID RAK: <input type="text" name="id" value="{{ $perpus->id }}">
    ID BUKU: <input type="text" name="id_buku" value="{{ $perpus->id_buku }}">
    ID JENIS BUKU: <input type="text" name="id_jenis_buku" value="{{ $perpus->id_jenis_buku }}">
    <button type="submit">Simpan</button>
</form>