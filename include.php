
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><? echo $site_name; ?></title>
		
	<link href="<?php echo $uri ; ?><?php echo $site_ico; ?>" rel="shortcut icon">
	
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
 

	<link rel="stylesheet" href="assets/css/sweetalert.css"/>
 
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

 

	
	<!-- jQuery 3 -->
	<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="assets/plugins/iCheck/icheck.min.js"></script>


<style>	

@font-face {
	font-family: "Chakra Petch"; 
	src: url("assets/fonts/Chakra_Petch/ChakraPetch-Regular.ttf"); 
}

body , html, h2{ 
	font-family: 'Chakra Petch', sans-serif !important;
	 
}
	
	.login-page{ 
	background: rgb(32,38,89);
	background: linear-gradient(90deg, rgb(0, 158, 128) 35%, rgb(0, 84, 148) 100%) !important;
	}
 
	img.sign-img {
		width: 10em;
		
	}
	  
	.login-div{ 		
	  display: flex;
	  flex-direction: column;
	  justify-content: center;		  
	  text-align: center;
	  min-height: 100vh;		  
	  margin: auto;
	  width: 380px;
	} 
	
	 a {
		color: #fff;
		text-decoration: none;
	 }
		
	.login-box-body{
		background: none; 
		color: #fff;
	} 
	
	@media screen and (max-width: 600px) {
		.login-div{
			width: 75%;
			margin-top: 20px;
		} 
	
	}

.topcorner{
   position:absolute;
   top:0;
   right:0;
   color: #fff;
   padding: 15px;
  }
	
 </style>
	


</head>

	<script>

(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));

		$(function() { 
			$(".number").inputFilter(function(value) {
				return /^\d*$/.test(value);    // Allow digits only, using a RegExp
			});  
    }); 

	</script>


