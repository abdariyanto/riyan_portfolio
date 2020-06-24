<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="text-center text-uppercase mx-auto">
        <h3 class="m-0 font-weight-bold text-primary"> Edit </h3>
        <div class="row justify-content-center">
         <div class="col-md-12">
         <form class="user" method="post" action="<?php echo base_url().'edit/ubah';?>">
                <div class="form-group">
                    <input type="hidden"  name="nim" value="<?=($editkan->row()->nim);?>">

                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama"
                     value ="<?=($editkan->row()->nama);?>"> 
                     <?php echo form_error('nama');?>

                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value ="<?=($editkan->row()->alamat);?>">
                     <?php echo form_error('alamat');?>
                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="jurusan" name="jurusan" placeholder="Jurusan"value ="<?=($editkan->row()->jurusan);?>">
                     <?php echo form_error('jurusan');?>
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




