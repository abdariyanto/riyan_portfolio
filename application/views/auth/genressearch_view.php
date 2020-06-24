	<div class="container">
		<div class="row">
			<div class="col-md-12">

				 <div class="text-center">
				 <h1 class="h3 mb-2 text-gray-800"> TABLES GENRES </h1>
				</div>
				<hr>

				<table class="table table-bordered">
					<thead>
						
						<td colspan="8">
							<?php echo form_open('genresedit/search');?>
								<input type="text" name="keyword" placeholder="search" class="form-control col-md-5">
								<input type="submit" value="Cari" class="btn btn-warning col-md-1">
							<?php echo form_close();?>	
						</td>
					  <tr>
						<th>Gen_id</th>
						<th>Gen_Title</th>
						<th>Action</th>
					  </tr>
					</thead>
					<tbody>

					<?php foreach($genres as $row)
					{ ?>
				  <tbody>
				  <tr>

					 <td> <?php echo $row->gen_id;?></td>
					 <td> <?php echo $row->gen_title;?></td>
					<td>
					  <a href="<?php echo base_url(). "genresedit/?gen_id=". $row->gen_id ?>" class="btn btn-primary" class="btn btn-primary">Edit</a>
					  <a onclick="return confirm('Hapus data')" href="<?php echo base_url()."genresedit/delete?gen_id=". $row->gen_id ?> " class="btn btn-danger">Delete</a>
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
		
		
		
		