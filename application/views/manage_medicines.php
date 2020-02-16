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
							<h5 class="panel-title">Medicines Data</h5>
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
									<th>Formula</th>
									<th>Company</th>
									<th>Entry Date</th>
									<th>price</th>
									<th>Retail Price</th>
                  <th>Image</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($med as $t): ?>
                                            <tr class="medicinesTable" id="tablemedicines">
                                                <td><?php echo $t->name ?></td>
                                                <td><?php echo $t->formula ?></td>
                                                <td><?php echo $t->company ?></td>
                                                <td><?php echo $t->entry_date ?></td>
                                                <td><?php echo $t->price ?></td>
                                                <td><?php echo $t->retail_price ?></td>
                                                <td><a data-toggle="modal" data-target="#my"><img src="<?php echo base_url()?>upload/medicines/<?php echo $t->image ?>" class="img-circle"  style="height: 50px;width: 50px;"></a></td>
                                                <td class="center">
                                                    <div class="btn-group">
                                                       
                                                        <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="editmed" data-id="<?php echo $t->id?>"><a data-toggle="modal" data-target="#myModal">Edit</a></li>
                                                            <li class="dltmed" data-id="<?php echo $t->id ?>"><a>Remove</a></li>
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
          <h4 class="modal-title">Edit Medicines Data</h4>
          <div class="alertdiv"></div>
        </div>
        <div class="modal-body">

<div class="row">
													<div class="col-md-4">
													<label style="font-weight:bold;">Name:</label>
													<input type="text" id="name" class="form-control" placeholder="Medicines Name">
												</div>


												

												 <div class="col-md-4">
                  								 <label style="font-weight:bold;">Formula:</label>
                  								 <input type="text" id="formula" placeholder="Medicines Formula" class="form-control">
                 								 </div> 

												<div class="col-md-4">
													<label style="font-weight:bold;">Company:</label>
													<input type="text" id="company" class="form-control" placeholder="Medicines Company">
												</div>


</div><br>


<div class="row">
											


												

                                 <div class="col-md-4">
                                   <label style="font-weight:bold;">Entry Date</label>
                                   <input type="text" id="entry_date"  class="form-control">
                                 </div> 

												<div class="col-md-4">
													<label style="font-weight:bold;">Price:</label>
													<input type="number" id="price" class="form-control" placeholder="Enter Price">
												</div>

                        <div class="col-md-4">
                          <label style="font-weight:bold;">Retail Price:</label>
                          <input type="number" id="retail_price" class="form-control" placeholder="Retail Price">
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
													<label style="font-weight:bold;">About Medicine:</label>
													
													 <textarea rows="5" cols="5" id="description" placeholder="Few words about Medicine..." class="form-control"></textarea>
					                            
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


$('.dltmed').on('click',function(){
  var div = $(this);
        id = $(this).data("id");
        var url = '<?php echo site_url("medicines/delete") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              
                div.closest('.medicinesTable').hide('slow');
         }
            });
});
         var id;
$('.editmed').on('click',function(){
  var div = $(this);
    id = $(this).data("id");
        var url = '<?php echo site_url("medicines/get_medicines") ?>'+'/'+id;
        
          $('.selectImage').on('click',function(e){
      e.preventDefault();
    });
      
    imgUpdate = new Dropzone(".selectImage",
    {

      url: '<?php echo site_url("medicines/update_medicines")?>'+'/'+id,
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
          formData.append("price", $('#price').val());
          formData.append("retail_price", $('#retail_price').val());
          formData.append("formula", $('#formula').val());
          formData.append("company", $('#company').val());
          formData.append("description", $('#description').val());
          formData.append("entry_date", $('#entry_date').val());
      },
      success: function(file, response){
          var data = $.parseJSON(response);
                          if (data['success']) {
                          $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> medicines Updated.</div>');
                           window.setTimeout(function(){window.location.replace("<?php echo site_url('medicines/manage') ?>");},1000) 
              
                       }

}
    });
            
     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
                $('#name').val(data.name);
                $('#entry_date').val(data.entry_date);
                $('#price').val(data.price);
                $('#retail_price').val(data.retail_price);
                $('#formula').val(data.formula);
                $('#company').val(data.company);
                $('#imgmodal').attr('src', '<?php echo base_url() ?>upload/medicines/'+data.image);
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
            var url = '<?php echo site_url("medicines/update") ?>'+'/'+id;
            var post  = new Object();

                post.name =  $('#name').val();
                post.entry_date = $('#entry_date').val();
                post.price = $('#price').val();
                post.retail_price = $('#retail_price').val();
                post.formula = $('#formula').val();
                post.company = $('#company').val();
                post.description = $('#description').val();
                $.ajax({
                    type : 'post',
                    url  : url,
                    data : post,
                    success : function(response){
                        
                            var data = $.parseJSON(response);
                            
                            if (data['success']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> medicines updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('medicines/manage') ?>");},1000) 
              
                            }
                            if (data['error']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Not Successfull!</span> medicines Not Updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('medicines/manage') ?>");},1000) 
              
                            }
                    }
                });
              }
        });
</script>
</body>
</html>