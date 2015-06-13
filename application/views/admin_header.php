<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pecca | <?php echo $title; ?></title>
<script src="<?php misc() ?>js/jquery-1.11.2.js"></script>
<script src="<?php misc() ?>js/custom.js"></script>
<script src="<?php misc() ?>js/jquery-ui.js"></script>
<link href="<?php misc() ?>css/custom.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' href='<?php misc() ?>css/sweet-alert.css'>
<script src='<?php misc() ?>js/sweet-alert.js'></script>
<script type="text/javascript">
	$(document).ready(function(){
		$.noConflict();
		$(function() {
			$( "#lpo" ).tabs();
		});
	});
</script>
</head>
<body>
<?php if($this->session->userdata('user_id')) { ?>
<div class="header_top">
	<div class="inner_logo">
		<img src="<?php misc() ?>images/innerlogo.jpg"/>
	</div>
	<div class="userlogdetail">
		<div class="top">
			<span class="detail"><a href="javascript:;">Support </a> <a href="javascript:;">Help |</a> Your last login <?php echo $this->session->userdata('last_login') ?> | <a href="<?php httpIndex() ?>admin/logout">Logout</a></span>
			<span>You login as Admin <br/> <?php echo $this->session->userdata('username'); ?></span>
		</div>
	</div>
</div><?php } ?>
