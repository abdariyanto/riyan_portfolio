<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="text-center text-uppercase mx-auto">
        <h3 class="m-0 font-weight-bold text-primary"> Edit Genres </h3>
        <div class="row justify-content-center">
         <div class="col-md-12">
          <hr>
         <form class="user" method="post" action="<?php echo base_url().'genresedit/ubah';?>">
                <div class="form-group">
                    <input type="hidden"  name="gen_id" value="<?=($genedit->row()->gen_id);?>">

                </div>
                <div class="form-group">
                     <input type="text" class="form-control form-control-user" id="gen_title" name="gen_title" placeholder="Genres Title"
                     value ="<?=($genedit->row()->gen_title);?>"> 
                     <?php echo form_error('gen_title');?>

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




