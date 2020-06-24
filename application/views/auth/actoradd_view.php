<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="text-center text-uppercase mx-auto">
        <h3 class="m-0 font-weight-bold text-primary">Add Actor</h3>
        <div class="row justify-content-center">
         <div class="col-md-6">
            <form class="user" method="post" action="<?php echo base_url().'actoredit/add';?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="act_id" name="act_id" placeholder="Id">
                  <?php echo form_error('act_id');?>
                  <?php echo $this->session->flashdata('msg');?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="act_fname" name="act_fname" placeholder="First Name">
                  <?php echo form_error('act_fname');?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="act_lname" name="act_lname" placeholder="Last Name">
                  <?php echo form_error('act_lname');?>
                </div>
                <div class="form=group">
                  <input type="text" class="form-control form-control-user" id="act_gender" name="act_gender" placeholder="Gender">
                  <?php echo form_error('act_gender');?>
                <br>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Submit
                </button>
                <hr>
               <!--  <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a> -->
                
              </form>
          </div>
        </div>
      </div>
   </div>
  </div>
</div>
