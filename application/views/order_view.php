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
		
			<div class="sngl_row">
				<div class="col-12">
					<div class="col-6 fleft">
						<div class="col-6 lbl fleft">
							Edit field
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<select>
									<option>Image</option>
									<option>Status</option>
									<option>SKU Condition</option>
									<option>Product title asin</option>
								</select>
							</div>
						</div>
						
						</div>
					<div class="col-6 fright">
						<div class="col-6 lbl fleft">
							Rename field here
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<input type="text"/>
							</div>
						</div>
					</div>
				</div> 
			</div>
			
			<div class="sngl_row">
				<div class="col-12">
					<div class="col-6 fleft">
						<div class="col-6 lbl fleft">
							Add new field after
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<select>
									<option>Image</option>
									<option>Status</option>
									<option>SKU Condition</option>
									<option>Product title asin</option>
								</select>
							</div>
						</div>
						
						</div>
					<div class="col-6 fright">
						<div class="col-6 lbl fleft">
							New Field Name
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<input type="text"/>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>

</div>
</div>
<?php $this->load->view('admin_footer'); ?>
