
<div class="container">
	<?php if ($this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Mahasiswa <strong>berhasil</strong> <?php echo $this->session->flashdata('flash'); ?>.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
		</div>
	</div>
  <?php endif; ?>

	<div class="row  mt-3">
		<div class="col-md-6">
			<a href="<?php echo base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<di class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</di>

	<div class="row mt-3">
 		<div class="col-md-6">
			<h3>Daftar Mahasiswa</h3>
			<?php if( empty($mahasiswa) ) : ?>
				<div class="alert alert-danger" role="alert">
					data mahasiswa tidak ditemukan.
				</div>
			<?php endif;?>
			<ul class="list-group">
			<?php foreach ($mahasiswa as $mhs) : ?>
			  <li class="list-group-item">
			  	<?php echo $mhs['nama']; ?>
			  	<a href="<?php echo base_url(); ?>mahasiswa/hapus/<?php echo $mhs['id']; ?>" class = "badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>	
			  	<a href="<?php echo base_url(); ?>mahasiswa/ubah/<?php echo $mhs['id']; ?>" class = "badge badge-success float-right">ubah</a>
			  	<a href="<?php echo base_url(); ?>mahasiswa/detail/<?php echo $mhs['id']; ?>" class = "badge badge-primary float-right">detail</a>		
			  </li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>