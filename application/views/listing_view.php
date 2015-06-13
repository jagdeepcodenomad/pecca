<?php $this->load->view('admin_header'); ?>
<script>
	function confirmDelete(del_id) 
	{
		swal({			
			title:'',
			text: "Are you sure you want to Delete?\nThis operation can not be undone.",
			showCancelButton: true,
			confirmButtonColor: "#3C8DBC",
			confirmButtonText: "Yes delete",
			closeOnConfirm: true
		},
		function(){		
			document.location = "<?php httpIndex() ?>admin/delete_user/"+del_id; 
		});
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
			if(@$this->session->flashdata('success'))
			{	?>
				<center><span class="scc_msg text_right"><img src="<?php echo misc() ?>images/suc_icon.png" border="none"><?php echo ' '.$this->session->flashdata('success');?></span></center>
			<?php
			}
			?>
			<div class="sngl_row topbar">
				<div class="tab_head sr_no">Sr No</div>
				<div class="tab_head firstname">Full name</div>
				<!--div class="tab_head lastname">Last name</div-->
				<div class="tab_head emailfld">Phone Number</div>
				<div class="tab_head ipadd">IP address</div>
				<div class="tab_head uspri">User privilege</div>
				<div class="tab_head edt">Edit</div>
				<div class="tab_head del">Delete</div>
			</div>
			<?php $i=1; foreach ($users as $k => $row ){ ?>
			<div class="sngl_row listbar">
				<div class="tab_head sr_no"><?php echo $i ?></div>
				<div class="tab_head firstname"><?php echo $users[$k]['full_name'] ?></div>
				<div class="tab_head emailfld"><?php echo $users[$k]['phone'] ?></div>
				<div class="tab_head ipadd"><?php echo $users[$k]['ip_address'] ?></div>
				<div class="tab_head uspri">Full admin</div>
				<div class="tab_head edt"><a href="<?php httpIndex() ?>admin/edit_user/<?php echo $users[$k]['user_id'] ?>" class="edt_bt">Edit</a></div>
				<div class="tab_head del"><a onclick="confirmDelete('<?php echo $users[$k]['user_id'] ?>')" href="javascript:;" class="dl_bt">Delete</a></div>
			</div>
			<?php  $i++;} ?>
		</div>
	</div>
</div>
</div>
</body>
</html>