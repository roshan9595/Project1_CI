<html>
    <head>
        <title>Delete Product</title>
		
		
    </head>
    <body>
        <div id="container">
            <div id="wrapper">
                <h1>Delete Product </h1><hr/> 
                <div id="menu">
                    <p>Select Category</p>
				
                  <?php   
                    echo form_open('Login/delete_1');
                     echo form_label('Category Name');
                    echo br();
                    echo form_dropdown('cate', $cat);
           echo br();
           echo br();
                   
                    
                    echo form_submit('mysubmit', 'Continue!');
                    echo form_close();
                    ?>
                    
                </div> 
            </div> 

        </div>
    </body>
</html>