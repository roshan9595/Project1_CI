<html>
    <head>
        <title>Delete Product</title>
    </head>
    <body>
        <div id="container">
            <div id="wrapper">
                <h1>Delete Product </h1><hr/> 
                 <?php   
                    echo "<table style=\"width:100%;\">".
                        "<tr>".
                            "<th>Sl. No.</th>".
                            "<th>Item Name</th>" .
                            "<th>Category</th>".
                            "<th>Option</th>".
                        "</tr>";
                    for($j=1;$<$arr[0];$j++) {
                        
                        "<tr>".
                            "<td>".$j."</td>".
                            "<td>".$arr[$j]['name']."</td>".
                            "<td>".$arr[$j]['cat']."</td>".
                            "<td> <a href=\"login/delrec/".$arr[$j]['id']."\"></td>".
                        "</tr>".
                    }
                    "</table>";
                ?>
                    
                </div> 
            </div> 

        </div>
    </body>
</html>