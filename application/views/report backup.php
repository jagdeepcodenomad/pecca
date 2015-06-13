<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inventory page</title>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<script>
  $(function() {
    $( "#tabs" ).tabs();
	$( "#firsttab" ).tabs();
	$( "#secondtab" ).tabs();
	$( "#thirdtab" ).tabs();
  });
</script>
</head>
<body>

<!--
<?php  
for($i=1;$i<4;$i++)
{
echo "$i <br/>";	
for($j=1;$j<4;$j++)
 {
	 echo "$j <br/>";
 }
}
?>
-->

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
		<li><a href="inventory.php" >Inventory</a></li>
		<li><a href="customer.php">Customers</a></li>
		<li><a href="order.php">Orders</a></li>
		<li><a href="report.php" class="active">Reports</a></li>
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
	
	<div id="tabs" class="reportsarea_outer">
		<div class="top_tab_outer fleft">
			<div class="pi fleft">Product Information</div>
			<ul class="top_cat_tab fleft">
				<li><a href="#tabsone">Inventory</a></li>
				<li><a href="#tabstwo">Order</a></li>
				<li><a href="#tabsthird">Customer</a></li>
			</ul>
		</div>
		<div class="change_area">
			
			<div id="tabsone">
				<div id="firsttab">
				<ul class="left_cat_tab">
				<li><a href="#tabs1_1">Products</a></li>
				<li><a href="#tabs1_2">Pallets</a></li>
				<li><a href="#tabs1_3">New</a></li>
				</ul>
				<div class="fright right_sec">
					<div id="tabs1_1">
					<?php include('form_flds.php')?>
					</div>
					<div id="tabs1_2">
					<?php include('form_flds.php')?>
					</div>
					<div id="tabs1_3">
					<?php include('form_flds.php')?>
					</div>
				</div>
				</div>
			</div>
			
			<div id="tabstwo">
				<div id="secondtab">
				<ul class="left_cat_tab">
				<li><a href="#tabs-1">Products</a></li>
				<li><a href="#tabs-2">Pallets</a></li>
				<li><a href="#tabs-3">New</a></li>
				</ul>
				<div class="fright right_sec">
					<div id="tabs-1">
					2.1
					</div>
					<div id="tabs-2">
					2.2
					</div>
					<div id="tabs-3">
					2.3
					</div>
				</div>
				</div>
			</div>
			<div id="tabsthird">
				<div id="thirdtab">
				<ul class="left_cat_tab">
				<li><a href="#tabs-1">Products</a></li>
				<li><a href="#tabs-2">Pallets</a></li>
				<li><a href="#tabs-3">New</a></li>
				</ul>
				<div class="fright right_sec">
					<div id="tabs-1">
					3.1
					</div>
					<div id="tabs-2">
					3.2
					</div>
					<div id="tabs-3">
					3.3
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>



		
		<!--
		
		<?php for($i=1 ; $i<=3 ; $i++) {
				for($j = 0; $j < 6; $j++){
					if($j == 1){
						echo "<div class='hidden' id='show_div_".$i."'>";
					}
		?>
		
		<div class="single_row">
			<div class="tab_opt bln"><input type="checkbox"/><div id="show_data" class="inner_pro_bt" <?php if($j == 0){ echo "onclick='show_hidden(".$i.")'"; } ?>></div></div>
			<div class="tab_opt bln w35"><img src="images/pro.png"/></div>
			<div class="tab_opt bln w70">
			Active
				<div class="cs">
					<select>
						<option>Active</option>
						<option>Non-active</option>
					</select>
				</div>
			</div>
			<div class="tab_opt bln w80">ADS-<?php echo $i ?></div>
			<div class="tab_opt bln big_field">
			Samsung DVD-C500 Upconverting DVD Player(Black)
			<a href="">B003ANVQWU</a>
			</div>
			<div class="tab_opt bln w53">
				<div class="fld_box">N/A</div>
				<input type="text" class="condition_txt" value=""/>
			</div>
			<div class="tab_opt bln">
				<div class="fld_box">12</div>
				<input type="text" class="condition_txt" value=""/>
			</div>
			<div class="tab_opt bln w71">
				<div class="fld_box">12</div>
				<input type="text" class="qty_recived" value=""/>
			</div>
			<div class="tab_opt bln w67">
				<div class="fld_box">$52</div>
				<input type="text" class="qty_recived" value=""/>
			</div>
			<div class="tab_opt bln w49">
				<div class="fld_box">$52</div>
				<input type="text" class="qty_recived" value=""/>
			</div>
			<div class="tab_opt brn">
				<div class="edit w113">
				<select>
					<option>Edit</option>
					<option>Delete</option>
				</select>
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
		-->
</div>
</div>
</body>
</html>
