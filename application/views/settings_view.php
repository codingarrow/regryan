      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <?php
	  /*
        <div class="span9">
            <h1 class="page-title">Edit Settings</h1>
			
<div class="well">
    <!--ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul-->
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
	  */
	  ?>
<div class="row">
                  <!--div class="col-lg-6"-->
	<div class="col-lg-12">
    <section class="panel">
                          <header class="panel-heading">
                              Edit Setting
                          </header>
    <div class="panel-body">	  
    <form class="form-horizontal tasi-form" id="tab" method="POST" action="<?php echo $_SESSION['host_']?>index.php/create/edit_settings/">
	
		<div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">		
			<button class="btn btn-primary"><i class="icon-save"></i> Save</button>
			<!-- #myModal-->
			<a href="<?php echo site_url();?>/crmcontroller/qmp_setting" data-toggle="modal" class="btn btn-success">Cancel</a>
		  </div>
		  <!--div class="btn-group">
		  </div-->
		</div>

	<div class="form-group">
	<input type="hidden" name="id" value="<?php echo $entry->setting_id; ?>"/> 
        <label for="isvisible" class="col-lg-2 col-sm-2 control-label">Is this row visible</label>
		<div class="col-lg-10">
				  <select id="isvisible" name="isvisible" class="form-control m-bot15">
					<option value="0" <?php if ($entry->isvisible=="0") echo 'selected="selected"';?> <?php echo set_select('isvisible', '0'); ?> >0</option>
					<option value="1" <?php if ($entry->isvisible=="1") echo 'selected="selected"';?> <?php echo set_select('isvisible', '1'); ?> >1</option>
				  </select>		
		</div>
	</div>
				  
	<div class="form-group">
        <label for="setting_name" class="col-lg-2 col-sm-2 control-label">Setting Name *</label>
		<div class="col-lg-10">
		<input class="form-control" id="setting_name" name="setting_name" type="text" value="<?php echo $entry->setting_name; ?>" > <?php echo form_error('setting_name'); ?>
		</div>
	</div>
		
	<div class="form-group">
        <label for="setting_value" class="col-lg-2 col-sm-2 control-label">Setting Value *</label>
		<div class="col-lg-10">
		<input class="form-control" id="setting_value" name="setting_value" type="text" value="<?php echo $entry->setting_value; ?>" > <?php echo form_error('setting_value'); ?>
		</div>
    </div>
		
    </form>
      <!--div class="tab-pane fade" id="profile">
    <form id="tab2">
        <label>New Password</label>
        <input type="password" class="input-xlarge">
        <div>
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
      </div-->
  </div>
</section>
</div>
</div>
			  
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->