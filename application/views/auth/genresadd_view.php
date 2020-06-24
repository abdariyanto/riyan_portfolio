<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="text-center text-uppercase mx-auto">
        <h3 class="m-0 font-weight-bold text-primary">Add Genres</h3>
        <div class="row justify-content-center">
         <div class="col-md-6">
          <hr>
            <form class="user" method="post" action="<?php echo base_url().'genresedit/add';?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="gen_id" name="gen_id" placeholder="Id">
                  <?php echo form_error('gen_id');?>
                  <?php echo $this->session->flashdata('msg');?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="gen_title" name="gen_title" placeholder="Genre Title">
                  <?php echo form_error('gen_title');?>
                </div>
               
                <br>
                
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
