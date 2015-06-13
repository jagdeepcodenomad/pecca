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
			<form action="<?php httpIndex() ?>admin/import_export" method="post" enctype="multipart/form-data">
				<div class="sngl_row">
					<div class="col-12">
						<div class="col-6 lbl fleft">
							Select file type
						</div>
						<div class="col-6 fright">
							<div class="col-6 radio_bt fleft">
								<lable class="lbl" for="csv">CSV</lable>
								<input id="csv" checked="checked" type="radio" name="filetype" />
							</div>
							<!--div class="col-6 radio_bt fright">
							<lable class="lbl" for="exl">excel</lable>
							<input id="exl" type="radio" name="fileup" />
							</div-->
						</div>
					</div> 
				</div>
				<div class="sngl_row">
					<div class="col-12">
						<div class="col-6 lbl fleft">
							Upload any file make sure file type must be CSV format. 
						</div>
						<div class="col-6 fright">
							<div class="lbl fnone">
							<input type="file" name="filesup" id="upload"/></div>
							<input type="submit" value="" class="btup" id="dummybt"/>
						</div>
					</div> 
				</div>
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('admin_footer'); ?>