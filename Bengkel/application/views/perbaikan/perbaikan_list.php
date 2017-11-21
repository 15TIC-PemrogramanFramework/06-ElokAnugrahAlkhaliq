<?php $this->load->view('templates/header'); ?>
<?php //print_r($data_mahasiswa) ?>
<div class="row">
	<div class="col-md-12 text-right">
		<?php echo anchor(site_url('perbaikan/tambah'),
						'<i class="material-icons">add</i> Tambah Jasa Perbaikan',
						'class="btn btn-success"');?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
				<h4 class="title">Daftar Jenis Jasa Perbaikan</h4>
				<p class="category">Bengkel Rony Vee Wee</p>
			</div>
			<div class="card-content table-responsive">
				<table class="table">
					<thead class="text-primary">
							<tr>
								<th>ID Perbaikan</th>
								<th>Nama Perbaikan</th>
								<th>Deskripsi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_perbaikan as $key => $row) {?>
							<tr>
								<td><?php echo $row->id_perbaikan; ?></td>
								<td><?php echo $row->nama_perbaikan; ?></td>
								<td><?php echo $row->deskripsi_perbaikan; ?></td>
								<td class="td-actions text-right">
									<?php echo anchor(site_url('perbaikan/edit/'.$row->id_perbaikan),
										'<i class="material-icons">edit</i>',
										'<button type="button" rel="tooltip" title="Ubah" class="btn btn-primary btn-simple btn-xs"'); ?>
									<?php echo anchor(site_url('perbaikan/delete/'.$row->id_perbaikan),
										'<i class="material-icons">close</i>',
										'<button type="button" rel="tooltip" title="Hapus" class="btn btn-danger btn-simple btn-xs"'); ?>
									</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
					</div>
				</div>

			</div>
			<?php $this->load->view('templates/footer') ?>
			<script type="text/javascript">
				$(document).ready(function(){
					$('#example').DataTable();
				});
			</script>