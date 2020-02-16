
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Hani Web Admin| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/dropzone/dropzone.css">
  <link rel="stylesheet" href="/sweetalert/sweetalert.css">
      
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('header')
  <!-- Left side column. contains the logo and sidebar -->
@include('menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Brands
        <small>MANAGE</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Brands</a></li>
        <li class="active">Manage</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">Manage Brands</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php if(session()->has('brandSuccess')): ?>
                <div class="callout callout-danger updateSuccess">
                <h4>Error</h4>

                <p><?php echo session('brandSuccess') ?></p>
              </div>
            <?php endif ?>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Created On</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($brands as $c): ?>
                <tr>
                  <td><?php echo $c->title ?></td>
                  <td><?php echo substr($c->description,0,20)."..." ?></td>
                  <td>
                  <?php if (strpos($c->image, 'http') !== false) {
                          $image =  $c->image;
                      }else{
                          $image = "/brands/".$c->image;
                        } ?>
                  <img src="<?php echo $image ?>" class="img-circle" alt="<?php echo $c->image ?>" style="height: 50px;width: 50px;"></td>
                  <td><?php echo $c->created ?></td>
                  <td><div class="btn-group">
				  <button type="button" class="btn btn-default editBtn" data-id="<?php echo $c->id ?>" data-toggle="modal" data-target="#editModal"><a>Edit</a></button>
				  <button type="button" data-id="<?php echo $c->id ?>" class="btn btn-default deleteBtn"><a>Delete</a></button>

                </div></td>
                </tr>
              <?php endforeach ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <!-- Edit Modal-->

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="catEditModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Category</h4>
                <div class="callout callout-danger updateError">
                <h4><span class="calloutTitle"></span></h4>

                <p><span class="calloutText"></span></p>
              </div>
              <div class="callout callout-success updateSuccess">
                <h4><span class="calloutTitle"></span></h4>

                <p><span class="calloutText"></span></p>
              </div>
              </div>
              <div class="modal-body">
                 <div class="box-body">
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" id="catTitle" placeholder="Enter Title">
                  <input type="hidden" class="csrf_token" name="_token" value="{{ csrf_token() }}">
                </div>
                
               
               <div class="form-group col-md-12">
                  <label for="exampleInputPassword1">Description</label>
                 <textarea class="description"  name="description" placeholder="Place description text here" style="width: 100%; height: 100px; font-size: 14px; line-h`eight: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Image</label>
                  <img src="" class="img-circle form-control" id="offerImage" alt="" style="height: 100px;
width: 100px;">
                 <button type="button" class="btn btn-default btn-block changeImage">Click to Change Image</button>
                </div>
                <div class="form-group col-md-12 imageUploadGrp">
                  <label for="exampleInputEmail1">Upload Image</label>
                  <button type="button" class="btn btn-info btn-block selectImage"><span class="data-dz-name">Select image</span></button><br>
                  <div class="progress">
                  
                </div>


                </div>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary updateBtn">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


    <!-- End Edit Modal-->
     <!-- Edit Modal-->

    <!-- End Edit Modal-->
  </div>
  <!-- /.content-wrapper -->
  @include('footer')
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="/dropzone/dropzone.js"></script>
<script src="/dropzone/progressbar.min.js"></script>
<script src="/sweetalert/sweetalert.js"></script>
<!-- page script -->

<script>
  $(function () {
     setTimeout(function(){
      $('.updateSuccess').hide('slow/400/fast');
     },2000);
   $('.updateError').hide();
   $('.updateSuccess').hide();
     $('.imageUploadGrp').hide();
      $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

  });
</script>


<script type="text/javascript">
$('.changeImage').on('click',function(){
  $('.imageUploadGrp').show('slow/400/fast');
});
  var id;
  $('.editBtn').on('click',function(){
    id = $(this).data("id");
    $.ajax({
      url: '/brands/getBrand'+'/'+id,
      dataType: 'json',
      success: function(response){
        $('#catTitle').val(response.title);
        //$('#catDesc').code(response.description);
        $('.description').val(response.description);
        $('#offerImage').attr('src', '/brands/'+response.image);
        //alert(JSON.stringify(response.description));
      }
    })
    .fail(function() {
       swal("Sorry", "There was a system error . Please contact your developer to resolve the error", "error");
    });
    
    
  });
  
</script>
<script type="text/javascript">
var id;
var imgUpdate;
var fileCount;
  $('.editBtn').on('click',function(){
    $('.selectImage').on('click',function(e){
      e.preventDefault();
    });
    id = $(this).data("id");
    var url = '/brands/update'+'/'+id;

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
          formData.append("_token", $('.csrf_token').val());
          formData.append("title", $('#catTitle').val());
          formData.append("description", $('.description').val());
      },
      uploadprogress: function(file, progress, bytesSent){
        $('.progress').show('slow/400/fast', function() {
         $('.progress').html('<div class="progress-bar" role="progressbar" aria-valuenow="'+progress+'" aria-valuemin="0" aria-valuemax="100" style="width:'+progress+'%"><span class="sr-only">'+progress+'% Uploaded</span></div>');
        
        });
          
      },
      success: function(file, response){
        var resp = $.parseJSON(response);
        if (resp.success) {
          $('.updateSuccess').show('slow/400/fast', function() {
            $('.calloutTitle').text("Success !");
            $('.calloutText').text(resp.msg);
            });
          setTimeout(function(){
            location.reload();
          },2000);
        }
        if (resp.error) {
           $('.updateError').show('slow/400/fast', function() {
            $('.calloutTitle').text("Error !");
            $('.calloutText').text(resp.msg);
          
          });
      }
}
    });

  });
 $('.updateBtn').on('click',function(){
   if (fileCount > 0) {
    imgUpdate.processQueue();
  }else{
    var post = new Object();
     post.title = $('#catTitle').val();
     post.tag = $('.description').val();
     post._token = $('.csrf_token').val();

      $.post('/brands/update'+'/'+id, post, function(data, textStatus, xhr) {
      if (data.success) {
          $('.updateSuccess').show('slow/400/fast', function() {
            $('.calloutTitle').text("Success !");
            $('.calloutText').text(data.msg);
            });
           setTimeout(function(){
             location.reload();
           },2000);
        }
        if (data.error) {
           $('.updateError').show('slow/400/fast', function() {
            $('.calloutTitle').text("Error !");
            $('.calloutText').text(data.msg);
          
          });
      }
      },'json').fail(function(){

      });
  }
 });
</script>
<script type="text/javascript">
  $('.deleteBtn').on('click',function(){
    var id = $(this).data("id");
    var url = '/brands/delete'+'/'+id;
    swal({
  title: "Are you sure?",
  text: "You will not be able to recover this Brand!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No!",
  closeOnConfirm: true,
  closeOnCancel: true
},
function(isConfirm){
  if (isConfirm) {
       $.ajax({
      url: url,
      dataType: 'json',
      success: function(response){
       
        if (response.success) {
           swal("Deleted!", response.msg, "success");
          setTimeout(function(){
            location.reload();
          },2000);
        }
        if (response.error) {
           swal("Error!", "Unable to delete Brand. Must be an error", "error");
        }
      }
    })
    
    .fail(function() {
     swal("Sorry", "There was a system error . Please contact your developer to resolve the error", "error");
    });
    
  } else {
      swal("Cancelled", "Brand was not deleted", "error");
  }
});
    
 
    
    
  });
</script>
</body>
</html>
