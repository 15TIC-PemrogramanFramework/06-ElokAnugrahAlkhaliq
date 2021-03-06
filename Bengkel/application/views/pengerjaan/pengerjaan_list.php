<?php $this->load->view('templates/header'); ?>
<?php //print_r($data_mahasiswa) ?>
<div class="row">
	<div class="col-md-12 text-right">
		<?php echo anchor(site_url('pengerjaan/tambah'),
			'<i class="material-icons">add</i> Tambah Pengerjaan',
			'class="btn btn-success"');?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="purple">
					<h4 class="title">Daftar Pengerjaan</h4>
					<p class="category">Bengkel Rony Vee Wee</p>
				</div>
				<div class="card-content table-responsive">
					<table class="table">
						<thead class="text-primary">
							<tr>
								<th>ID Pengerjaan</th>
								<th>Username</th>
								<th>Nama Perbaikan</th>
								<th>Tanggal Masuk</th>
								<th>Merek</th>
								<th>Jenis</th>
								<th>No. Polisi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_pengerjaan as $key => $row) {?>
							<tr>
								<td><?php echo $row->id_pengerjaan; ?></td>
								<td><?php echo $row->username; ?></td>
								<td><?php echo $row->nama_perbaikan; ?></td>
								<td><?php echo tgl_indo($row->tgl_masuk); ?></td>
								<td><?php echo $row->merk; ?></td>
								<td><?php echo $row->tipe; ?></td>
								<td><?php echo $row->nopol; ?></td>
								<td class="td-actions text-right">
									<?php echo anchor(site_url('pengerjaan/edit_riwayat/'.$row->id_pengerjaan),
										'<i class="material-icons">history</i>',
										'<button type="button" rel="tooltip" title="Detil" class="btn btn-info btn-simple btn-xs"'); ?>
									<?php echo anchor(site_url('pengerjaan/edit/'.$row->id_pengerjaan),
										'<i class="material-icons">edit</i>',
										'<button type="button" rel="tooltip" title="Ubah" class="btn btn-primary btn-simple btn-xs"'); ?>
									<?php echo anchor(site_url('pengerjaan/delete/'.$row->id_pengerjaan),
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