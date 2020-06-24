

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="col-md-12">
            
          <!-- Page Heading -->
          <div class="text-center">
          <h1 class="h3 mb-2 text-gray-800"> TABLES BIODATA MAHASISWA </h1>
          </div>
          <!-- DataTales Example -->
          <hr>
          <br>
          <form action="<?php echo base_url(). 'edit/search';?>" method="post">
          <td colspan="4">
  
             <?php echo form_open('edit/search');?>
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
            <a href="<?php echo base_url()."edit/add"?>"class="btn btn-primary">Add</a>
          </div>
              <div class="card-body">
              <div class="col-md-12">
              <div class="table-responsive">
              <div class="text-center">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                  <thead>
                    
                    <tr>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jurusan</th>
                      <th>Action</th>
                
                    </tr>
                   
                  </thead>

                  <?php foreach($a->result() as $row)
                    { ?>
                  <tbody>
                  <tr>

                     <td> <?php echo $row->nim;?></td>
                     <td> <?php echo $row->nama;?></td>
                     <td> <?php echo $row->alamat;?></td>
                     <td> <?php echo $row->jurusan;?></td>
                     <td>
                      <a href="<?php echo base_url()."edit/?nim=". $row->nim ?>" class="btn btn-primary">Edit</a>
                      <a onclick="return confirm('Hapus data')" href="<?php echo base_url()."edit/delete?nim=". $row->nim ?> " class="btn btn-danger">Delete</a>
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

    

           


