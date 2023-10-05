<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12 mt-3">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Nama <strong> Berhasil </strong><?= $this->session->flashdata('flash'); ?>.
				</div>
			</div>
		</div>
	<?php endif ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table mt-2">
					<thead class="thead-light">
						<tr>
							<th scope="col">Device id</th>
							<th scope="col">Nama</th>
							<th scope="col">Edit</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($nama as $nm) : ?>
							<tr>
								<td><?= $nm['id_device']; ?></td>
								<td><?= $nm['nama']; ?></td>
								<td>
									<a href="<?= base_url(); ?>C_Nama/edit/<?= $nm['id_device']; ?>" class="badge badge-primary">Edit</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>