

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

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

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

<!-- Scrollable datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Patients Data</h5>
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
									<th>Gender</th>
									<th>Entry Date</th>
									<th>Department</th>
									<th>Blood Group</th>
                  <th>Image</th>
									<th>About Disease</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
										    <?php foreach($pat as $t): ?>
                                           <tr class="patientTable" id="tablepatient">
                                                <td><?php echo $t->name ?></td>
                                                <td><?php echo $this->doctor_model->get_gender($t->gender)[0]->gender ?></td>
                                                <td><?php echo $t->entry_date ?></td>
                                                <td><?php echo $this->doctor_model->join_dept($t->dept_id)[0]->name?></td>
                                                <td><?php echo $t->blood_group ?></td>
                                                 <td><a data-toggle="modal" data-target="#my"><img src="<?php echo base_url()?>upload/patient/<?php echo $t->image ?>" class="img-circle"  style="height: 50px;width: 50px;"></a></td>
                  
                                                <td><?php echo substr($t->about_disease, 0, 30)?></td>
                                                <td class="center">
                                                    <div class="btn-group">
                                                       
                                                        <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="editpat" data-id="<?php echo $t->id ?>"><a data-toggle="modal" data-target="#myModal">Edit</a></li>
                                                            <li class="dltpat" data-id="<?php echo $t->id ?>"><a>Remove</a></li>
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
          <h4 class="modal-title">Edit Patients Data</h4>
          <div class="alertdiv"></div>
        </div>
        <div class="modal-body">

<div class="row">
													<div class="col-md-4">
													<label style="font-weight:bold;">Name:</label>
													<input type="text" id="name" class="form-control" placeholder="Edit Your Name">
												</div>


												

												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Age</label>
                  								 <input type="number" id="age" placeholder="Edit Your Age" class="form-control">
                 								 </div> 

												<div class="col-md-4">
													<label style="font-weight:bold;">Address:</label>
													<input type="text" id="address" class="form-control" placeholder="Edit Your Address">
												</div>


</div><br>


<div class="row">
												<div class="col-md-4">
                    <label  class="control-label" style="font-weight:bold;">Department</label>
                    <select  data-placeholder="Select a Department" id="dept_id" class="select-clear">
                    <option></option>
                      <optgroup label="Select a Department">
                       
                        <?php foreach($dep as $c): ?>
                                                <option value="<?php echo $c->id ?>"><?php echo $c->name ?></option>
                                               <?php endforeach ?>
                     
                      </optgroup>
                      
                    </select>
                  </div>

												

												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Phone No</label>
                  								 <input type="number" id="phone_no" placeholder="Edit Your Phone No" class="form-control">
                 								 </div> 

												<div class="col-md-4">
                    <label  class="control-label" style="font-weight:bold;">Blood Gruop</label>
                    <select  data-placeholder="Select a Blood Gruop" id="blood_group" class="select-clear">
                    <option></option>
                      <optgroup label="Select a Blood Gruop">
                       
                        <option>A+</option>
                         <option>A-</option>
                          <option>B+</option>
                           <option>B-</option>
                            <option>O+</option>
                             <option>O-</option>
                     
                      </optgroup>
                      
                    </select>
                  </div>

													
												</div>
												<br>
													<div class="row">
												


												

												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Entry Date</label>
                  								 <input type="text" id="entry_date" placeholder="Change Your Joining Date" class="form-control">
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
                  								 <label style="font-weight:bold;">CNIC</label>
                  								 <input type="number" id="cnic" placeholder="Edit Your CNIC No" class="form-control">
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
											<div class="row">

												<div>
													<label style="font-weight:bold;">About Disease</label>
													 <textarea rows="5" cols="5" id="about_disease" placeholder="Few words about Disease" class="form-control"></textarea>
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

  $('.selectImage').on('click',function(e){
      e.preventDefault();
    });

$('.dltpat').on('click',function(){
  var div = $(this);
        id = $(this).data("id");
        var url = '<?php echo site_url("patient/delete") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              
                div.closest('.patientTable').hide('slow');
         }
            });
});

 var id;
$('.editpat').on('click',function(){
  var div = $(this);
    id = $(this).data("id");
        var url = '<?php echo site_url("patient/get_patient") ?>'+'/'+id;


      
      
    imgUpdate = new Dropzone(".selectImage",
    {

      url: '<?php echo site_url("patient/update_patient")?>'+'/'+id,
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
          formData.append("blood_group", $('#blood_group').val());
          formData.append("dept_id", $('#dept_id').val());
          formData.append("age", $('#age').val());
          formData.append("gender", $('#gender').val());
          formData.append("phone_no", $('#phone_no').val());
          formData.append("address", $('#address').val());
          formData.append("cnic", $('#cnic').val());
          formData.append("about_disease", $('#about_disease').val());
          formData.append("entry_date", $('#entry_date').val());
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> patient Updated.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('patient/manage') ?>");},1000) 
              
                       }

}
    });

     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
              $('#name').val(data.name);
              $('#age').val(data.age);
              $('#address').val(data.address);
              $('#phone_no').val(data.phone_no);
              $('#dept_id').val(data.dept_id);
              $('#blood_group').val(data.blood_group);
              $('#cnic').val(data.cnic);
              $('#gender').val(data.gender);
              $('#imgmodal').attr('src', '<?php echo base_url() ?>upload/patient/'+data.image);
              $('#entry_date').val(data.entry_date);
              $('#about_disease').val(data.about_disease);
        
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
            var url = '<?php echo site_url("patient/update") ?>'+'/'+id;
            var post  = new Object();

                post.name =  $('#name').val();
                post.age =  $('#age').val();
                post.address =  $('#address').val();
                post.phone_no =  $('#phone_no').val();
                post.dept_id =  $('#dept_id').val();
                post.gender =  $('#gender').val();
                post.blood_group =  $('#blood_group').val();
                post.cnic =  $('#cnic').val();
                post.entry_date = $('#entry_date').val();
                post.about_disease = $('#about_disease').val();
                $.ajax({
                    type : 'post',
                    url  : url,
                    data : post,
                    success : function(response){
                        
                            var data = $.parseJSON(response);
                            
                            if (data['success']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> patient updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('patient/manage') ?>");},1000) 
              
                            }
                            else if (data['error']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Not Successfull!</span> patient Not Updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('patient/manage') ?>");},1000) 
              
                            }
                    }
                });
              }
        });















</script>
</body>
</html>