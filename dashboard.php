<?php include 'header.php' ;?>

        <div class="content-wrapper">

            
         <section class="content">


        <div class="box box-primary"  style="" id="rs_table"> 

			 <div class="box-header with-border">
                <h4 class="box-title text-center"> <i class="fa fa-plus"></i> zzz </h4>
            </div>


            <form name="form1" id="myform" method="post" action="service/product_save.php" 
                data-toggle="validator" role="form" enctype="multipart/form-data">


                    <div class="box-body">
                            <div class="form-group">
                                <label for=" "> xxx</label>
                                <input type="text" class="form-control " name="txtName" id="txtName" 
                                placeholder="รหัสรายการ" class="required" required >
                                </div>
                         
                                <!-- <p class="help-block">Example block-level help text here.</p> -->
                            </div>
                    </div>

                    
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <!-- <input name="hdnLine" type="hidden" value="4"> -->
                        <button type="button" class="btn btn-primary" onclick="doSave()">บันทึก</button>
                    </div>


            </form>

        </div>  


  </section>
            




 </div>


 <script>
 
function doSave(){

    // if($("#myform").validate()) {
    //     return true;
    // } else {
    //     return false;
    // }

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