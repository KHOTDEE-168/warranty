<?php include 'constant.php' ;?>

<?php 

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$position = strpos($actual_link,"web");
$uri =  substr($actual_link, 0, $position);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<title><? echo $site_name; ?></title>
	
	<link href="<?php echo $uri ; ?><? echo $site_ico; ?>" rel="shortcut icon">
	
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<!-- <link rel="stylesheet" href="<?php echo $uri ; ?>assets/bower_components/Ionicons/css/ionicons.min.css"> -->
	
	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/css/bootstrap-select.min.css">
	
	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/css/dataTables.bootstrap.min.css">
	 
	<!-- <link rel="stylesheet" href="<?php echo $uri ; ?>assets/css/daterangepicker.css"> -->
	
	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/css/AdminLTE.min.css">

	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/css/skins/<? echo $site_skin;?>.min.css">
	
	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/lightbox/css/lightbox.min.css">

	<link href="assets/css/sweetalert.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?php echo $uri ; ?>assets/css/custom.css">

	<!-- <link rel="stylesheet" href="<?php echo $uri ; ?>assets/css/custom.css"> -->
	

<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/> -->
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
<!-- 	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->



    <script src="<?php echo $uri; ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo $uri; ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo $uri; ?>assets/bower_components/fastclick/lib/fastclick.js"></script> -->
    <script src="<?php echo $uri; ?>assets/js/adminlte.min.js"></script>

	<script  src="<?php echo $uri; ?>assets/js/moment.min.js"></script>
	<!-- <script  src="<?php echo $uri; ?>assets/js/daterangepicker.js"></script> -->
	<script  src="<?php echo $uri; ?>assets/js/jquery.dataTables.min.js"></script>
	<script  src="<?php echo $uri; ?>assets/js/dataTables.bootstrap.min.js"></script>
	<script  src="<?php echo $uri; ?>assets/js/bootstrap-datepicker.js"></script>

    <!-- <script src="<?php echo $uri; ?>assets/js/demo.js"></script> -->
	<!-- <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script> -->

	<!-- <script  src="<?php echo $uri; ?>assets/js/jquery.validate.min.js"></script> -->
	<!-- <script  src="<?php echo $uri; ?>assets/js/validator.min.js"></script> -->

        
	<!-- <script src="<?php echo $uri; ?>assets/js/ChartJS/Chart.min.js"></script> 
	<script src="<?php echo $uri; ?>assets/js/ChartJS/Chart.PieceLabel.min.js"></script> 
	<script src="<?php echo $uri; ?>assets/js/ChartJS/chartjs-plugin-annotation.min.js"></script>  -->

	<script src="<?php echo $uri; ?>assets/lightbox/js/lightbox.min.js"></script> 
	<script src="assets/js/sweetalert.min.js"></script>
    

</head>

<body class="hold-transition <? echo $site_skin;?>">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini">
					<b><? echo $site_name_short; ?></b>
				</span>
					
			   <span class="logo-lg"> <b> <? echo $site_name; ?> </b> 


			 <!--   <img src="<?php echo $uri ; ?>assets/img/tp/TPAC-TPCC.png" height="42px" /> -->
			   </span>
				<!-- logo for regular state and mobile devices
<!-- 				<span class="logo-lg"> -->
<!-- 				</span> -->
			</a>
			
			
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
<!-- 					<span class="sr-only"></span> -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo $uri ; ?>logout">
								ออกจากระบบ <i class="fa fa-sign-out"></i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
			  
<!-- 				<div class=""> -->

<!-- 		        <div class="text-center"> -->

<!-- 		        </div> -->
<!-- 		      </div> -->

				<!-- search form -->
				<!-- <form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form> -->
				<!-- /.search form -->
				
				
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
				
					 <li class="header text-center"> <img src="<?php echo $site_ico ; ?>" height="45px" /></li>
				 
					 <li >
							<a href="<?php echo $uri; ?>dashboard<?php echo$url_ext; ?>">
	 							<i class="fa fa-dashboard "></i> 
								<span> Dashboard </span>
							</a>
					</li>
				  
					 <!-- <li >
							<a href="<?php echo $uri; ?>search<?php echo$url_ext; ?>">
	 							<i class="fa fa-search"></i> 
								<span>ค้นหารายการ </span>
							</a>
					</li> -->
				  
					<!-- <li class="header">Documentation</li> -->
			  		
					<li class="treeview">
						<a href="#">
							<i class="fa fa-book"></i>
							<span>Documentation</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
								<li >
									<a href="<?php echo $uri; ?>qrservice<?php echo$url_ext; ?>">
										<i class="fa fa-qrcode"></i> 
										<span>QR Code Web Service</span>
									</a>
							</li>
						</ul>
					</li> 
					
			   
					
			 
					 
			 
					
				</ul>

			</section>
			<!-- /.sidebar -->
		</aside>
		
	
		
	<script type="text/javascript">

	var cPath = '<? echo $uri; ?>';

	var url = window.location;
	
	$('.sidebar-menu ul li').find('a').each(function () {
        var link = new RegExp($(this).attr('href')); 
        if (link.test(document.location.href)) {
            if(!$(this).parents().hasClass('active')){
                $(this).parents('li').addClass('menu-open');
                $(this).parents().addClass("active");
                $(this).addClass("active"); 
            }
        }
    });


	  // for sidebar menu entirely but not cover treeview
	  $('ul.sidebar-menu a').filter(function() {
	     return this.href == url;
	  }).parent().addClass('active');
	  //Top bar
	  $('ul.navbar-nav a').filter(function() {
	     return this.href == url;
	  }).parent().addClass('active');

	  // for treeview
	  $('ul.treeview-menu a').filter(function() {
	     return this.href == url;
	  }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
		  
	  

	  _showLoading = function(v){
    	if(v){
    		swal({
    			title: 'กำลังค้นหา.... <i class="fa fa-refresh fa-spin"></i>',
    			html: true,
    			showConfirmButton: false
    		});
    	}else{
    		swal.close();
    	}
	}
	
	
	</script>
		
		
		
		
		