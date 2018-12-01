<section class="content">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<?php if (isset($_SESSION['errors'])){ ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-ban"></i> Whoops !</h4>
					<?php echo $_SESSION['errors'] ?>
				</div>
			<?php } ?>
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Create New User</h3>
				</div>
				<?php echo form_open_multipart('users/save');?>
				<form role="form">
					<div class="box-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
						</div>
						<div class="form-group">
							<label>Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						</div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" id="image" name="image">
							<p class="help-block">Max 2MB</p>
						</div>
					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
					</div>
				</form>
			</div>

		</div>
	</div>

</section>
