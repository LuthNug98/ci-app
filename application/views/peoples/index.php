<div class="container">
	<h3 class="mt-3">List of peoples</h3>


	<div class="row">
		<div class="col-md-5">
			<form action="<?php echo base_url('peoples'); ?>" method="post">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Search Keyword.." name="keyword" autocomplete="off" autofocus>
			  <div class="input-group-append">
			    <input class="btn btn-primary" type="submit" name="submit"></button>
			 </div>
			  </div>
			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-md-10">
			<h5>Result : <?php echo $total_rows; ?> </h5>
		   <table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>	
			</thead>
			<tbody>
				<?php if(empty($peoples)) : ?>
					<tr>
						<td colspan="4">
							<div class="alert alert-danger" role="alert">
							  data not found!
							</div>
						</td>
					</tr>
				<?php endif; ?>	
				<?php foreach ($peoples as $peoples) : ?>
				<tr>
					<th><?php echo ++$start; ?></th>
					<td><?php echo $peoples['name']; ?></td>
					<td><?php echo $peoples['email']; ?></td>
					<td>
						<a href="" class="badge badge-warning">detail</a>
						<a href="" class="badge badge-success">edit</a>
						<a href="" class="badge badge-danger">delete</a>
					</td>
				</tr>
			<?php endforeach;?>
			</tbody>
		</table>

		<?php echo $this->pagination->create_links(); ?>
			
		</div>
	</div>
</div>