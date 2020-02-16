
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clinic Management System - Responsive Web Application Kit by Fusion Technologies</title>

  <!-- Global stylesheets -->
  <?php $this->load->view('font')?>
  <link href="<?php echo base_url()?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url()?>assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/loaders/blockui.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/pickers/pickadate/picker.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/pickers/pickadate/picker.date.js"></script>
  <!-- /core JS files -->
<script type="text/javascript">
    $(document).ready(function($) {
     
    $('.daterange-basic').pickadate({
        format: 'yyyy-mm-dd'
      });
      $('.daterange-basic2').pickadate({
        format: 'yyyy-mm-dd'
      });
    });
  </script>
  

  <!-- Theme JS files -->

  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/effects.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/jgrowl.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/ui/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/components_notifications_pnotify.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/pnotify.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>

  
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/form_select2.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/styling/uniform.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/styling/switchery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/styling/switch.min.js"></script>

  
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/form_checkboxes_radios.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/components_notifications_pnotify.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/pnotify.min.js"></script>


</head>
<body>

	
<?php $this->load->view('nav'); ?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

		
<?php $this->load->view('main_nav'); ?>
					
                    <div id="container">  
							<!-- Advanced legend -->
							
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Add Treatment Form</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
									<div class='alertdiv'>   </div>
										<fieldset>
											<legend class="text-semibold">
												<i class="icon-file-text2 position-left"></i>
												Enter Treatment information
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
											<div class="row">
                                                	<div class="form-gruop">
											
                                                        											
                                                <div class="col-md-4">
													<label style="font-weight:bold;"> Treatment Name:</label>
													<input type="text" id="name" class="form-control" placeholder="e.g. OPD">
												</div>

												<div class="col-md-4">
                  
                  <label style="font-weight:bold;">Added Date:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="created_on" readonly="">
                    </div>
                  </div>


                  <div class="col-md-4">
                    <label  class="control-label" style="font-weight:bold;"> Add In Department</label>
                    <select  data-placeholder="Select a Department" id="dept_id" class="select-clear">
                    	<option></option>
                      <optgroup label="Select a Department">
                       

                        <?php foreach($dep as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                               <?php endforeach ?>
                  </optgroup>
                      
                    </select>
                  </div>   




                   </div>
                  </div>
                  <br>

					                			<div class="form-group">
													<label style="font-weight:bold;">Description:</label>
				                                    <textarea rows="5" cols="5" id="description" placeholder="Few words about Department" class="form-control"></textarea>
					                			</div>
				                			</div>
										</fieldset>

										<div class="text-right">
											<button type="submit" class="btn btn-primary submit">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
							<!-- /a legend -->

					
						</div>
		<!-- /page content -->

	<!-- /page container -->
 <script type="text/javascript">


$('.submit').on('click',function(){
    var treatmentData = new Object();
    treatmentData.name = $('#name').val();
	treatmentData.dept_id = $('#dept_id').val();    
    treatmentData.description = $('#description').val();
    treatmentData.created_on = $('#created_on').val();	
    var url = '<?php echo site_url("treatment/add_treatment")?>';
if(!$('#name').val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Name fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#dept_id' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Choose The Department',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#created_on' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Created On field',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#description' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the About Yourself fields',
    		addclass:'bg-danger'
    	});
    }
    else{ 
    $.ajax({
        url: url,
        data: treatmentData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data['success']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> treatment Entered.</div>');
                         window.setTimeout(function(){window.location.replace("<?php echo site_url('treatment') ?>");},1000) 
              
                         
                      }
                      
            
        }
           
});
}
});

</script>
</body>
</html>