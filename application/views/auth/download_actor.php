<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="utf-8">
      <title><?php echo $title ?></title>
      <style>
           ::selection { background-color: #E13300; color: white; }
           ::-moz-selection { background-color: #E13300; color: white; }
 
           body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
           }
 
           main {
                width: 80%;
                padding: 20px;
                background-color: white;
                min-height: 300px;
                border-radius: 5px;
                margin: 30px auto;
                box-shadow: 0 0 8px #D0D0D0;
           }
           table {
                border-top: solid thin #000;
                border-collapse: collapse;
           }
           th, td {
                border-top: border-top: solid thin #000;
                padding: 6px 12px;
           }
 
           a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
           }
      </style>
 </head>
 
 <body>
      <main>
           <h1>Laporan Excel</h1>
           <p><a href="<?php echo base_url('c_excelactor/export_excel') ?>">Export ke Excel</a></p>
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
                    
                </tbody>
                 <?php }?>
           </table>
      </main>
 </body>
 </html>
