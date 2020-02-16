
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
  <!-- /core JS files -->

  <!-- Theme JS files -->

  <script type="text/javascript" src="<?php echo base_url()?>assets/dropzone.js"></script>

  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/effects.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/jgrowl.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/components_notifications_pnotify.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/pnotify.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script> 
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/form_select2.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/form_checkboxes_radios.js"></script>




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
										<h5 class="panel-title">Add User Form</h5>
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
												Enter your information
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
											<div class="row">
												<div class = "form-group">


                      <div class="col-md-4">
                      <label>User Type</label>
                      <select class="select-clear" data-placeholder="Select a User Type" id="type">
                        
                        <option></option>
                        <option>Doctor</option>
                        <option>Nurse</option>
                        <option>Receptionist</option>
                        <option>Laboratorist</option>
                        <option>Pharmacist</option>
                          
                      </select>
                    </div>
                    <div class="col-md-4 name">
                      <label>User Name</label>
                      <select class="select-clear" id="name">
                         
                       
                      </select>
                    </div>

                        <div class="col-md-4">
                  
                  <label style="font-weight:bold;">Created ON:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text"  class="form-control daterange-basic" id="created_on" readonly="">
                    </div>
                  </div>   


												

												 
											</div>
										</div>
                                                <br>
                        
					                			


                        



  

	
				                			</div>
										</fieldset>

										<div class="text-right">
											<button type="submit" class="btn btn-primary     submit">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
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
var email;
var name;
var password;
$('.submit').on('click',function(){
    var userData = new Object();
    userData.name = name;
    userData.type = $('#type').val();
    userData.email = email;
    userData.password = password;
    userData.created_on = $('#created_on').val(); 

    if(!$('#name').val()){
      new PNotify({
        title:'Error',
        text:'Fill the Name fields correctly',
        addclass:'bg-danger'
      });
    }
    else if(!$('#created_on' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Created On fields correctly',
        addclass:'bg-danger'
      });
    }
    else{
    var url = '<?php echo site_url("user/add")?>';

    $.ajax({
        url: url,
        data: userData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> User Entered.</div>');
                         window.setTimeout(function(){window.location.replace("<?php echo site_url('user') ?>");},1000) 
              
                         
                      }
                      
            
        }
           
});
}
});


  $('#type').on('change',function(){
               $('.name').show();
               var url;
                var id = $(this).val();
                var div = $('#name');
                if (id == 'Doctor') {
                  url = '<?php echo site_url("user/get_doctor") ?>';
                }
                else if (id == 'Nurse') {
                  url = '<?php echo site_url("user/get_nurse") ?>';
                }
                else if (id == 'Receptionist') {
                  url = '<?php echo site_url("user/get_receptionist") ?>';
                }
                else if (id == 'Laboratorist') {
                  url = '<?php echo site_url("user/get_laboratorist") ?>';
                }
                else if (id == 'Pharmacist') {
                  url = '<?php echo site_url("user/get_pharmacist") ?>';
                }
                  $.ajax({
                    url: url,
                    success: function(response){
                    var data = $.parseJSON(response);
                    div.empty();
                    $.each(data, function(index, val){
         div.append($("<option></option>")
                    .attr("value",val.id)
                    .text(val.name)); 
                    });
                   }
                });
               
               });

    $('#name').on('change',function(){
               var url;
                var typ = $('#type').val();
                var id = $(this).val();
                if (typ == 'Doctor') {
                  url = '<?php echo site_url("user/doctor") ?>'+'/'+id;
                }
                else if (typ == 'Nurse') {
                  url = '<?php echo site_url("user/nurse") ?>'+'/'+id;
                }
                else if (typ == 'Receptionist') {
                  url = '<?php echo site_url("user/receptionist") ?>'+'/'+id;
                }
                else if (typ == 'Laboratorist') {
                  url = '<?php echo site_url("user/laboratorist") ?>'+'/'+id;
                }
                else if (typ == 'Pharmacist') {
                  url = '<?php echo site_url("user/pharmacist") ?>'+'/'+id;
                }
                  $.ajax({
                    url: url,
                    success: function(response){
                    var data = $.parseJSON(response);
                    $.each(data, function(index, val){
                      name = val.name;
                       email = val.email;
                       password = val.password;
                    });
                   }
                });
               
               });

</script>
</body>
</html>