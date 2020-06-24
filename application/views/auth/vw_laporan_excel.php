<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
 
                <th>Act_id</th>
 
                <th>Act_fname</th>
 
                <th>Act_lname</th>

                <th>Act_gender</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php foreach($actor as $actor) { ?>
 
           <tr>
 
                <td><?php echo $actor->act_id; ?></td>
                <td><?php echo $actor->act_fname; ?></td>
                <td><?php echo $actor->act_lname; ?></td>
                <td><?php echo $actor->act_gender; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>