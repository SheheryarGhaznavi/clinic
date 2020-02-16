<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        

        <!-- META SECTION -->
        <title>Clinic Management Login Page</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url()?>favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/core/libraries/jquery.min.js"></script>
    </head>
    <body>

        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div >
                    <h1 style="color: white; font-size: 30px ">Clinic Management System</h1>
                </div>


                <div class='alertdiv'>   </div>
                

                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Email"   id="email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password"   id="password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block     login">Log In</button>
                        </div>
                    </div>
                
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2017 Fusion Technologies
                    </div>
                    
                </div>
            </div>
            
        </div>


<script type="text/javascript">


$('.login').on('click',function(){
    var userData = new Object();
    userData.email = $('#email').val();
    userData.password = $('#password').val();
    var url = '<?php echo site_url("user/login")?>';

    $.ajax({
        url: url,
        data: userData,
        type: 'post',
        success: function(response){
             var data = $.parseJSON(response);
                         if (data['success']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Successfull!</span> You successfully logged in.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('home') ?>");},1000) 
              
                      }
                        if (data['error']) {
                         $('.alertdiv').html('<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"><button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button><span class="text-semibold">Not Successfull!</span> You Are Not logged in.</div>');
                          window.setTimeout(function(){window.location.replace("<?php echo site_url('login') ?>");},1000) 
              
                      }
            
        }
           
});
});

</script>


 






        
    </body>
</html>






