<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inventory page</title>
<script src="<?php misc() ?>/js/jquery-1.11.2.js"></script>
<script src="<?php misc() ?>/js/custom.js"></script>
  <script src="<?php misc() ?>/js/jquery-ui.js"></script>
<link href="<?php misc() ?>/css/custom.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

$(document).ready(function(){
  $(function() {
    $( "#lpo" ).tabs();
  });
});
</script>

<script>
	function registr()	
	{
		
	}
</script>

</head>
<body>

<div class="header_top">
	<div class="inner_logo">
		<img src="<?php misc() ?>/images/innerlogo.jpg"/>
	</div>
	<div class="userlogdetail">
		<div class="top">
			<span class="detail"><a href="#">Support </a> <a href="#">Help |</a> Your last login 10-Sep-2015 Time : 01:00:15  AM | <a href="<?php echo httpIndex(); ?>admin/logout/">Logout</a></span>
			<span>You login as <?php if(@$this->session->userdata('role_id') == 1) { echo 'Admin';} else if(@$this->session->userdata('role_id') == 2) { echo 'User'; } ?> <br/> Aaron Hank</span>
		</div>
	</div>
</div>

<div class="mo">

<div class="mi">
	<div class="alp fleft">
		<div id="lpo">
			<ul>
			<li><a href="#cu">CREATE USER</a></li>
			<li><a href="#ie">IMPORT / EXPORT</a></li>
			<li><a href="#im">INVENTERY MANAGEMENT</a></li>
			<li><a href="#cm">CUSTOMER MANAGEMENT</a></li>
			<li><a href="#om">ORDER MANAGEMENT</a></li>
			<li><a href="#repo">REPORTS</a></li>
			</ul>
			<div id="cu">
			1
			</div>
			<div id="ie">
			2
			</div>
			<div id="im">
			3
			</div>
			<div id="cm">
			4
			</div>
			<div id="om">
			5
			</div>
			<div id="repo">
			6
			</div>
		</div>
	</div>
	
	<div class="ad_hd fright">
		<div class="opt_bar">
			<div class="oplist">
			<div class="adv">Advance option</div>
			<div class="contrl_bt"></div>
			</div>
			<div class="opt_o">
			<span class="icon_tab pdf"></span>
			<span class="icon_tab exl"></span>
			<span class="icon_tab msg"></span>
			<span class="icon_tab noti"></span>
			<span class="icon_tab task"></span>
			</div>
		</div>
		<div class="fo_out">
			<form method="post" action="<?php echo httpIndex(); ?>admin/register_user">
				<div class="sngl_row">
					<div class="col-6 hf_sec_l">
						<div class="lbl">
							First Name
						</div>
						<div class="fld_o_a">
							<input type="text"/>
						</div>
					</div>
					<div class="col-6 hf_sec_r">
						<div class="lbl">
							Last name
						</div>
						<div class="fld_o_a">
							<input type="text"/>
						</div>
					</div>
				</div>
			
				<div class="sngl_row">
					<div class="col-6 hf_sec_l">
						<div class="lbl">
							Username
						</div>
						<div class="fld_o_a">
							<input type="text"/>
						</div>
					</div>
					<div class="col-6 hf_sec_r">
						<div class="lbl">
							Password	
						</div>
						<div class="fld_o_a">
							<input type="password"/>
						</div>
					</div>
				</div>
				
				<div class="sngl_row">
					<div class="col-6 hf_sec_l">
						<div class="lbl">
							Re-type Password	
						</div>
						<div class="fld_o_a">
							<input type="password"/>
						</div>
					</div>
					<div class="col-6 hf_sec_r">
						<div class="lbl">
							Create URL
						</div>
						<div class="fld_o_a">
							<input type="email"/>
						</div>
					</div>
				</div>
				
				<div class="sngl_row">				
					<div class="col-6 hf_sec_l">
						<div class="lbl">
							Re-type url
						</div>
						<div class="fld_o_a">
							<input type="email"/>
						</div>
					</div>
				</div>
				
				<div class="sngl_row">	
					<div class="field_o_bt">
						<input name="register" class="sub_bt" onclick="registr()" value="Submit" type="button"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>