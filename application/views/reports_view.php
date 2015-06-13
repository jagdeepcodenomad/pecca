<?php $this->load->view('admin_header'); ?>
<div class="mo">

<div class="mi">
	<?php $this->load->view('admin_left_sidebar'); ?>	
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
					2
					</div>
					<div id="tabs1_3">
					3
					</div>
				</div>
				</div>
			</div>
			
			<!--div id="tabstwo">
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
			</div-->
			
			<!--div id="tabsthird">
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
			</div-->
			
		</div>
	</div>
		</div>

</div>
</div>


</body>
</html>