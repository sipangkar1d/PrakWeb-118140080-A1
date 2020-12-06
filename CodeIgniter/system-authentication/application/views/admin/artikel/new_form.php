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
		<a href="<?php echo site_url('admin/artikel/') ?>"> Back</a>
	</div>
		<form action="<?php base_url('admin/artikel/add') ?>" method="post" enctype="multipart/form-data" >
			<div>
				<label for="id_artikel">Id Artikel*</label>
				<input <?php echo form_error('id_artikel') ? 'is-invalid':'' ?>"
				type="text" name="id_artikel"/>
				<div>
					<?php echo form_error('id_artikel') ?>
				</div>
			</div>				
			<div>
				<label for="judul">Judul</label>
				<input <?php echo form_error('judul') ? 'is-invalid':'' ?>" type="text" name="judul"/>
			<div>
				<?php echo form_error('judul') ?>
			</div>
			<div>
				<label for="isi">Isi</label>
				<textarea <?php echo form_error('isi') ? 'is-invalid':'' ?>" name="isi" ></textarea>
				<div>
					<?php echo form_error('isi') ?>
				</div>
			</div>
			<div>
				<label for="id_user">Id User</label>
				<input type="text" name="id_user" />
				<div>
					<?php echo form_error('id_user') ?>
				</div>
			</div>
			<input type="submit" name="btn" value="Save" />
		</form>
		<div>
			* required fields
		</div>
</body>
</html>