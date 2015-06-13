<?php echo $this->load->view('admin_header'); ?>

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
		<li><a href="inventory.php" class="active">Inventory</a></li>
		<li><a href="customer.php">Customers</a></li>
		<li><a href="#">Orders</a></li>
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
	<table>
				
			<tr>
				<td><input type="checkbox"/></td>
				 <?php foreach($fields as $k => $row) { ?>  <td id="<?php echo $fields[$k]['field_id'] ?>" class=" "><?php echo $fields[$k]['field_name'] ?></td><?php } ?>
			</tr>
			<!--div class="tab_opt bln w70">Status</div>
			<div class="tab_opt bln">SKU Condition</div>
			<div class="tab_opt bln big_field">Product title asin</div>
			<div class="tab_opt bln">Condition</div>
			<div class="tab_opt bln">QTY</div>
			<div class="tab_opt bln"> Qty Received</div>
			<div class="tab_opt bln">Online Price</div>
			<div class="tab_opt bln">Shipping </div>
			<div class="tab_opt bln"><input class="sv_all" value="Save All" type="submit"/> </div>
			<div class="tab_opt brn">More</div-->
		
			<?php foreach($products as $k => $row) { ?>
			<tr class="">
				<td><input type="checkbox"/></td>
				<?php foreach($products[$k] as $j =>$row) { ?>
				<td class="">
					<?php echo $products[$k][$j]['field_value'] ?>
				</td>			
				<?php } ?>
				<td class="">
					<select>
						<option>Edit</option>
						<option>Delete</option>
					</select>
				</td>
				<td class=" ">
					<!--div class="edit w30 vmore">
						<div class="h_o">
							<div class="hopp gt"></div>
							<div class="hopp dlr"></div>
							<div class="hopp rt"></div>
						</div>
					</div-->
				</td>
			</tr>
			<?php } ?>
		
	</table>
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
