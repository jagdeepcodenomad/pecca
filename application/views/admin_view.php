<?php $this->load->view('admin_header'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
	function usersub()
	{
		if($('#full-name').val() == '') 
		{
			swal('Full name  must be entered.');
			$('#full-name').focus();
			return false;
		}
		
		if($('#username').val() == '') 
		{
			swal('Username must be entered.');
			$('#username').focus();
			return false;
		}
		
		if($('#phone').val() == '') 
		{
			swal('Phone number  must be entered.');
			$('#phone').focus();
			return false;
		}
		var phoneno = /^\d{10}$/;  
		if($('#phone').val().match(phoneno))  
        { 
	
        }  
		else  
        {  
			swal('Valid phone number must be entered');  
			return false;  
        } 
		
		if($('#password').val() == '') 
		{
			swal('Password must be entered.');
			$('#password').focus();
			return false;
		}
		var invalid = " "; // Invalid character is a space
		var minLength = 6; // Minimum length
		
		// check for minimum length
		if ($('#password').val().length < minLength) 
		{
			swal('Your password must be at least ' + minLength + ' characters long. Try again.');
			$('#password').focus();
			return false;
		}
		// check for spaces
		if ($('#password').val().indexOf(invalid) > -1) 
		{
			swal("Sorry, spaces are not allowed.");
			$('#password').focus();
			return false;
		}
		if ($('#password').val()!=$('#retypepass').val()) 
		{ 
			swal("Confirm password not match"); 
			$('#password').focus();
			$('#password').val('');
			$('#retypepass').val('');
			return false; 
		}
		return 'success';
	}
	function validate_user()
	{
		var result = usersub();
		if($.trim(result) === 'success')
		{
		}
		else
		{
			return false;
		}
	}
</script>
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
		<form id="frmsubm" name="frmsubm" onsubmit="return validate_user()" action="<?php httpIndex() ?>admin/create_user/" method="post">
			<div class="sngl_row">
				<div class="col-6 hf_sec_l">
					<div class="lbl">
						Full Name
					</div>
					<div class="fld_o_a">
						<input id="full-name" name="full_name" type="text"/>
					</div>
				</div>
				<div class="col-6 hf_sec_r">
					<div class="lbl">
						Username
					</div>
					<div class="fld_o_a">
						<input id="username" name="username" type="text"/>
					</div>
				</div>
			</div>
			
			<div class="sngl_row">
				<div class="col-6 hf_sec_l">
					<div class="lbl">
						Gender
					</div>
					<div class="fld_o_a edit">
						<select name="gender">
							<option value="1">Male</option>
							<option value="2">Female</option>
						</select>
					</div>					
				</div>
				<div class="col-6 hf_sec_r">
					<div class="lbl">
						Phone
					</div>
					<div class="fld_o_a">
						<input id="phone" name="phone" type="text"/>
					</div>
				</div>
			</div>
			
			<div class="sngl_row">
				<div class="col-6 hf_sec_l">
					<div class="lbl">
						Password
					</div>
					<div class="fld_o_a">
						<input id="password" name="password" type="password"/>
					</div>
				</div> 
				<div class="col-6 hf_sec_r">
					<div class="lbl">
						Re-type password
					</div>
					<div class="fld_o_a">
						<input id="retypepass" name="retype-password" type="password"/>
					</div>
				</div>
			</div>
						
			<div class="sngl_row">
				<div class="col-6 hf_sec_l">
					<div class="lbl">
						Set IP
					</div>
					<div class="fld_o_a edit">	
						<select id="ip_addr" name="ip_id">
							<?php  foreach ($ipaddr as $ipaddrs) 
							{ ?>
								<option value="<?php echo $ipaddrs['ip_id'] ?>"><?php echo $ipaddrs['ip_address']; ?></option>
							<?php 
							} ?>	
						</select>
					</div>
				</div> 
				<div class="col-6 hf_sec_r">
					<div class="lbl">
						Set privilege 
					</div>
					<div class="fld_o_a edit">
						<select name="privilege">
							<option value="all">All</option>
							<option value="cus">Customer</option>
							<option value="order">Order</option>
							<option value="inv-cus">Inventory / Customer</option>
							<option value="cus-ord">Customer / Order</option>
							<option value="inv-ord">Inventory / Order</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="field_o_bt">
				<input name="submit" value="Submit" class="sub_bt" type="submit">
			</div>
		</form>
		</div>

	</div>
</div>
<?php $this->load->view('admin_footer'); ?>