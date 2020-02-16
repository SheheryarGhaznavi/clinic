
 
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
					

							<!-- Advanced legend -->
							
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Add Notice Board Form</h5>
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
												Enter Notice Borad information
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
											<div class="row">
												<div class="form-group">
												<div class="col-md-4">
													<label>Title</label>
													<input type="text"  id="title" class="form-control" placeholder="e.g. Holiday/Meeting">
												</div>




												<div class="col-md-4">
                  
                  <label style="font-weight:bold;">Created On:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="created_on" readonly="">
                    </div>
                  </div>    

												
                  </div>
                  </div>
                  <br>

<div class="row">
												<div class="form-group">
											
                  <div class="col-md-4">
                  
                  <label style="font-weight:bold;">Start Date:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="start_date" readonly="">
                    </div>
                  </div>    

												 <div class="col-md-4">
                  
                  <label style="font-weight:bold;">End Date:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="end_date" readonly="">
                    </div>
                  </div>    
                  </div></div>
                  <br>


					                			<div class="form-group">
													<label>Description</label>
				                                    <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control" id="description" ></textarea>
					                			</div>


												 

										
												
											</div>
									


					                			



					                	

												
										</fieldset>

										<div class="text-right">
											<button type="submit" class="btn btn-primary     submit">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>
							<!-- /a legend -->

					
						</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

<script type="text/javascript">


$('.submit').on('click',function(){
    var noticeboardData = new Object();
    noticeboardData.title = $('#title').val();
    noticeboardData.description = $('#description').val();
    noticeboardData.start_date = $('#start_date').val();
    noticeboardData.end_date = $('#end_date').val();
    noticeboardData.created_on = $('#created_on').val();	
    var url = '<?php echo site_url("noticeboard/add_noticeboard")?>';
if(!$('#title').val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Title fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#start_date' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Start Date field',
        addclass:'bg-danger'
      });
    }
    else if(!$('#end_date' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the End Date field',
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
        data: noticeboardData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data['success']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> Noticeboard Entered.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('noticeboard') ?>");},1000) 
              
                      }
                      
            
        }
           
});
}
});

</script>








</body>
</html>