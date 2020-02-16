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
										<h5 class="panel-title">Add Medicine Form</h5>
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
												Enter Medicine information
												<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
													<i class="icon-circle-down2"></i>
												</a>
											</legend>

											<div class="collapse in" id="demo1">
											<div class="row">
												<div class = "form-group">
												<div class="col-md-4">
													<label style="font-weight:bold;">Name:</label>
													<input type="text" class="form-control" id="name" placeholder="e.g. Panadol/Ponston">
												</div>


												

												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Formula:</label>
                  								 <input type="text"  id="formula" placeholder="Enter Medicine Formula" class="form-control">
                 								 </div> 

												<div class="col-md-4">
													<label style="font-weight:bold;">Company:</label>
													<input type="text" id="company" class="form-control" placeholder="Medicine Manufacture">
												</div>
											</div>
										</div>
                                                <br>
                                                <div class="row">
                                                	<div class="form-gruop">
											
                                                        											
                                                <div class="col-md-4">
                  
                  <label style="font-weight:bold;">Entry Date:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="entry_date" readonly="">
                    </div>
                  </div>    
                        
          

												


												<div class="col-md-4">
													<label style="font-weight:bold;">Price:</label>
													<input type="number" id="price" class="form-control" placeholder="Enter Medicine Price">
												</div>

													<div class="col-md-4">
													<label style="font-weight:bold;">Retail Price:</label>
													<input type="number" id="retail_price" class="form-control" placeholder="Enter Retail Price">
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
													<label style="font-weight:bold;">About Medicine:</label>
				                                    <textarea rows="5" cols="5" placeholder="Medicine use in which type of disease...??" id="description" class="form-control"></textarea>
					                			</div>
				                			</div>
										</fieldset>

										<div class="text-right">
											<button type="submit" class="btn btn-primary    submit">Submit form <i class="icon-arrow-right14 position-right"></i></button>
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
    var url = '<?php echo site_url("medicines/add_medicine")?>';

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
          formData.append("formula", $('#formula').val());
          formData.append("company", $('#company').val());
          formData.append("entry_date", $('#entry_date').val());
          formData.append("price", $('#price').val());
          formData.append("retail_price", $('#retail_price').val());
          formData.append("description", $('#description').val());
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> medicines Entered.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('medicines') ?>");},1000) 
              
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
     else if(!$('#formula' ).val()){
      new PNotify({
        title:'Error',
        text:'Enter the Formula',
        addclass:'bg-danger'
      });
     }
     else if(!$('#company').val()){
      new PNotify({
        title:'Error',
        text:'Fill the Company fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#entry_date' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Entry Date fields',
        addclass:'bg-danger'
      });
     }
     else if(!$('#price' ).val()){
      new PNotify({
        title:'Error',
        text:'Enter The Price',
        addclass:'bg-danger'
      });
     }
     else if(!$('#retail_price' ).val()){
      new PNotify({
        title:'Error',
        text:'Enter the Retail Price',
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
    var medicineData = new Object();
    medicineData.name = $('#name').val();
    medicineData.formula = $('#formula').val();
    medicineData.company = $('#company').val();
    medicineData.entry_date = $('#entry_date').val();
    medicineData.price = $('#price').val();
    medicineData.retail_price = $('#retail_price').val();
    medicineData.description = $('#description').val();
    var url = '<?php echo site_url("medicines/add_medicine")?>';
if(!$('#name').val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the Name fields',
    		addclass:'bg-danger'
    	});
    }
   else if(!$('#formula' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Formula fields',
        addclass:'bg-danger'
      });
    }else if(!$('#company' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Company fields',
        addclass:'bg-danger'
      });
    }else if(!$('#entry_date' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Entry Date fields',
        addclass:'bg-danger'
      });
    }else if(!$('#price' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Price fields',
        addclass:'bg-danger'
      });
    }else if(!$('#retail_price' ).val()){
      new PNotify({
        title:'Error',
        text:'Fill the Retail Price fields',
        addclass:'bg-danger'
      });
    }
    else if(!$('#description' ).val()){
    	new PNotify({
    		title:'Error',
    		text:'Fill the About Medicine fields',
    		addclass:'bg-danger'
    	});
    }
    else{ 
    $.ajax({
        url: url,
        data: medicineData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data['success']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> Medicine Entered.</div>');
                         window.setTimeout(function(){window.location.replace("<?php echo site_url('medicines') ?>");},1000) 
              
                         
                      }
                      
            
        }
           
});
}
});

</script> -->




</body>
</html>