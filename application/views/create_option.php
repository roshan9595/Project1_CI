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
              <h1>Admin</h1>
          </hgroup>

       <p>Please choose any option from below</p>
    
       <div id="admin">
           <?php
          echo form_open('Login/Create_1');
           $options = array(
        1         => 'Add Category',
       2         => 'Add Product',
       
);


echo form_dropdown('opt', $options, '1');
           echo br();
           echo br();
           echo form_submit('submit','Submit');
          
           ?>
        <?php echo form_close(); ?>
    </div>
</section>

</body>
</html>