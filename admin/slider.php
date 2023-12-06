<h2>Data Slider</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>Gambar</th>
			<th>urutan</th>
			<th>Aktion</th>
		</tr>
	</thead>
	<tbody>

		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM slider"); ?>
		<?php while($pecah = $ambil -> fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['deskripsi']; ?></td>
			<td><?php echo $pecah['urutan']; ?></td>
            <td>
				<img src="../assets/slider/<?php echo $pecah['gambar']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusslider&id=<?php echo $pecah['id']; ?>" class="btn-danger btn">hapus </a>
				<a href="index.php?halaman=ubahslider&id=<?php echo $pecah['id'];?>" class="btn btn-warning">ubah </a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahslider" class = "btn btn-primary">Tambah Data</a>