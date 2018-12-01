<section class="content">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<?php if(isset($_SESSION['message'])) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success !</h4>
					<p><?php echo $_SESSION['message'] ?></p>
				</div>
			<?php } ?>
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">All Users</h3>
				</div>
				<div class="box-body">
					<table id="users-table" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Pic</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $item):?>
							<tr>
								<td><?php echo $item->name ?></td>
								<td><?php echo $item->email ?></td>
								<td>
									<img class="img img-responsive" src="<?php echo $item->img_url ?>" style="width: 50px; height: 50px">
								</td>
							</tr>
						<?php endforeach;?>
						</tbody>
					</table>

				</div>
			</div>
			<a href="/users/create" class="btn btn-success btn-flat btn-block">Create New User</a>
		</div>
	</div>

</section>
