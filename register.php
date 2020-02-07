 
	
	
	<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
  aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-edit"></i> <?echo $registerTxt;?> </h4>
      </div>

      <div class="modal-body">
         
 

    <form action="otp" method="post" data-toggle="validator" >
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="<?echo $fname;?>" class="required" required  >
     
      </div>
	  <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="<?echo $lname;?>" class="required" required >
         
      </div>
      <div class="form-group has-feedback">
        <input type="tel" class="form-control number"  placeholder="<?echo $mobileTxt;?>" class="required" required >
        
      </div> 
	    <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="<?echo $mailTxt;?>" class="required" required >
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="<?echo $mailTxt;?>" class="required" required >
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="<?echo $passTxt;?>" class="required" required >
      
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="<?echo $cpassTxt;?>" class="required" required >
         
      </div>
      
    </form> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?echo $closeTxt;?> </button>
        <button type="button" class="btn btn-primary"><?echo $registerTxt;?> </button>
      </div>
    </div>
  </div>
</div>

	 