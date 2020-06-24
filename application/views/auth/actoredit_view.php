<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="text-center text-uppercase mx-auto">
        <h3 class="m-0 font-weight-bold text-primary"> Edit Actor </h3>
        <div class="row justify-content-center">
         <div class="col-md-12">
         <form class="user" method="post" action="<?php echo base_url().'actoredit/ubah';?>">
                <div class="form-group">
                    <input type="hidden"  name="act_id" value="<?=($edittor->row()->act_id);?>">

                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="act_fname" name="act_fname" placeholder="First Name"
                     value ="<?=($edittor->row()->act_fname);?>"> 
                     <?php echo form_error('act_fname');?>

                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="act_lname" name="act_lname" placeholder="Last Name" value ="<?=($edittor->row()->act_lname);?>">
                     <?php echo form_error('act_lname');?>
                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="act_gender" name="act_gender" placeholder="Gender"value ="<?=($edittor->row()->act_gender);?>">
                     <?php echo form_error('act_gender');?>
                </div>
                </div>
                
                <div class="col-md-12">
                <div class="text-center">
                <button type="submit" class="btn btn-primary bg-gradient-primary ">
                  Submit
                </button>
                </div>
              </div>

                <hr>
              </form>   
         </div>
      </div>
    </div>
  </div>
</div>
</div>




