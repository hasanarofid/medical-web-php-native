
<h2>Tambah Category</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>nama</label>
        <input type="text" class="form-control" name="nama">
    </div>

    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    
    <div class="form-group">
        <label>Status</label>
        <input type="checkbox" name="status" id="status" value="1">
    </div>
    
    <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
if (isset($_POST['save'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../assets/gambar_category/" . $nama);

    $query = "INSERT INTO category (name, gambar, status) VALUES ('$_POST[nama]', '$nama', '$_POST[status]')";
    $result = $koneksi->query($query);

    if ($result) {
        echo "<div class='alert alert-info'>Data tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=category'>";
    } else {
        echo "<div class='alert alert-danger'>Gagal menyimpan data: " . $koneksi->error . "</div>";
    }
}