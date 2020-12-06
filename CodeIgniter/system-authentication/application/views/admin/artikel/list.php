<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
	<div>
		<a href="<?php echo site_url('admin/artikel/add') ?>"><i class="fas fa-plus"></i> Add New</a>
	</div>
	<table border = "1px" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Id Artikel</th>
				<th>Judul</th>
				<th>Isi</th>
				<th>Id User</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($artikel as $value): ?>
			<tr>
				<td width="150">
					<?php echo $value->id_artikel ?>
				</td>
				<td>
					<?php echo $value->judul ?>
				</td>
				<td>
					<?php echo $value->isi ?>
				</td>
				<td>
					<?php echo $value->id_user ?>
				</td>
				<td width="250">
					<a href="<?php echo site_url('admin/artikel/edit/'.$value->id_artikel)?>">Edit</a>
					<a href="<?php echo site_url('admin/artikel/delete/'.$value->id_artikel) ?>">Hapus</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="<?php echo site_url('admin/login/logout/')?>">Logout</a>
</body>
</html>
