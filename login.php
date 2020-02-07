<!DOCTYPE html>
<html>

<?php include 'constant.php' ;?>
 
<?php include 'include.php' ;?>

<body class="hold-transition login-page"> 
<div class="topcorner">
	 <a href="change?lang=th"> <?echo $thTxt;?></a> | <a href="change?lang=en"><?echo $enTxt;?></a> 
</div>
 <div class="login-div">
 
  <div class="login-box-body ">  

		 
					<div class="text-center sign-box">
						<img class="sign-img" alt="" src="<?php echo $site_logo; ?>">
					</div>
					
					<h2 class="text-center"> <? echo $site_name; ?> </h2> 
<!-- 					<hr> -->

					<form class="sign-box" role="form" method="post">
						 
							
							
							
<!-- 								<div class="alert alert-danger text-center" role="alert"> -->
<!-- 									Session Time Out ! -->
<!-- 								</div> -->
							
								
							<div class="form-group">
								<input id="username"  name="username"  class="form-control" autofocus="" 
								required="" type="text" maxlength="20" placeholder="<?echo $userTxt;?>" value="admin">
							</div>
							<div class="form-group">
								<input id="password" name="password" class="form-control" required="" 
								type="password" placeholder="<?echo $passTxt;?>" value="123456">
							</div>
<!-- 							<div class="checkbox"> -->
<!-- 								<label> -->
<!-- 									<input name="remember" type="checkbox" value="Remember Me">Remember Me -->
<!-- 								</label> -->
<!-- 							</div> -->
<!-- 							<a href="welcome.htm" class="btn btn-primary">Login</a> -->
							
							<div class="form-group text-center">
							<button class="btn btn-primary" type="button" onclick="dologin()"> &nbsp;&nbsp;<?echo $loginTxt;?><i class="fa fa-sign-in"></i>&nbsp;&nbsp; </button>
							</div>
							
							<div class="row">
								<div class="col-xs-12">
									<div class="text-center">
									<a href="#forgotModal"   data-toggle="modal" data-target="#forgotModal"> <?echo $forgotTxt;?></a> | <a href="#registerModal" data-toggle="modal" data-target="#registerModal"><?echo $registerTxt;?></a> 
									</div> 
								</div> 
							 
								<!-- <div class="col-xs-4">
									<div class="text-right">
									<a href="change?lang=th"> <?echo $thTxt;?></a> | <a href="change?lang=en"><?echo $enTxt;?></a> 
									</div> 
								</div>  -->
							<!-- /.col -->
						  </div>
<!-- 						   <hr> --> 
						 
					</form>
		 
			</div> 
	</div> 
	
	

	<?php include 'register.php' ;?>
	<?php include 'forgot.php' ;?>
	
	
	<script>

	
		$(function () {
			// $('#registerModal').modal('show')  

			
		});

		
		$(document).keydown(function(e) {
			//console.log('keyCode: ', e.keyCode);
			if (e.keyCode === 13){
				// e.preventDefault();
				dologin();
			}
		});

		function dologin() {
			var username = $('#username').val();
			var password = $('#password').val();

			var data = {
				user_ID : username,
				password : password
			}


			if(username != '' && password != ''){

				$.ajax({
					data : data,
					type: "post",
					url: "service/user_service?method=login",
					success: function(rdata){
						// $("#return-count-txt").html(rs);
						if(rdata['status']=='success'){
							location = 'main';
						}else{
							alert('ชื่อผู้ใช้/รหัสผ่าน ไม่ถูกต้อง !','warning');
							$('#username,#password').val('');
						}

						
					}
				});
			}else{
				alert('โปรดระบุ ชื่อผู้ใช้/รหัสผ่าน ! ','warning');
				$('#username').focus();
			}

			// if(username == 'admin' && password == '123456'){
			// 	location = 'main.php';
			// }else if(username == 'user' && password == '123456'){
			// 	location = 'main.php';
			// }else{
				// swal('','ชื่อผู้ใช้/รหัสผ่าน  ');
			// }
		}
	</script>
</body>

</html>