<section class="content">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Create New User</h3>
				</div>

				<form role="form" method="post" action="/users/save">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						</div>
						<div class="form-group">
							<label for="exampleInputFile">Image</label>
							<input type="file" id="image">
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
