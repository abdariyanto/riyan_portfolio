

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="col-md-12">
            
          <!-- Page Heading -->
          <div class="text-center">
          <h1 class="h3 mb-2 text-gray-800"> TABLES MOVIE_GENRE </h1>
          </div>
          <hr>

          <!-- DataTales Example -->
          <form action="<?php echo base_url(). '';?>" method="post">
          <td colspan="4">
  
             <?php echo form_open('');?>
          <input type="text" name="keyword" placeholder="search" class="form-control col-md-5">
          <input type="submit" value="Cari" class="btn btn-warning col-md-1">
             <?php echo form_close();?>    
          </td>
          </tr>
          <hr>
        </div>

        </form>
           
          <div class="card shadow mb-4">
          <div class="card-header py-3">
            <a href="" class="btn btn-primary">Add</a> 
        </div>
          </div>
          </div>
              <div class="card-body">
              <div class="col-md-12">
              <div class="table-responsive">
              <div class="text-center">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                  <thead>
                    
                    <tr>
                      <th>Mov_id</th>
                      <th>Gen_id</th>
                      <th>Action</th>
                
                    </tr>
                   
                  </thead>

                  <?php foreach($movgen->result() as $row)
                    { ?>
                  <tbody>
                  <tr>

                     <td> <?php echo $row->mov_id;?></td>
                     <td> <?php echo $row->gen_id?></td>
                    
                     <td>
                      <a href="" class="btn btn-primary">Edit</a>
                      <a onclick="return confirm('Hapus data')" href="" class="btn btn-danger">Delete</a>
                    </td>

                </tr>

                

                </tbody> 
                  <?php }?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
                 <!-- <script >
                  $(document).ready(function() {
                  $('#dataTable').DataTable();
                    });

                  </script>
          
         -->

           


