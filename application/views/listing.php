<?php $this->load->view('admin_header'); ?>
<script>
	function confirmDelete(del_id) 
	{
		swal({			
			title:'',
			text: "Are you sure you want to Delete?\nThis operation can not be undone.",
			showCancelButton: true,
			confirmButtonColor: "#68AC35",
			confirmButtonText: "Yes delete",
			closeOnConfirm: true
		},
		function(){		
			document.location = "http://ilikethat.co.nz/member/delete_property/"+del_id; 
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
			<?php $i=0; foreach ($users as $k =>$row ){ $i++; ?>
			<div class="sngl_row listbar">
				<div class="tab_head sr_no"><?php echo $i ?></div>
				<div class="tab_head firstname"><?php echo $users[$i]['full_name'] ?></div>
				<div class="tab_head emailfld"><?php echo $users[$i]['phone'] ?></div>
				<div class="tab_head ipadd"><?php echo $users[$i]['ip_address'] ?></div>
				<div class="tab_head uspri">Full admin</div>
				<div class="tab_head edt"><a onclick="confirm()" href="javascript:;" class="edt_bt">Edit</a></div>
				<div class="tab_head del"><a onclick="confirmDelete('<?php echo $users[$i]['user_id'] ?>')" href="javascript:;" class="dl_bt">Delete</a></div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</div>
</body>
</html>
