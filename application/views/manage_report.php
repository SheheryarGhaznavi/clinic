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
<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/components_notifications_pnotify.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/notifications/pnotify.min.js"></script>
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
							<h5 class="panel-title">Report Data</h5>
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
									<th>Title</th>
									<th>Patient Name</th>
									<th>Subject</th>
									<th>daignoses</th>
									<th>Modified Date</th>
                  <th>Image</th>
									<th>description</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($rep as $t): ?>
                                            <tr class="reportTable" id="tablereport">
                                                <td><?php echo $t->title ?></td> <td><?php echo $this->patient_model->get_pat($t->patient_id)[0]->name ?></td>
                                            
                                                <td><?php echo $t->subject ?></td>
                                                <td><?php echo $t->daignoses ?></td>
                                                <td><?php echo $t->modified_date ?></td>
                                                <td><a data-toggle="modal" data-target="#my"><img src="<?php echo base_url()?>upload/reports/<?php echo $t->image ?>" class="img-circle"  style="height: 50px;width: 50px;"></a></td>
                                                <td><?php echo substr($t->description, 0,20) ?></td>
                                                <td class="center">
                                                    <div class="btn-group">
                                                       
                                                        <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="" data-id="<?php echo $t->id ?>"><a>View Report</a></li>
                                                            <li class="editrep" data-id="<?php echo $t->id?>"><a data-toggle="modal" data-target="#myModal">Edit</a></li>
                                                            <li class="dltrep" data-id="<?php echo $t->id ?>"><a>Remove</a></li>
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
	 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Report Data</h4>
          <div class="alertdiv"></div>
        </div>
        <div class="modal-body">

<div class="row">
													<div class="col-md-4">
													<label style="font-weight:bold;">Title:</label>
													<input type="text" id="title" class="form-control" placeholder="Report Title">
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
                  								 <label style="font-weight:bold;">Daignoses</label>
                  								 <input type="text" id="daignoses" placeholder="Patient Daignoses" class="form-control">
                 								 </div> 

												


</div><br>


<div class="row">
												<div class="col-md-4">
													<label style="font-weight:bold;">Subject</label>
													<input type="text" id="subject" class="form-control" placeholder="Report Subject">
												</div>


												

												

                  								<div class="col-md-4">
                  								 <label style="font-weight:bold;">Modification Date</label>
                  								 <input type="text" id="modified_date"  class="form-control">
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

												<div class="form-group">
													<label style="font-weight:bold;">About Report</label>
													
													 <textarea rows="5" cols="5" id="description" placeholder="Few words about Report..." class="form-control"></textarea>
					                            
												</div>
												</div>
           

        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-default       submit">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
	<!-- /page container -->
<script type="text/javascript">
var imgUpdate;
var fileCount;
var id;

$('.dltrep').on('click',function(){
  var div = $(this);
         id = $(this).data("id");
        var url = '<?php echo site_url("report/delete") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              
                div.closest('.reportTable').hide('slow');
         }
            });
});
         var id;
$('.editrep').on('click',function(){
  var div = $(this);
    id = $(this).data("id");
        var url = '<?php echo site_url("report/get_report") ?>'+'/'+id;

      $('.selectImage').on('click',function(e){
      e.preventDefault();
    });
      
    imgUpdate = new Dropzone(".selectImage",
    {

      url: '<?php echo site_url("report/update_report")?>'+'/'+id,
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
          formData.append("modified_date", $('#modified_date').val());
          formData.append("daignoses", $('#daignoses').val());
          formData.append("description", $('#description').val());
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> report Updated.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('report/manage') ?>");},1000) 
              
                       }

}
    });


     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
              $('#title').val(data.title);
                $('#patient_id').val(data.patient_id);
                $('#subject').val(data.subject);
                $('#modified_date').val(data.modified_date);
                $('#imgmodal').attr('src', '<?php echo base_url() ?>upload/reports/'+data.image);
                $('#daignoses').val(data.daignoses);
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
            var url = '<?php echo site_url("report/update_report") ?>'+'/'+id;
            var post  = new Object();

                post.title =  $('#title').val();
                post.patient_id = $('#patient_id').val();
                post.subject = $('#subject').val();
                post.modified_date = $('#modified_date').val();
                post.daignoses = $('#daignoses').val();
                post.description = $('#description').val();
                $.ajax({
                    type : 'post',
                    url  : url,
                    data : post,
                    success : function(response){
                        
                            var data = $.parseJSON(response);
                            
                            if (data['success']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> report updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('report/manage') ?>");},1000) 
              
                            }
                            if (data['error']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Not Successfull!</span> report Not Updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('report/manage') ?>");},1000) 
              
                            }
                    }
                });
              }
        });
</script>
</body>
</html>