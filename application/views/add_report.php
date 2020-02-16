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
										<h5 class="panel-title">Add Report Form</h5>
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
											<div class="row">
												<div class="form-gruop">
											<div class="collapse in" id="demo1">
												<div class="col-md-4">
													<label>Title:</label>
													<input type="text" id="title" class="form-control" placeholder="Enter Title">
												</div>

												<div class="col-md-4">
                    <label  class="control-label" >Patient</label>
                    <select  data-placeholder="Select a Patient" id="patient_id" class="select-clear">
                      <option></option>
                      <optgroup label="Select a Patient">
                       <?php foreach($pat as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                               <?php endforeach ?>
                      </optgroup>
                    </select>
                  </div>

                  <div class="col-md-4">
                          <label>Diagnosis:</label>
                          <input type="text" id="daignoses" class="form-control" placeholder="Patient Diagnosis">
                        </div>

												</div>
</div>
</div>

												<br>
													<div class="row">
														<div class="form-group">
															<div class="col-md-4">
													<label>Subject:</label>
													<input type="text" id="subject" class="form-control" placeholder="Report Subject">
												</div>

												
												<div class="col-md-4">
                  
                  <label>Modified Date:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="modified_date" readonly="">
                    </div>
                  </div>  

                        <div class="col-md-4    imageUploadGrp" >
                          <label style="font-weight:bold;">Image:</label>
                          <br>
                           <button type="button" class="btn btn-default btn-lg selectImage">Upload</button>
                        </div>  
              </div>
          </div>
          <br>

												
													<div class="row">
					                			<div class="form-group">
													<label>About Report:</label>
				                                    <textarea rows="5" cols="5" id="description" placeholder="Few words about report..." class="form-control"></textarea>
					                			</div>
                                </div>

					                			<div class="text-right">
											<button type="submit" class="btn btn-primary submit">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
				                			

				                			
										</fieldset>

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
    var url = '<?php echo site_url("report/add_report")?>';

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
          formData.append("title", $('#title').val());
          formData.append("patient_id", $('#patient_id').val());
          formData.append("subject", $('#subject').val());
          formData.append("daignoses", $('#daignoses').val());
          formData.append("modified_date", $('#modified_date').val());
          formData.append("description", $('#description').val());
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> report Entered.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('report') ?>");},1000) 
              
                       }

}
    });


$('.submit').on('click',function(){
  if(!$('#title').val()){
      new PNotify({
        title:'Error',
        text:'Fill the Title fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#patient_id' ).val()){
      new PNotify({
        title:'Error',
        text:'Choose The Patient',
        addclass:'bg-danger'
      });
     }
     else if(!$('#daignoses').val()){
      new PNotify({
        title:'Error',
        text:'Fill the Diagnosis fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#subject' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Subject fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#modified_date' ).val()){
      new PNotify({
        title:'Error',
        text:'Enter The Modified Date',
        addclass:'bg-danger'
      });
     }
     else if(!$('#description' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the About fields',
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
<!--  <script type="text/javascript">


$('.submit').on('click',function(){
    var reportData = new Object();
    reportData.title = $('#title').val();
    reportData.patient_id = $('#patient_id').val();
    reportData.subject = $('#subject').val();
    reportData.daignoses = $('#daignoses').val();
    reportData.modified_date = $('#modified_date').val();
    reportData.description = $('#description').val();	
    var url = '<?php echo site_url("report/add_report")?>';
if(!$('#title').val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the title fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#patient_id' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Choose The Patient',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#subject' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Subject fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#daignoses' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Diagnosis fields',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#modified_date' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Enter The Modified Date',
    		addclass:'bg-danger'
    	});
    }
    else if(!$('#description' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the About Report fields',
    		addclass:'bg-danger'
    	});
    }
    else{ 
    $.ajax({
        url: url,
        data: reportData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data['success']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> report Entered.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('report') ?>");},1000) 
              
                      }
                      
            
        }
           
});
}
});

</script> -->
</body>
</html>