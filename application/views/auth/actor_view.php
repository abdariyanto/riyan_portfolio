

        <!-- Begin Page Content -->
        <div class="container">
          <div class="col-md-12">
            
          <!-- Page Heading -->
          <div class="text-center">
          <h1 class="h3 mb-2 text-gray-800"> TABLES ACTOR </h1>
          </div>
          <hr>
          <link  href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">
     <style type="text/css">
        
     </style>

          <!-- DataTales Example -->
          <form action="<?php echo base_url(). 'actoredit/search';?>" method="post">
          <td colspan="3">
  
             <?php echo form_open('actoredit/search');?>
          <input type="text" name="keyword" placeholder="search" class="form-control col-md-2">
          <input type="submit" value="Cari" class="btn btn-warning col-md-1">
             <?php echo form_close();?>    
          </td>
          </tr>
      </div>
         
        


        <!-- Example single danger button -->
        
             <!--  <div class="dropdown  ">
              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="fa fa-download"></i> Export
              <span class="caret"></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo base_url('c_excelactor') ?>">EXCEL </a>
              </div>
            </div> -->

        </form>
           
          <div class="card shadow mb-4">
          <div class="card-header py-3">
            <a href="<?php echo base_url()."actoredit/add"?>"class="btn btn-primary">Add</a> 
        </div>
          </div>
          </div>
              <div class="card-body">
              <div class="col-md-12">
              <div class="table-responsive">
              <div class="text-center">


               <?php if (isset($results)) { ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  
                  <thead>
                    
                    <tr>
                      <th>act_id</th>
                      <th>act_fname</th>
                      <th>act_lname</th>
                      <th>act_gender</th>
                      <th>Action</th>
                
                    </tr>
                   
                  </thead>

                  <?php foreach($results as $row)
                    { ?>
                  <tbody>
                  <tr>

                     <td> <?php echo $row->act_id;?></td>
                     <td> <?php echo $row->act_fname;?></td>
                     <td> <?php echo $row->act_lname;?></td>
                     <td> <?php echo $row->act_gender;?></td>
                     <td>
                      <a href="<?php echo base_url(). "actoredit/?act_id=". $row->act_id ?>" class="btn btn-primary">Edit</a>
                      <a onclick="return confirm('Hapus data')" href="<?php echo base_url()."actoredit/delete?act_id=". $row->act_id ?> " class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                </tbody> 
                  <?php }?>
              </table>

         <?php } else { ?>
              <div>No user(s) found.</div> 
            <?php } ?>
 
                                <?php if (isset($links)) { ?>
                                    <?php echo $links ?>
                                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  












              
           


