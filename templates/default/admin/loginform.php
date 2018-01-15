<div class="row">
	<div class="col-sm-3">
		<form action="<?php echo site_url('admin/login'); ?>" method="post">
			<div class="form-group">
				<label>Email address</label>
				<input type="text" class="form-control" id="loginname" name="loginname" placeholder="Login name">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>