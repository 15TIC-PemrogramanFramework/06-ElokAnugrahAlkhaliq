<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
				<h4 class="title">Form Jasa Perbaikan</h4>
				<p class="category">Lengkapi form di bawah</p>
			</div>
			<div class="card-content">
				<form action="<?php echo $action; ?>" method="post">
					<div class="form-group label-floating">
						<label class="control-label">NAMA JASA PERBAIKAN</label>
						<input type="text" class="form-control" name="nama_perbaikan" required value="<?php echo $nama_perbaikan;?>" />
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<label>DESKRIPSI PERBAIKAN</label>
							<div class="form-group label-floating">
								<label class="control-label">Masukkan Deskripsi Jasa Perbaikan</label>
								<textarea rows="5" class="form-control" name="deskripsi_perbaikan" required/><?php echo $deskripsi_perbaikan;?></textarea> 
							</div>
						</div>
						</div>
					</div>

					<input type="hidden" name="id" value="<?php echo $id_perbaikan; ?>" />
					<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
					<a href="<?php echo site_url('perbaikan') ?>" class="btn btn-default">Cancel</a>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer') ?>