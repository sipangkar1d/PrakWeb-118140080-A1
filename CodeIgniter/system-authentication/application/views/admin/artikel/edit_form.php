<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
	<?php if ($this->session->flashdata('success')): ?>
	<div role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>
	<div>
		<a href="<?php echo site_url('admin/artikel/') ?>"><i class="fas fa-arrow-left"></i>Back</a>
	</div>
	<div>
		<form action="<?php base_url(" admin/artikel/edit") ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $artikel->id_artikel?>"/>
			<div>
				<label for="judul">Judul</label>
				<input <?php echo form_error('judul') ? 'is-invalid':'' ?>" type="text" name="judul" value="<?php echo $artikel->judul?>">
				<div>
					<?php echo form_error('judul') ?>
				</div>
			</div>
			<div>
				<label for="isi">Isi</label>
				<textarea name="isi"><?php echo $artikel->isi?></textarea>
				<div>
					<?php echo form_error('isi') ?>
				</div>
			</div>
			<input type="hidden" name="id_user" value="<?php echo $artikel->id_user?>"/>
			<input type="submit" name="btn" value="Save" />
		</form>
	</div>
</body>
</html>
