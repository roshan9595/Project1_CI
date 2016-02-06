<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Project</title>



</head>
<body>

<section class='container'>
          <hgroup>
              <h1>Insert_SubCategory</h1>
          </hgroup>

       <p>Please choose Category  from below</p>
    
     
           <?php
          echo form_open('Login/Insert_Subcategory');
   
     


echo form_dropdown('sub', $subcat);
           echo br();
           echo br();
    
     echo form_label('SubCategory Name');
           echo br();
           echo form_input(array('id' =>'subname','name' =>'subname'));
           echo br();
           echo br();
           echo form_submit('submit','Submit');
    echo br();
           echo anchor('Login/index','Exit');
          
           ?>
        <?php echo form_close(); ?>
   
</section>

</body>
</html>