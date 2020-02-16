

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

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url()?>assets/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

<script type="text/javascript" src="<?php echo base_url()?>assets/js/pages/form_select2.js"></script>
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
							<h5 class="panel-title">Notice Board Data</h5>
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
									<th>Description</th>
									<th>Start Date</th>
									<th>End Date</th>
                  <th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
									<?php foreach($note as $t): ?>
                                            <tr class="noticeboardTable" id="tablenoticeboard">
                                                <td><?php echo $t->title ?></td>
                                                <td><?php echo $t->description ?></td>
                                                <td><?php echo $t->start_date ?></td>
                                                <td><?php echo $t->end_date ?></td>
                                                <<?php if($t->status): ?>
                                                <td><span class="label label-info">Active</td>
                                            <?php else: ?>
                                                <td><span class="label label-danger">Non-Active</td>

                                            <?php endif ?>
                                                <td class="center">
                                                    <div class="btn-group">
                                                       
                                                        <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li class="editnote" data-id="<?php echo $t->id?>"><a data-toggle="modal" data-target="#myModal">Edit</a></li>
                                                            <li class="dltnote" data-id="<?php echo $t->id ?>"><a>Remove</a></li>
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
          <h4 class="modal-title">Edit Notice Board Data</h4>
          <div class="alertdiv"></div>
        </div>
        <div class="modal-body">

<div class="row">
													<div class="col-md-6">
													<label style="font-weight:bold;">title:</label>
													<input type="text" id="title" class="form-control" placeholder="e.g. Akbar">
												</div>


												

                  <div class="col-md-6">
                  
                  <label style="font-weight:bold;">Created ON</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="created_on" readonly="">
                    </div>
                  </div>  


</div><br>


<div class="row">
                  <div class="col-md-6">
                  
                  <label style="font-weight:bold;">Start Date:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="start_date" readonly="">
                    </div>
                  </div> 


												
                  
                  <div class="col-md-6">
                  <label style="font-weight:bold;">End Date:</label>
                    <div class="input-group" style="width:0px auto;">
                      <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                      <input type="text" class="form-control daterange-basic" id="end_date" readonly="">
                    </div>
                    </div>
                  </div> 
                  <br>
<div class="row">
<div class="col-md-6">
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
												<div class="form-group">
													
													<label style="font-weight:bold;">Profile</label>
													
													 <textarea rows="5" cols="5" id="description" placeholder="Few words about You..." class="form-control"></textarea>
					                            
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


$('.dltnote').on('click',function(){
  var div = $(this);
        var id = $(this).data("id");
        var url = '<?php echo site_url("noticeboard/delete") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              
                div.closest('.noticeboardTable').hide('slow');
         }
            });
});


var id;
$('.editnote').on('click',function(){
  var div = $(this);
    id = $(this).data("id");
        var url = '<?php echo site_url("noticeboard/get_noticeboard	") ?>'+'/'+id;

     $.ajax({
         url: url,
         success: function(response){
              var data = $.parseJSON(response);
                $('#title').val(data.title);
                $('#start_date').val(data.start_date);
                $('#end_date').val(data.end_date);
                $('#created_on').val(data.created_on);
                $('#description').val(data.description);                
                $('#status').val(data.status);
         }
            });
});



$('.submit').on('click', function(){
            var url = '<?php echo site_url("noticeboard/update_noticeboard	") ?>'+'/'+id;
            var post  = new Object();

                post.title =  $('#title').val();
                post.created_on = $('#created_on').val();
                post.start_date = $('#start_date').val();
                post.end_date = $('#end_date').val();
                post.description = $('#description').val();
                post.status = $('#status').val();
                $.ajax({
                    type : 'post',
                    url  : url,
                    data : post,
                    success : function(response){
                        
                            var data = $.parseJSON(response);
                            
                            if (data['success']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> Noticeboard	 updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('noticeboard/manage') ?>");},1000) 
              
                            }
                            if (data['error']) {
                                 $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Not Successfull!</span> Noticeboard	 Not Updated.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('noticeboard/manage') ?>");},1000) 
             
                            }
                    }
                });
        });


</script>
</body>
</html>