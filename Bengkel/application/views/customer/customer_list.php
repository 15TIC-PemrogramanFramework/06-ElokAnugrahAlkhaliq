<?php $this->load->view('templates/header'); ?>
<?php //print_r($data_mahasiswa) ?>
<div class="row">
	<div class="col-md-12 text-right">
		<?php echo anchor(site_url('customer/tambah'),
			'<i class="material-icons">add</i> Tambah Jenis Customer',
			'class="btn btn-success"');?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" data-background-color="purple">
					<h4 class="title">Daftar Customer(</h4>
					<p class="category">Bengkel Rony Vee Wee</p>
				</div>
				<div class="card-content table-responsive">
					<table class="table">
						<thead class="text-primary">
							<tr>
								<th>Username</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Tanggal Lahir</th>
								<th>Nomor Telepon</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_customer as $key => $row) {?>
							<tr>
								<td><?php echo $row->username; ?></td>
								<td><?php echo $row->nama; ?></td>
								<td><?php echo $row->alamat; ?></td>
								<td><?php echo tgl_indo($row->tgl_lahir); ?></td>
								<td><?php echo $row->no_hp; ?></td>
								<td align="center">
									<?php echo anchor(site_url('customer/edit/'.$row->username),
										'<i class="material-icons">edit</i>',
										'<button type="button" rel="tooltip" title="Ubah" class="btn btn-primary btn-simple btn-xs"'); ?>
									<?php echo anchor(site_url('customer/delete/'.$row->username),
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