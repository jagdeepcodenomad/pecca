<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inventory page</title>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/custom.js"></script>
  <script src="js/jquery-ui.js"></script>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<script type="text/javascript">

$(document).ready(function(){
  $(function() {
    $( "#lpo" ).tabs();
  });
});
</script>
</head>
<body>

<div class="header_top">
	<div class="inner_logo">
		<img src="images/innerlogo.jpg"/>
	</div>
	<div class="userlogdetail">
		<div class="top">
			<span class="detail"><a href="#">Support </a> <a href="#">Help |</a> Your last login 10-Sep-2015 Time : 01:00:15  AM | <a href="#">Logout</a></span>
			<span>You login as Admin <br/> Aaron Hank</span>
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
			<div class="sngl_row">
				<div class="col-6 hf_sec_l">
					<div class="lbl">
						Set privilege 
					</div>
					<div class="fld_o_a edit">
						<select>
							<option>1</option>
							<option>2</option>
						</select>
					</div>
				</div>
				
				<div class="col-6 hf_sec_r">
					<div class="lbl">
						Create URL
					</div>
					<div class="fld_o_a">
						<input type"email"/>
					</div>
				</div> 
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
reportsarea_outer