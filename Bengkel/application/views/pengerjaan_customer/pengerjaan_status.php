<?php $this->load->view('templates/customer_header'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
				<h4 class="title">Detil Pengerjaan</h4>
				<p class="category">Bengkel Rony Vee Wee</p>
			</div>
			<div class="card-content">
				<form action="<?php echo $action; ?>" method="post">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group label-floating">
								<label class="control-label">ID PENGERJAAN</label>
								<input type="text" class="form-control" required value="<?php echo $id_pengerjaan;?>" disabled/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group label-floating">
								<label class="control-label">USERNAME</label>
								<input type="text" class="form-control" required value="<?php echo $usernamee;?>" disabled/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">PERBAIKAN</label>
								<input type="text" class="form-control" required value="<?php echo $id_perbaikann;?>" disabled/>
								</div>
						</div>
						<div class="col-md-2">
							<div class="form-group label-floating">
								<label class="control-label">TANGGAL MASUK</label>
								<input type="date" class="form-control" name="tgl_masuk" required value="<?php echo $tgl_masuk;?>" disabled />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group label-floating">
								<label class="control-label">MEREK</label>
								<input type="text" class="form-control" name="merk" required placeholder="Masukkan Merek" value="<?php echo $merk;?>" disabled/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group label-floating">
								<label class="control-label">JENIS</label>
								<input type="text" class="form-control" name="tipe" required placeholder="Masukkan Jenis" value="<?php echo $tipe;?>" disabled/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group label-floating">
								<label class="control-label">NO. POLISI</label>
								<input type="text" class="form-control" name="nopol" required placeholder="Masukkan Nopol" value="<?php echo $nopol;?>" disabled/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Riwayat Pengerjaan</h4>
						<p class="category">Bengkel Rony Vee Wee</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table">
							<thead class="text-primary">
								<tr>
									<th>Tanggal Pengerjaan</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($status_pengerjaan as $key => $row) {?>
								<tr>
									<td><?php echo tgl_indo($row->tgl_pengerjaan); ?></td>
									<td><?php echo $row->status; ?></td>
										</tr>
										<?php }?>
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<!--<div class="row">
	<form action="<?php echo $action; ?>" method="post">
		<div class="form-group" style="margin-top:20px">
			<label>USERNAME</label>
			<select name="username" class="form-control">
				<?php foreach ($customer as $key => $row) {?>
				<option value="<?php echo $row->username; ?>" <?php if($usernamee==$row->username) echo 'selected="selected"';?> ><?php echo $row->username; ?></option>
				<?php } ?>
			</select>
			
		</div>
		<div class="form-group">
			<label>PERBAIKAN</label>
			<select name="id_perbaikan" class="form-control">
				<?php foreach ($perbaikan as $key => $row) {?>
				<option value="<?php echo $row->id_perbaikan; ?>" <?php if($id_perbaikann==$row->id_perbaikan) echo 'selected="selected"';?> ><?php echo $row->nama_perbaikan; ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>TANGGAL PENGERJAAN</label>
			<input type="date" class="form-control" name="tgl_pengerjaan" required value="<?php echo $tgl_pengerjaan;?>" />
		</div>
		<div class="form-group">
			<label>STATUS PENGERJAAN</label>
			<input type="text" class="form-control" name="status_pengerjaan" required placeholder="Masukkan Status" value="<?php echo $status_pengerjaan;?>" />
		</div>
		<div class="form-group">
			<label>MERK</label>
			<input type="text" class="form-control" name="merk" required placeholder="Masukkan Merk" value="<?php echo $merk;?>" />
		</div>
		<div class="form-group">
			<label>TIPE</label>
			<input type="text" class="form-control" name="tipe" required placeholder="Masukkan Tipe" value="<?php echo $tipe;?>" />
		</div>
		<div class="form-group">
			<label>NO. POLISI</label>
			<input type="text" class="form-control" name="nopol" required placeholder="Masukkan Nopol" value="<?php echo $nopol;?>" />
		</div>

		<input type="hidden" name="id" value="<?php echo $id_pengerjaan; ?>" />
		<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
		<a href="<?php echo site_url('pengerjaan') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>-->
<?php $this->load->view('templates/footer') ?>