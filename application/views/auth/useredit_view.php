<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="text-center text-uppercase mx-auto">
        <h3 class="m-0 font-weight-bold text-primary"> Edit User </h3>
        <div class="row justify-content-center">
         <div class="col-md-12">
         <form class="user" method="post" action="<?php echo base_url().'tuseredit/ubah';?>">
                <div class="form-group">
                    <input type="hidden"  name="id" value="<?=($useredit->row()->id);?>">

                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="full name"
                     value ="<?=($useredit->row()->name);?>"> 
                     <?php echo form_error('name');?>

                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="enter email" value ="<?=($useredit->row()->email);?>">
                     <?php echo form_error('email');?>
                </div>
                <div class="form-group">
                     <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="enter password"value ="<?=($useredit->row()->password);?>">
                     <?php echo form_error('password');?>
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




