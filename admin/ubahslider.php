<h2>Ubah Slider</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM slider WHERE id='$_GET[id]'");
$pecah=$ambil->fetch_assoc();

?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		  <label>Deskripsi</label>
		  <input type="text" name="deskripsi" class="form-control" value="<?php echo $pecah['deskripsi'];?>">
	</div>


	<div class="form-group">
		<img src="../assets/slider/<?php echo $pecah['gambar']?>" width="200">
	</div>

	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>

	<div class="form-group">
		<label>Urutan</label>
        <input type="text" name="urutan" class="form-control" value="<?php echo $pecah['urutan'];?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
		if (isset($_POST['ubah']))
		
		{
			$namafoto=$_FILES ['foto']['name'];
			$lokasifoto=$_FILES ['foto'] ['tmp_name'];
			//Jika foto dirubah

			if (!empty($lokasifoto))
			{
				move_uploaded_file($lokasifoto, "../assets/slider/$namafoto");

				$koneksi->query("UPDATE slider SET deskripsi='$_POST[deskripsi]',gambar='$namafoto',urutan='$_POST[urutan]' WHERE id_produk='$_GET[id]'");	
			}

			else
			{
				$koneksi->query("UPDATE slider SET deskripsi='$_POST[deskripsi]',urutan='$_POST[urutan]' WHERE id_produk='$_GET[id]'");	
			}
				echo "<script>alert('Data slider telah diubah');</script>";
				echo "<script>location='index.php?halaman=slider';</script>";

			}
