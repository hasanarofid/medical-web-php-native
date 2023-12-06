<h2>Data Category</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>Gambar</th>
			<th>status</th>
			<th>Aktion</th>
		</tr>
	</thead>
	<tbody>

		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM category"); ?>
		<?php while($pecah = $ambil -> fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['name']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
            <td>
				<img src="../assets/gambar_category/<?php echo $pecah['gambar']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapuscategory&id=<?php echo $pecah['id']; ?>" class="btn-danger btn">hapus </a>
				<a href="index.php?halaman=ubahcategory&id=<?php echo $pecah['ud'];?>" class="btn btn-warning">ubah </a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahcategory" class = "btn btn-primary">Tambah Data</a>