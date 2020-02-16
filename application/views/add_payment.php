<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Payment</title>

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
      $('.addSiteForm').hide();

       $('.daterange-basic').pickadate({
        format: 'yyyy-mm-dd'
      });
      $('.daterange-basic2').pickadate({
        format: 'yyyy-mm-dd'
      });
      
      var d = new Date();

var month = d.getMonth()+1;
var day = d.getDate();

var output = d.getFullYear() + '-' +
    ((''+month).length<2 ? '0' : '') + month + '-' +
    ((''+day).length<2 ? '0' : '') + day;
      $('.daterange-basic').val(output);

    });
  </script>


  <script type="text/javascript" src="<?php echo base_url()?>assets/dropzone.js"></script>
  <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/datepicker.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/effects.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/jgrowl.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/ui/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/bootbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/app.js"></script>

  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/styling/uniform.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/styling/switchery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/styling/switch.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/components_notifications_pnotify.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/pnotify.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/form_checkboxes_radios.js"></script><!-- /theme JS files -->

</head>

<body>

	
<?php $this->load->view('nav'); ?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

<?php $this->load->view('main_nav'); ?>
					
			<!-- Advanced legend -->




           
            <div id ="container">

            <div class="panel panel-default">
    <div>
        <div class="panel-heading"><h6 class="panel-title" >Add Payment Form</h6></div>
          <div class="panel-body">
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
                    <label  class="control-label" >Patient Name</label>
                    <select  data-placeholder="Select a Patient" id="patient_id" class="selecttwo">
                      <option></option>
                      <optgroup label="Select a Patient">
                       <?php foreach($pat as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                               <?php endforeach ?>
                      </optgroup>
                    </select>
                  </div>
                   
                   <div class="col-md-4">
                  
                  <label>Created On</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="created_on" readonly="">
                    </div>
                  </div>
                    <div class="col-md-4    imageUploadGrp" >
                          <label style="font-weight:bold;">Image:</label>
                          <br>
                           <button type="button" class="btn btn-default btn-lg selectImage">Upload</button>
                        </div>   


                        </div>
</div>
</div>
<br>

                        
                          <div class="row">
                            

                            

                        <div class="col-md-4">
                 <button style="margin-top:4px;" type="button" class="btn border-warning text-warning-600 btn-flat btn-icon addTreat"><i class="icon-pin-alt"></i></button>
                <label style="font-weight:bold;">&nbsp; Click to add Treatment</label>
                </div>
                       

                        
              
          </div>
          <br>

                     
                               

           <div class="form-group addSiteForm" id="addSiteForm">
              <div class="row">





                 <div class="col-md-4">
                    <label  class="control-label" >Treatment Name</label>
                    <select  data-placeholder="Select a Treatment" id="treatment_id" class="selecttwo  treat">
                      <option></option>
                      <optgroup label="Select a Treatment">
                       <?php foreach($trea as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                               <?php endforeach ?>
                      </optgroup>
                    </select>
                  </div>
                   <div class="col-md-4">
                          <label style="font-weight:bold;">Total Amount:</label>
                          <input type="number" id="amount" class="form-control   amount" placeholder="Enter total Price">
                        </div>

                <div class="col-md-4">

                <br>
                 <button type="button" class="btn border-warning text-warning-600 btn-flat btn-icon addNewField"><i class="icon-plus3"></i></button>
                 <button type="button" class="btn border-warning text-warning-600 btn-flat btn-icon removeField"><i class="icon-minus3"></i></button>
                </div>

              </div>
            </div>

            <div class="insertBeforClass"></div>

             <div class="text-right">
                      <button type="submit" class="btn btn-primary    submit">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                              

                              
                    </fieldset>

                    </div>



              </div>






           

        </div>
      </div>

          </div>
          



								</div>
							</form>
							<!-- /a legend -->


					
						</div>
		<!-- /page content -->


	</div>




 <script type="text/javascript">
var imgUpdate;
var fileCount;


  $('.selectImage').on('click',function(e){
      e.preventDefault();
    });
    var url = '<?php echo site_url("payment/add_payment")?>';

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
          formData.append("patient_id", $('#patient_id').val());
          formData.append("created_on", $('#created_on').val());
          formData.append("amount", $('.amount').map(function(){return $(this).val();}).get());
          formData.append("treatment_id", $('.treat').map(function() {return $(this).val();}).get());
          
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> payment Entered.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('payment') ?>");},1000) 
              
                       }

}
    });


$('.submit').on('click',function(){
  if(!$('#patient_id').val()){
      new PNotify({
        title:'Error',
        text:'Choose the Patient',
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









 <!--   <script type="text/javascript">


$('.submit').on('click',function(){
    var paymentData = new Object();
    paymentData.patient_id = $('#patient_id').val();
    paymentData.created_on = $('#created_on').val();
    paymentData.amount = $('.amount').map(function()
    {
      return $(this).val();
    }).get();  
    paymentData.treatment_id = $('.treat').map(function() {
      return $(this).val(); 
       }).get();
    var url = '<?php echo site_url("payment/add_payment")?>';
if(!$('#patient_id').val()){
      new PNotify({
        title:'Error',
        text:'Fill the Patient fields',
        addclass:'bg-danger'
      });
    }
    else if(!$('#created_on' ).val()){
      new PNotify({
        title:'Error',
        text:'Select the Payment Date',
        addclass:'bg-danger'
      });
    }
    else{ 
    $.ajax({
        url: url,
        data: paymentData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data['success']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> payment Entered.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('payment') ?>");},1000) 
              
                      }
                      
            
        }
           
});
  }
});

</script> -->
	<!-- /page container -->
	
<script type="text/javascript">



$('.selecttwo').select2();
 $('.addTreat').on('click',function(){
    $('.addSiteForm').show('slow/400/fast', function() {

    });
 });

  $('.addNewField').on('click',function(){
    $('.selecttwo').select2("destroy");
     $('#addSiteForm').clone(true, true)
        .find('input:text').val('').end()
        .insertBefore('.insertBeforClass');
           $('.selecttwo').select2();
  });


   $('.removeField').on('click', function() {
    var div = $(this);
    if ($('.addSiteForm').length ===1) {
      swal({
            title: "Oops...",
            text: "Cannot remove the only remaining field!",
            confirmButtonColor: "#EF5350",
            type: "error"
        });
    }else{
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this field!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#EF5350",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel pls!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
              div.closest('.addSiteForm').remove();
                swal({
                    title: "Deleted!",
                    text: "Field has been removed.",
                    confirmButtonColor: "#66BB6A",
                    type: "success"
                });
            }
            else {
                swal({
                    title: "Cancelled",
                    text: "Your field is safe :)",
                    confirmButtonColor: "#2196F3",
                    type: "error"
                });
            }
        });//
      }
    });
</script>




</body>
</html>