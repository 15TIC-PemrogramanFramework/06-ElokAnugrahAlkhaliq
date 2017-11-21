<?php $this->load->view('templates/header'); ?>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header" data-background-color="purple">
				<h4 class="title">Form Customer</h4>
				<p class="category">Lengkapi form di bawah</p>
			</div>
			<div class="card-content">
				<form action="<?php echo $action; ?>" method="post">
					<div class="form-group label-floating">
						<?php if($username != null){ ?>
						<label class="control-label">USERNAME</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username;?>" disabled />
						<input type="hidden" name="username"  value="<?php echo $username;?>" />
						<div class="form-group">
							<label>NAMA CUSTOMER</label>
							<input type="text" class="form-control" name="nama" required placeholder="Masukkan Nama" value="<?php echo $nama;?>" />
						</div>

						<div class="form-group label-floating">
							<label class="control-label">ALAMAT</label>
							<input type="text" class="form-control" name="alamat" required value="<?php echo $alamat;?>" />
						</div>

						<div class="form-group label-floating">
							<label class="control-label">TANGGAL LAHIR</label>
							<input type="date" class="form-control" name="tgl_lahir" required value="<?php echo $tgl_lahir;?>" />
						</div>

						<div class="form-group label-floating">
							<label class="control-label">NO TELEPON</label>
							<input type="text" class="form-control" name="no_hp" required value="<?php echo $no_hp;?>" />
						</div>
						<?php } else {?>

						<label class="control-label label-floating">USERNAME</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username;?>" />
					</div>
					<div class="form-group label-floating">
						<label class="control-label">NAMA CUSTOMER</label>
						<input type="text" class="form-control" name="nama" required value="<?php echo $nama;?>" />
					</div>

					<div class="form-group label-floating">
						<label class="control-label">ALAMAT</label>
						<input type="text" class="form-control" name="alamat" required value="<?php echo $alamat;?>" />
					</div>

					<div class="form-group">
						<label class="control-label">TANGGAL LAHIR</label>
						<input type="date" class="form-control" name="tgl_lahir" required value="<?php echo $tgl_lahir;?>" />
					</div>

					<div class="form-group label-floating">
						<label class="control-label">NO TELEPON</label>
						<input type="text" class="form-control" name="no_hp" required value="<?php echo $no_hp;?>" />
					</div>
					<?php }?>


					<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
					<a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a>
				</form>
			</div>
		</div>
</div>
</div>
<?php $this->load->view('templates/footer') ?>