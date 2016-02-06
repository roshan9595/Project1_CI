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
              <h1>Insertion</h1>
          </hgroup>

       
       <div id="insertion">
           
      <?php echo form_open('Login/Insertion_model');
           echo form_label('Category Name');
           echo br();
           echo form_input(array('id' =>'catname','name' =>'catname'));
         
           echo br();
           echo br();
           ?>
      <?php      echo form_label('Category Description');
           echo br();
        echo form_textarea(array('id' =>'catdes','name' =>'catdes'));
             echo br();
           echo br(); 
   ?>
      
           
   <?php echo form_submit('mysubmit', 'Continue!');  ?> 
           
   <?php echo form_close();?>

    </div>
</section>

</body>
</html>