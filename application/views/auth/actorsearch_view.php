	<div class="container">
		<div class="row">
			<div class="col-md-12">

				 <div class="text-center">
         		 <h1 class="h3 mb-2 text-gray-800"> TABLES ACTOR </h1>
          		</div>
          		<hr>

				<table class="table table-bordered">
				    <thead>
				    	
				    	<td colspan="8">
				    		<?php echo form_open('actoredit/search');?>
				    			<input type="text" name="keyword" placeholder="search" class="form-control col-md-5">
								<input type="submit" value="Cari" class="btn btn-warning col-md-1">
				    		<?php echo form_close();?>	
				    	</td>

				    	 <!-- Example single danger button -->
			              <div class="dropdown ">
			              <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			              <i class="fa fa-download"></i> Export
			              <span class="caret"></span>
			              </button>
			              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			                <a class="dropdown-item" href="<?php echo base_url('c_excelactor') ?>">EXCEL </a>
			              </div>
			            </div>
				      <tr>
				        <th>act_id</th>
				        <th>act_fname</th>
				        <th>act_lname</th>
				        <th>act_gender</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>

					<?php foreach($actor as $row)
                    { ?>
                  <tbody>
                  <tr>

                     <td> <?php echo $row->act_id;?></td>
                     <td> <?php echo $row->act_fname;?></td>
                     <td> <?php echo $row->act_lname;?></td>
                     <td> <?php echo $row->act_gender;?></td>
                     <td>
                      <a href="<?php echo base_url(). "actoredit/?act_id=". $row->act_id ?>" class="btn btn-primary" class="btn btn-primary">Edit</a>
                      <a onclick="return confirm('Hapus data')" href="<?php echo base_url()."actoredit/delete?act_id=". $row->act_id ?> " class="btn btn-danger">Delete</a>
                    </td>

                </tr>

                </tbody> 
                  <?php }?>
				    </tbody>
				</table>

				<a href=""><< Back to post</a>
			</div>
		</div>
	</div>
		
		
		
		