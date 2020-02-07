<?php include 'constant.php' ;?>
<?php
 
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><? echo $site_name; ?></title>
		
	<link href="<?php echo $site_ico; ?>" rel="shortcut icon">
	
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/AdminLTE.min.css"> 

	<link rel="stylesheet" href="assets/css/sweetalert.css"/>
 
	 
 <style>	

@font-face {
	font-family: "Chakra Petch"; 
	src: url("assets/fonts/Chakra_Petch/ChakraPetch-Regular.ttf"); 
}

body , html, h2 , h3 , h4{ 
	font-family: 'Chakra Petch', sans-serif !important;
	color: #1b1b1b;
}
	 
	.form-control {
		border-radius: 4px;
	   }
	 .login-page{ 
		background: rgb(32,38,89);
		background: radial-gradient(circle, rgba(32,38,89,1) 0%, rgba(59,75,107,1) 100%);

	}
 
 </style>
	


</head>

<body class="hold-transition login-page">

 <div class="register-box">
  

  <div class="register-box-body">
    <h3 class="register-box-msg"><? echo $otpTxt;?> (Ref : ASDASD) </h3>

    <form action="login" method="post">
     
	  <div class="form-group  ">
	  
	   <div class="text-center" style="color: #ec0000;">
       <?echo $otpDetailTxt;?>
      </div>
        <input type="text" class="form-control text-center" placeholder="<? echo $cotpTxt;?> ">
       
      </div>
       
      <div class="row">
       
        <div class="col-xs-6 text-left">
          <button type="button" class="btn btn-default" disabled><? echo $reotpTxt;?>  </button> 
        </div> 
		 <div class="col-xs-6 text-right">          
          <button type="button" class="btn btn-primary "><? echo $okTxt;?> </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  

     
  </div>
  <!-- /.form-box -->
</div>
	
	
	
	
	
	<!-- jQuery 3 -->
	<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="assets/plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
			
			 
		});
				
				
	   let timerOn = true; 
	   function timer(remaining) {
		  var m = Math.floor(remaining / 60);
		  var s = remaining % 60;
		  
		  m = m < 10 ? '0' + m : m;
		  s = s < 10 ? '0' + s : s;
		  let tmt = remaining > 60? (m+':'+s): s;
		  $('#timer').html(tmt);
		  remaining -= 1;
		  
		  if(remaining >= 0 && timerOn) {
			setTimeout(function() {
				timer(remaining);
			}, 1000);
			return;
		  }

		  if(!timerOn) {
			// Do validate stuff here
			return;
		  }
		  
		  // Do timeout stuff here
		  // alert('Timeout for otp');
		}

		
		 
	</script>
</body>

</html>