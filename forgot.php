 
	
	
	<!-- Modal -->
	<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="forgotModalLabel"
  aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa  fa-frown-o"></i> <?echo $forgotTxt;?> </h4>
      </div>

      <div class="modal-body">
         
 
			<form action="otp" method="post" data-toggle="validator" >
			<div class="form-group has-feedback">
				<input type="tel" class="form-control number" placeholder="<?echo $mobileTxt;?>"
			  required  >
				<span class="form-control-feedback"></span>
			</div>
 
			</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?echo $closeTxt;?> </button>
        <button type="button" class="btn btn-primary"><?echo $okTxt;?> </button>
      </div>
    </div>
  </div>
</div>


 