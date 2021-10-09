<?= $this->extend('static'); ?>
<?= $this->section('content'); ?>
<!-- Page-Title -->
<div class="row">
	<div class="col-sm-12">
		<h4 class="page-title"><?= $title; ?></h4><br>
	</div>
</div>


<div class="row">
	<div class="col-sm-12">
		<div class="card-box table-responsive">
			<h5><a class="btn btn-primary" href="/home/tambah">Tambah</a></h5>

			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nim</th>
						<th>Nama</th>
						<th>Fakultas</th>
						<th>Jurusan</th>
						<th style="text-align:center">Aksi</th>
					</tr>
				</thead>


				<tbody>
					<?php $no = 1;
					foreach ($mhs as $m) { ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $m->nim; ?></td>
							<td><?= $m->nama; ?></td>
							<td><?= $m->fakultas; ?></td>
							<td><?= $m->jurusan; ?></td>
							<td style="text-align:center">
								<a href="/home/edit/<?= $m->nim;?>" class="on-default edit-row"><i class="fa fa-pencil"></i></a> | 
	                            <a href="/home/hapus/<?= $m->nim; ?>" class="on-default remove-row" onclick="return confirm('Anda Yakin ?');"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- end row -->
<?= $this->endSection(); ?>