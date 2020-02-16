

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>themelock.com - Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	 <?php $this->load->view('font')?>
	<link href="<?php echo base_url()?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()?>assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
  <script type="text/javascript" src="<?php echo base_url()?>assets/dropzone.js"></script>
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/datatables_basic.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
  
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/form_select2.js"></script>
  
	<!-- /theme JS files -->

</head>
<body>

	
<?php $this->load->view('nav'); ?>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">



<?php $this->load->view('main_nav'); ?>
					



<!-- Scrollable datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Payment Data</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<!--  -->

						<table class="table datatable-basic" width="100%">
							<thead>
								<tr>
									<th>Payer Name</th>
									<th>Treatment Name</th>
                  <th>Payment</th>
									<th>Payment Date</th>
                  <th>images</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($pay as $t): ?>
                                            <tr class="paymentTable" id="tablepayment">
                                                <td><?php echo $this->patient_model->get_pat($t->patient_id)[0]->name?></td>
                                                <td><?php echo $this->treatment_model->get_treat($t->treatment_id)[0]->name?></td>
                                                <td><?php echo $t->amount?></td>
                                                <td><?php echo $t->created_on ?></td>
                                                <td><a data-toggle="modal" data-target="#my"><img src="<?php echo base_url()?>upload/payment/<?php echo $t->image ?>" class="img-circle"  style="height: 50px;width: 50px;"></a></td>
                                                <td class="center">
                                                    <div class="btn-group">
                                                       
                                                        <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="editpay" data-id="<?php echo $t->id?>"><a data-target="#myModal" data-toggle="modal">Edit</a></li>
                                                            <li class="dltpay" data-id="<?php echo $t->id ?>"><a>Remove</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                             <?php endforeach ?>
							</tbody>
						</table>
					</div>
					<!-- /scrollable datatable -->

						</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->








	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Doctors Data</h4>
          <div class="alertdiv"></div>
        </div>
        <div class="modal-body">

<div class="row">
													<div class="col-md-4">
                    <label  class="control-label" >Patient Name</label>
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
                    <label  class="control-label" >Treatment Name</label>
                    <select  data-placeholder="Select a Treatment" id="treatment_id" class="select-clear"">
                      <option></option>
                      <optgroup label="Select a Treatment">
                       <?php foreach($trea as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                               <?php endforeach ?>
                      </optgroup>
                    </select>
                  </div>
												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Payment Date</label>
                  								 <input type="text" id="created_on" class="form-control">
                 								 </div> 


</div><br>


													<div class="row">













                      <div class="col-md-4">
                       <label style="font-weight:bold;">Image</label>
                       <br>
                                  
                        <img src="" class="img-circle" id="imgmodal"  style="height: 50px;width: 50px;">
                        </div>
                        <div class="col-md-4    imageUploadGrp" >
                          <label style="font-weight:bold;">Change Image:</label>
                          <br>
                           <button type="button" class="btn btn-default btn-lg selectImage">Upload</button>
                        </div>
                      
                        <div class="col-md-4">
                          <label style="font-weight:bold;">Total Amount:</label>
                          <input type="number" id="amount" class="form-control" placeholder="Enter total Price">
                        </div>
												

												

												


											</div>
                     
           

        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-default       submit">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>






<script type="text/javascript">

var imgUpdate;
var fileCount;
var id;
$('.editpay').on('click',function(){
  var div = $(this);
    id = $(this).data("id");
        var url = '<?php echo site_url("payment/get_payment") ?>'+'/'+id;


         $('.selectImage').on('click',function(e){
      e.preventDefault();
    });
      
    imgUpdate = new Dropzone(".selectImage",
    {

      url: '<?php echo site_url("payment/update_payment")?>'+'/'+id,
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
          formData.append("treatment_id", $('#treatment_id').val());
          formData.append("amount", $('#amount').val());
          formData.append("created_on", $('#created_on').val());
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> payment Updated.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('payment/manage') ?>");},1000) 
              
                       }

}
    });





     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
              $('#patient_id').val(data.patient_id);
              $('#treatment_id').val(data.treatment_id);
              $('#created_on').val(data.created_on);
              $('#amount').val(data.amount);
              $('#imgmodal').attr('src', '<?php echo base_url() ?>upload/payment/'+data.image);
        
         }
            });
});



$('.submit').on('click', function(){

  if (fileCount > 0) 
 {

    imgUpdate.processQueue();
  }
  else
  {
            var url = '<?php echo site_url("payment/update") ?>'+'/'+id;
            var post  = new Object();

                post.patient_id =  $('#patient_id').val();
                post.treatment_id = $('#treatment_id').val();
                post.created_on = $('#created_on').val();
                post.amount = $('#amount').val();
                $.ajax({
                    type : 'post',
                    url  : url,
                    data : post,
                    success : function(response){
                        
                            var data = $.parseJSON(response);
                            
                            if (data['success']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> payment updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('payment/manage') ?>");},1000) 
              
                            }
                            if (data['error']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Not Successfull!</span> payment Not Updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('payment/manage') ?>");},1000) 
              
                            }
                    }
                });
              }
        });



$('.dltpay').on('click',function(){
  var div = $(this);
        var id = $(this).data("id");
        var url = '<?php echo site_url("payment/delete") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              
                div.closest('.paymentTable').hide('slow');
         }
            });
});

</script>
</body>
</html>