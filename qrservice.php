<? 
 

//set it to writable location, a place for temp generated PNG files
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

//html PNG location prefix
$PNG_WEB_DIR = 'temp/';
$QR_LIB_DIR = 'assets/plugins/phpqrcode-master/';


include $QR_LIB_DIR."qrlib.php";    

//ofcourse we need rights to create temp dir
if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);


$prename = 'QR_';
$filename = $PNG_TEMP_DIR.'qr_image.png';

//processing form input
//remember to sanitize user input in real-life solution !!!
$errorCorrectionLevel = 'L';
if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
    $errorCorrectionLevel = $_REQUEST['level'];    

$matrixPointSize = 4;
if (isset($_REQUEST['size']))
    $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    
$pdata = (isset($_REQUEST['data']) ?htmlspecialchars($_REQUEST['data']):'Example Data');
 

    //it's very important!
if (trim($pdata) != ''){

    // user data
    $filename = $PNG_TEMP_DIR.$prename.md5($pdata.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
    QRcode::png($pdata, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
 
}    
    
//display generated file




if (isset($_REQUEST['action']) && trim($_REQUEST['action']) == 'qr'){  
    
    // Do Create Database Insert Stmt
    
    
    
?>

    <img src="<?echo $PNG_WEB_DIR.basename($filename)?>" />

<? }else{ ?>

<? include 'header.php' ;?>

<? 
 
 $service_url = $service_host.'qrservice'.$url_ext.'?action=qr&level='.$errorCorrectionLevel
                 .'&size='.$matrixPointSize.'&data='. $pdata;

?>



    <div class="content-wrapper">

         <section class="content">

            <div class="box box-primary"  style="" id="rs_table"> 

                <div class="box-header with-border">
                    <h4 class="box-title text-center"> <i class="fa fa-qrcode"></i> QR Code Web Service </h4>
                </div>
            

                <form name="form1" id="myform" method="post" action="qrservice<?echo $url_ext;?>" 
                    data-toggle="validator" class="form-horizontal" role="form" enctype="multipart/form-data">

                    <div class="box-body">
  
                <div class="form-group">
                        <img  class="center-img" src="<?echo $PNG_WEB_DIR.basename($filename)?>" />
                </div>
            
                    
                <div class="form-group">
                        <label class="col-sm-2 control-label">ECC Level</label>
                        <div class="col-sm-8">
                            <select name="level"  class="form-control ">
                                <option value="L" <?echo (($errorCorrectionLevel=='L')?' selected':'')?> >Low (Smallest)</option>
                                <option value="M" <?echo (($errorCorrectionLevel=='M')?' selected':'')?> >Medium</option>
                                <option value="Q" <?echo (($errorCorrectionLevel=='Q')?' selected':'')?> >Quartile</option>
                                <option value="H" <?echo (($errorCorrectionLevel=='H')?' selected':'')?> >Hight (Best)</option>
                            </select> 

                        </div>
                </div>


                <div class="form-group">
                        <label class="col-sm-2 control-label">Size</label>
                        <div class="col-sm-8">
                            <select name="size"  class="form-control ">
                            <?
                            for($i=1;$i<=10;$i++){
                                echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option>';
                            }
                            ?>
                            </select> 

                        </div>
                </div>
                 
                <div class="form-group">
                    <label class="col-sm-2 control-label">Result Data</label>
                    <div class="col-sm-8">
                        <input  class="form-control" name="data" placeholder="Data" value="<?echo $pdata;?>" readonly>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Web Service URL</label>
                    <div class="col-sm-8">
                        <input  class="form-control" name="url" placeholder="Data" value="<?echo  $service_url;?>" readonly>
                    </div>
                </div>



             </div>

                    
                    <div class="box-footer text-center">
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <!-- <input name="hdnLine" type="hidden" value="4"> -->
                        <button type="submit" class="btn btn-info " > <i class="fa fa-qrcode"></i> GENERATE </button>
                    </div>

                </form>
 
            </div> 

        </section>

    </div>


 <script>
 
function doSave(){

    if($("#myform").validate()) {
        return true;
    } else {
        return false;
    }

    if($('#txtName').val().trim() == "" ){
        swal('กรุณาระบุ รหัสรายการ !');
        return;
    }

    if ($('input[type=file]').get(0).files.length == 0 
        //  && $('input[type=file]').get(1).files.length == 0
        //  && $('input[type=file]').get(2).files.length == 0
        //  && $('input[type=file]').get(3).files.length == 0
    ) {
        swal('กรุณาระบุ รูปภาพ !');
        return;
    }

	swal({
			title: "ยืนยัน",
			text: "บันทึกรายการ ?",
			type: "info",
			showCancelButton: true,
            closeOnConfirm: false ,
            showLoaderOnConfirm: true
			}, function () {
                 $("#myform").submit();

     }); 
 


}


</script>

<? } // End Mode QR ?>