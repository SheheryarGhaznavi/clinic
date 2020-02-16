
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
  <script type="text/javascript" src="<?php echo base_url()?>assets/dropzone.js"></script>
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
										<h5 class="panel-title">Add Pharmacist Form</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">
									<div class="alertdiv"></div>
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
													<label style="font-weight:bold;">Name:</label>
													<input type="text" id="name" class="form-control" placeholder="e.g. Akbar">
												</div>


												

												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Email</label>
                  								 <input type="email" id="email" placeholder="Enter Your Email" class="form-control">
                 								 </div> 

												<div class="col-md-4">
													<label style="font-weight:bold;">Password:</label>
													<input type="password" id="password" class="form-control" placeholder="Put strong password">
												</div>
											</div>
										</div>
                                                <br>
                                                <div class="row">
                                                	<div class="form-gruop">
											
                        
          
                                                    <div class="col-md-4">
                  
                  <label style="font-weight:bold;">Date Of Birth:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text"  class="form-control daterange-basic" id="dob" value="1980-01-01">
                    </div>
                  </div>    
                  
												


												<div class="col-md-4">
													<label style="font-weight:bold;">Phone No:</label>
													<input type="number" id="phone_no" class="form-control" placeholder="e.g. +9233333...">
												</div>

													<div class="col-md-4">
													<label style="font-weight:bold;">Repeat password:</label>
													<input type="password" class="form-control" placeholder="Repeat password">
												</div>
</div>
          </div>
          <br>
											<div class="row">
												<div class="form-group">
													<div class="col-md-4">
													<label style="font-weight:bold;">Address:</label>
													<input type="text" id="address" class="form-control" placeholder="put your address">
												</div>

												


												
											
									

					                			



					                			<div class="col-md-4">
                    <label  class="control-label" style="font-weight:bold;">Gender</label>
                    <select  data-placeholder="Select a Gender" id="gender" class="select-clear">

                      <option></option>
                      <optgroup label="Select a Blood Gruop">
                       
                        <?php foreach($gen as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->gender?></option>
                                               <?php endforeach ?>
                     
                      </optgroup>
                      
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
                                <div class="row">
												<div class="col-md-4    imageUploadGrp" >
                          <label style="font-weight:bold;">Image:</label>
                          <br>
                           <button type="button" class="btn btn-default btn-lg selectImage">Upload</button>
                        </div>
                        </div>
                        <br>

					                			<div class="form-group">
													<label style="font-weight:bold;">About yourself:</label>
				                                    <textarea rows="5" cols="5" id="description" placeholder="Few words about yourself..." class="form-control"></textarea>
					                			</div>
				                			</div>

										</fieldset>

										<div class="text-right">
											<button type="submit" class="btn btn-primary submit">Submit form <i class="icon-arrow-right14 position-right"></i></button>
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
var imgUpdate;
var fileCount;


  $('.selectImage').on('click',function(e){
      e.preventDefault();
    });
    var url = '<?php echo site_url("pharmacy/add_pharmacy")?>';

    imgUpdate = new Dropzone(".selectImage",
    {

      url: url,
      autoProcessQueue: false,
      autoDiscover: false,
      paramName: "image",
      addedfile: function(file){

        $('.data-dz-name').text(file.name);
        fileCount = imgUpdate.files.length;
        
      },
      thumbnail: function(file, dataUrl){
        $('#offerImage').attr('src', dataUrl);
      },
      sending: function(file, xhr, formData){
          formData.append("name", $('#name').val());
          formData.append("email", $('#email').val());
          formData.append("password", $('#password').val());
          formData.append("dob", $('#dob').val());
          formData.append("gender", $('#gender').val());
          formData.append("phone_no", $('#phone_no').val());
          formData.append("address", $('#address').val());
          formData.append("description", $('#description').val());
          formData.append("created_on", $('#created_on').val());
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> pharmacy Entered.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('pharmacy') ?>");},1000) 
              
                       }

}
    });


$('.submit').on('click',function(){
  if(!$('#name').val()){
      new PNotify({
        title:'Error',
        text:'Fill the Name fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#email' ).val()){
      new PNotify({
        title:'Error',
        text:'Enter the Email',
        addclass:'bg-danger'
      });
     }
     else if(!$('#password').val()){
      new PNotify({
        title:'Error',
        text:'Fill the Password fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#dob' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Date of Birth fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#phone_no' ).val()){
      new PNotify({
        title:'Error',
        text:'Enter the Phone Number fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#gender' ).val()){
      new PNotify({
        title:'Error',
        text:'Select The Gender',
        addclass:'bg-danger'
      });
     }
     else if(!$('#address' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Address field',
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
        text:'Fill the About Doctor fields',
        addclass:'bg-danger'
      });
     }
     else{ 
       if (fileCount > 0) {
      
    imgUpdate.processQueue();
  }
  else{
    new PNotify({
        title:'Error',
        text:'Upload An Image',
        addclass:'bg-danger'
      });
  }
  }


  
});
</script>

 <!-- <script type="text/javascript">


$('.submit').on('click',function(){
    var pharmacistData = new Object();
    pharmacistData.name = $('#name').val();
    pharmacistData.email = $('#email').val();
    pharmacistData.password = $('#password').val();
    pharmacistData.dob = $('#dob').val();
    pharmacistData.phone_no = $('#phone_no').val();
    pharmacistData.address = $('#address').val();
    pharmacistData.created_on = $('#created_on').val();
    pharmacistData.gender = $('#gender').val();
    pharmacistData.description = $('#description').val();	
    var url = '<?php echo site_url("pharmacy/add_pharmacy")?>';
if(!$('#name').val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Name fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#email' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Enter the Email',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#password').val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Password fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#dob' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Date of Birth fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#phone_no' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Enter the Phone Number fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#gender' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Select The Gender',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#address' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Address field',
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
        data: pharmacistData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data['success']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> Pharmacy Entered.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('pharmacy') ?>");},1000) 
              
                      }
                      
            
        }
           
});
}
});

</script> -->

</body>
</html>