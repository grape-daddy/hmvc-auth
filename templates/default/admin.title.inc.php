<!DOCTYPE html>
<html>
		<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">

				<title>Collapsible sidebar using Bootstrap 3</title>

				 <!-- Bootstrap CSS CDN -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<!-- Our Custom CSS -->
				<link rel="stylesheet" href="<?php echo base_url('templates/'.CURRENT_SKIN.'/css/admin.css'); ?>">

				<!-- jQuery CDN -->
				<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
				<!-- Bootstrap Js CDN -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
		<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Brand</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">คำสั่งซื้อ</a></li>
				<li><a href="#">การชำระเงิน</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">จัดการข้อมูลร้านค้า <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">จัดการสินค้า</a></li>
						<li><a href="#">จัดการสมาชิก</a></li>
						<li><a href="#">จัดการระบบสั่งซื้อ</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">ข้อมูลร้านค้า</a></li>
						<li><a href="#">วิธีการชำระเงิน</a></li>
						<li><a href="#">วิธีการสั่งซื้อสินค้า</a></li>
						<li><a href="#">เลขทะเบียนพาณิชย์อิเล็กทรอนิกส์</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
				if ($data['admin_info'] == -1) {
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrator <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">เข้าระบบ</a></li>
							<li><a href="#">ลือมรหัสผ่าน</a></li>
						</ul>
					</li>
					<?php
				} else {
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
						<li role="separator" class="divider"></li>
							<li><a href="#">ออกจากระบบ</a></li>
						</ul>
					</li>
					<?php
				}
				?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
			<div class="container-fluid wrapper">

<?php
if ($data['admin_info'] == -1) {
	?>
	Login1
	<?php
} else {
	//echo $data['admin_info']['username'];
	var_dump($data['admin_info']);
}
?>
