

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
							<h5 class="panel-title">Pharmacist Data</h5>
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
									<th>Name</th>
									<th>Email</th>
									<th>Phone No</th>
									<th>Gender</th>
									<th>Status</th>
                  <th>Images</th>
									<th>Profile</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($phar as $t): ?>
                                            <tr class="pharmacyTable" id="tablepharmacy">
                                                <td><?php echo $t->name ?></td>
                                                <td><?php echo $t->email ?></td>                                              
                                                <td><?php echo $t->phone_no ?></td>
                                               <td><?php echo $this->doctor_model->get_gender($t->gender)[0]->gender ?></td>
                                                <?php if($t->status): ?>
                                                <td><span class="label label-info">Active</td>
                                            <?php else: ?>
                                            		<td><span class="label label-danger">Non-Active</td>

                                            <?php endif ?>
                                            <td><a data-toggle="modal" data-target="#my"><img src="<?php echo base_url()?>upload/pharmacist/<?php echo $t->image ?>" class="img-circle"  style="height: 50px;width: 50px;"></a></td>
                                            <td><?php echo substr($t->description, 0,20)?></td>
                                                <td class="center">
                                                    <div class="btn-group">
                                                       
                                                        <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="editphar" data-id="<?php echo $t->id ?>"><a data-toggle="modal" data-target="#myModal">Edit</a></li>
                                                            <li class="dltphar" data-id="<?php echo $t->id ?>"><a>Remove</a></li>
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
          <h4 class="modal-title">Edit Pharmacist Data</h4>
          <div class="alertdiv"></div>
        </div>
        <div class="modal-body">

<div class="row">
													<div class="col-md-4">
													<label style="font-weight:bold;">Name:</label>
													<input type="text" id="name" class="form-control" placeholder="e.g. Akbar">
												</div>


												

												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Email</label>
                  								 <input type="email" id="email" placeholder="Enter Your Email" class="form-control">
                 								 </div> 

												<div class="col-md-4">
													<label style="font-weight:bold;">Address:</label>
													<input type="text" id="address" class="form-control" placeholder="Put Your Address">
												</div>


</div><br>


<div class="row">
												<div class="col-md-4">
													<label style="font-weight:bold;">Phone No</label>
													<input type="number" id="phone_no" class="form-control" placeholder="Put Phone No">
												</div>


												

												 <div class="col-md-4">
                    <label  class="control-label" style="font-weight:bold;">Gender</label>
                    <select  data-placeholder="Select a Gender" id="gender" class="select-clear">

                      <option></option>
                      <optgroup label="Select a Gender">
                       
                        <?php foreach($gen as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->gender?></option>
                                               <?php endforeach ?>
                     
                      </optgroup>
                      
                    </select>
                  </div>
                  
                   <div class="col-md-4">
                  								 <label style="font-weight:bold;">Joining Date</label>
                  								 <input type="text" id="created_on"  class="form-control">
                 								 </div> 
                  											</div>
                  											<br>
                  											<div class="row">
                  											<div class="col-md-4">
                    <label  class="control-label" style="font-weight:bold;">Status</label>
                    <select   id="status" class="select-clear" placeholder="Select A Status">
                    <option></option>
                      <optgroup label="Select a Status">
                       <option value="<?php echo '1' ?>"><?php echo 'Active' ?></option>
                       <option value="<?php echo '0' ?>"><?php echo 'Non-Active' ?></option>
                       
                     
                      </optgroup>
                      
                    </select>
                  </div>
                  </div>
                  <br>
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
                      </div>
                      <br>

												<div class="form-group">
													<label style="font-weight:bold;">Profile</label>
													
													 <textarea rows="5" cols="5" id="description" placeholder="Few words about You..." class="form-control"></textarea>
					                            
												</div>


           

        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-default  submit">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<script type="text/javascript">
var imgUpdate;
var fileCount;
var id;

$('.dltphar').on('click',function(){
  var div = $(this);
         id = $(this).data("id");
        var url = '<?php echo site_url("pharmacy/delete") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              
                div.closest('.pharmacyTable').hide('slow');
         }
            });
});

  
$('.editphar').on('click',function(){
  var div = $(this);
    id = $(this).data("id");
        var url = '<?php echo site_url("pharmacy/get_pharmacy")?>'+'/'+id;

 $('.selectImage').on('click',function(e){
       e.preventDefault();
     });
      
     imgUpdate = new Dropzone(".selectImage",
     {

       url: '<?php echo site_url("pharmacy/update_pharmacy")?>'+'/'+id,
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
           formData.append("dob", $('#dob').val());
           formData.append("gender", $('#gender').val());
           formData.append("phone_no", $('#phone_no').val());
           formData.append("address", $('#address').val());
           formData.append("status", $('#status').val());
           formData.append("description", $('#description').val());
           formData.append("created_on", $('#created_on').val());
       },
       success: function(file, response){
           var data = $.parseJSON(response);
                           if (data['success']) {
                           $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> pharmacy Updated.</div>');
                            window.setTimeout(function(){window.location.replace("<?php echo site_url('pharmacy/manage') ?>");},1000) 
              
                        }

 }
     });
     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
                $('#name').val(data.name);
                $('#email').val(data.email);
                $('#address').val(data.address);
                $('#created_on').val(data.created_on);
                $('#gender').val(data.gender);
                $('#phone_no').val(data.phone_no);
                $('#status').val(data.status);
                $('#imgmodal').attr('src', '<?php echo base_url() ?>upload/pharmacist/'+data.image);
                $('#description').val(data.description);
        
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
            var url = '<?php echo site_url("pharmacy/update") ?>'+'/'+id;
            var post  = new Object();

                post.name =  $('#name').val();
                post.email = $('#email').val();
                post.address = $('#address').val();
                post.created_on = $('#created_on').val();
                post.phone_no = $('#phone_no').val();
                post.dob = $('#dob').val();
                post.gender = $('#gender').val();
                post.status = $('#status').val();
                post.description = $('#description').val();
                $.ajax({
                    type : 'post',
                    url  : url,
                    data : post,
                    success : function(response){
                        
                            var data = $.parseJSON(response);
                            
                            if (data['success']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> pharmacy updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('pharmacy/manage') ?>");},1000) 
              
                            }
                            if (data['error']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Not Successfull!</span> pharmacy Not Updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('pharmacy/manage') ?>");},1000) 
              
                            }
                    }
                });
              }
        });

</script>
</body>
</html>