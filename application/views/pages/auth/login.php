<section class="content">

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Login</h3>
				</div>

				<form role="form" method="post" action="/auth/login">
					<div class="box-body">

						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						</div>
					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-default btn-block btn-flat">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</section>
