<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
				<h4 class="title">Form Status Pengerjaan</h4>
				<p class="category">Lengkapi form di bawah</p>
			</div>
			<div class="card-content">
				<form action="<?php echo $action; ?>" method="post">
					<div class="row">
						<div class="col-md-3" style="margin-top:20px">
							<div class="form-group label-floating">
								<label class="control-label">ID PENGERJAAN</label>
								<input type="text" class="form-control" name="id_pengerjaan" required placeholder="PNGJ" value="<?php echo $id_pengerjaann;?>" disabled />
								<input type="hidden" name="id_pengerjaan" value="<?php echo $id_pengerjaann;?>" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">TANGGAL</label>
								<input type="date" class="form-control" name="tgl_pengerjaan" value="<?php echo date('Y-m-d');?>" required placeholder="Masukkan Tanggal" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group label-floating">
								<label class="control-label">STATUS</label>
								<select name="status" class="form-control">
									<option value="Mobil diterima di bengkel" >Mobil diterima di bengkel</option>
								</select>
							</div>
						</div>
					</div>

					<input type="hidden" name="id" value="" />
					<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
					<a href="<?php echo site_url('pengerjaan') ?>" class="btn btn-default">Cancel</a>

				</div>
			</form>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('templates/footer') ?>