<div class="container">
	<div class="row mt-3">
		<div class="col-md-6 mx-auto">

			<div class="card">
				<div class="card-header">
					Form Edit Nama
				</div>
				<div class="card-body">
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $nama['id_device']; ?>">
						<div class="form-group">
							<label for="nama">Nama Atlet</label>
							<input type="text" class="form-control" name="nama" id="nama" value="<?= $nama['nama']; ?>">
							<small class="form-text text-danger"><?= form_error('nama'); ?></small>
						</div>
						<button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
						<a href="<?= base_url(); ?>/C_Nama" class="btn btn-secondary float-right mr-3">Kembali</a>
					</form>

				</div>
			</div>

		</div>
	</div>
</div>