<!DOCTYPE HTML>
<html>
<head>
<?php $this->load->view('admin_header'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script>
	function sublogin() 
	{
		if($('#username').val() == '') 
		{
			swal('Username must be entered.');
			$('#username').focus();
			return false;
		}
		
		if($('#password').val() == '') 
		{
			swal('Password must be entered.');
			$('#password').focus();
			return false;
		} 
		
	}
</script>
</head>
<body>
<div class="bg"></div>
<header></header>
<section c;>
<div class="form_bg">
	<div class="shade"></div>
	<div class="inner_o">
		<div class="fhead">System login</div>
		<?php
		if(@$this->session->flashdata('errors'))
		{	?>
			<center><span class="err_msg text_right"><img src="<?php echo misc() ?>images/err_icon.png" border="none"><?php echo ' '.$this->session->flashdata('errors');?></span></center>
		<?php
		}
		?>
		<form action="<?php httpIndex() ?>admin/index/" onsubmit="return sublogin()" method="post" id="loginfrm" name="frm-login">
			<div class="field_o">
				<div class="icon login"></div>
				<input name="username" id="username" type="text" placeholder="Enter your username" />
			</div>
			<div class="field_o">
				<div class="icon pass"></div>
				<input name="password" id="password" type="password" placeholder="Enter your password" />
			</div>
			<div class="field_o">
				<a href="<?php httpIndex() ?>admin/forget_password">Forgot password</a>
			</div>
			<div class="field_o_bt">
				<input name="login" class="sub_bt" type="submit" value="Login" />
			</div>
		</form>
	</div>
</div>
</section>
<!--footer>
<script type="text/javascript" src="<?php misc() ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php misc() ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php misc() ?>/js/npm.js"></script>
<script type="text/javascript" src="<?php misc() ?>/js/jquery-1.11.2.js"></script>
<script type="text/javascript" src="<?php misc() ?>/js/custom.js"></script>
</footer-->
</body>
</html>
