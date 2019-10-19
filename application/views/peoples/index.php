<div class="container">
	<div class="row">
		<div class="col-md-10">

		<h3 class="nt-3">List of peoples</h3>

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