<?php $this->load->view('admin_header'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
	function validateIPaddress()
	{
		if (/^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.test($('#ip_addr').val()))  
		{
			
		}
		else 
		{
			swal("You have entered an invalid IP address!");  
			return false;
		} 
	}
	
</script>
<header>

</header>
<section>
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
		<?php
		if($this->session->flashdata('errors'))
		{	?>
			<center><span class="err_msg text_right"><img src="<?php misc() ?>images/err_icon.png" border="none"><?php echo $this->session->flashdata('errors');?></span></center>
		<?php
		}
		if($this->session->flashdata('success'))
		{	 ?>
			<center><span class="scc_msg text_right"><img src="<?php misc() ?>images/suc_icon.png" border="none"><?php echo $this->session->flashdata('success');?></span></center>
		<?php 
		}
		?>
			<form action="<?php httpIndex() ?>admin/add_new_ip/"  onsubmit="return validateIPaddress()" id="frmipadd" method="post">
				<div class="sngl_row">
					<div class="col-6 hf_sec_l">
						<div class="lbl">
							Add new IP address
						</div>
						<div class="fld_o_a">
							<input id="ip_addr" name="ip_address" type="text"/>
						</div>
					</div>
				</div>			
				<div class="field_o_bt">
					<input name="submit" id="addipaddr" value="Submit" class="sub_bt" type="submit"/>
				</div>
			</form>
		</div>
	</div>
</div>
</section>	
<?php $this->load->view('admin_footer'); ?>