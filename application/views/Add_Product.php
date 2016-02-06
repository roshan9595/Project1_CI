<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Project</title>

<style>
    
    </style>

</head>
<body>

<section class='container'>
          <hgroup>
              <h1>Add Product</h1>
          </hgroup>

       
       <div id="insertion">
         
      <?php echo form_open('Login/Create_2');
           echo form_dropdown('sub', $subcat);
           echo br();
           echo br();
           echo form_dropdown('pro', $prod);
           echo br();
           echo br();
           echo form_label('Product Name');
           echo br();
           echo form_input(array('id' =>'pname','name' =>'pname'));
         
           echo br();
           echo br();
        
         echo form_label('Product Description');
           echo br();
        echo form_textarea(array('id' =>'pdes','name' =>'pdes'));
             echo br();
           echo br(); 
   ?>
      <?php echo form_open_multipart('Login/do_upload');?>
<?php echo "<input type='file' name='userfile' />"; ?>


           
           
   <?php 
    echo br();
    echo br();
    echo form_submit('mysubmit', 'Continue!');  ?> 
           
   <?php echo form_close();?>

    </div>
</section>

</body>
</html>