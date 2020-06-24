<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="text-center text-uppercase mx-auto">
        <h3 class="m-0 font-weight-bold text-primary">Add Data</h3>
        <div class="row justify-content-center">
         <div class="col-md-6">
            <form class="user" method="post" action="<?php echo base_url().'Edit/add';?>">

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nim" name="nim" placeholder="Nim">
                  <?php echo form_error('nim');?>
                  <?php echo $this->session->flashdata('msg');?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama">
                  <?php echo form_error('nama');?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat">
                  <?php echo form_error('alamat');?>
                </div>
                <div class="form=group">
                  <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" placeholder="Jurusan">
                  <?php echo form_error('jurusan');?>
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
