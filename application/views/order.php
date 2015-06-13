<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>order</title>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet" type="text/css">

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
<div class="lfs">
	<a href="" class="ho1 tb">
		<span>Home</span>
	</a>
	<a href="task.php" class="tel tb">
		<span>Tasks</span>
	</a>
	<a href="" class="tel tb">
		<span>Contacts</span>
	</a>
	<a href="" class="org tb">
		<span>Organization</span>
	</a>
	<a href="" class="pro tb">
		<span>Projects</span>
	</a>
	<a href="" class="mail tb">
		<span>Email</span>
	</a>
	<a href="" class="report tb">
		<span>Reports</span>
	</a>
	<a href="" class="hide tb">
		<span>Hide/Show</span>
	</a>

</div>
<div class="mo">
	<div class="tab_outer fright">
	<ul>
		<li><a href="inventory.php">Inventory</a></li>
		<li><a href="customer.php">Customers</a></li>
		<li><a href="order.php" class="active">Orders</a></li>
		<li><a href="report.php">Reports</a></li>
		<li><a href="#">Employees</a></li>
		<li><a href="cal.php">My accounts</a></li>
	</ul>
	</div>
<div class="mi">
	<div class="main_controler fleft">
		<form method="GET">
		<div class="fld_o">
			<div class="s_row search_o">
				<input type="search" name="src" class="src_fld" placeholder="Keyword Search"/>
				<input type="submit" class="src_bt" value="Go"/>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row sel">
				<label>Status</label>
				<select>
					<option>Active</option>
					<option>Non Active</option>
				</select>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row sel">
				<label>BRANDS</label>
				<select>
					<option>JBL</option>
					<option>SONY</option>
				</select>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row head">
			Condition
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row ">
				<div class="option_o">
					<input type="checkbox"/>
					<label>New</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Like new</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Used</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Defective</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Untested</label>
				</div>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row head">
			Price
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row">
			<div class="ttl">MSRP</div>
			<div class="h_input">
				<input type="text"/>
				<span>TO</span>
				<input type="text"/>
			</div>
			<div class="ttl">Online Price</div>
			<div class="h_input">
				<input type="text"/>
				<span>TO</span>
				<input type="text"/>
			</div>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row head">
			Quantity
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row">
			<div class="h_input">
				<input type="text"/>
				<span>TO</span>
				<input type="text"/>
			</div>
			</div>
		</div>
		</form>
	</div>
	
	<div class="main_list_o fright">
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
		
		<div class="list_head">
			<div class="tab_opt bln"><input type="checkbox"/></div>
			<div class="tab_opt bln ci">Order ID</div>
			<div class="tab_opt bln ui">Date Order</div>
			<div class="tab_opt bln ea">Date Payed</div>
			<div class="tab_opt bln ct">Status</div>
			<div class="tab_opt bln dc">Qty</div>
			<div class="tab_opt bln ll">Ship Method</div>
			<div class="tab_opt brn bs">Tracking Number</div>
		</div>
		

		
		<?php for($i=1 ; $i<=3 ; $i++) {
				for($j = 0; $j < 6; $j++){
					if($j == 1){
						echo "<div class='hidden' id='show_div_".$i."'>";
					}
		?>
		
		<div class="single_row">
			<div class="tab_opt bln"><input type="checkbox"/></div>
			<div class="tab_opt bln ci">CUSTO123456</div>
			<div class="tab_opt bln ui">12-sep-2014</div>
			<div class="tab_opt bln ea">14-Sep-2014</div>
			<div class="tab_opt bln ct">
				<div class="edit">
				<select>
					<option>Shipped</option>
					<option>Non</option>
				</select>
				</div>
			</div>
			<div class="tab_opt bln dc">
				<div class="fld_box">
					10
				</div>
			</div>
			<div class="tab_opt bln ll">
				<div class="fld_box">
					POST
				</div>
			</div>
			<div class="tab_opt  brn bs">
				<div class="fld_box">
				TRACK-123456
				</div>
			</div>
		</div>
		<?php 
			if($j == 5){
				echo "</div>";
			}
			}
		} ?>
	</div>
			<script>
	function show_hidden(val){
		$('#show_div_'+val).slideToggle(0);
		
	}
		</script>
</div>
</div>
</body>
</html>
