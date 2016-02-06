<html>
    <head>
        <title>Delete Product</title>
        <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align:center;
}
</style>
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
                            "<th>Sub Category</th>".
                            "<th>Option</th>".
                        "</tr>";
                    for($j=1;$j<$arr[0];$j++) {
                        echo
                        "<tr>".
                            "<td>".$j."</td>".
                            "<td>".$arr[$j]['name']."</td>".
                            "<td>".$arr[$j]['cat']."</td>".
                            "<td>".$arr[$j]['scat']."</td>".
                            "<td> <a href=\"delrec/".$arr[$j]['id']."\">Delete</a></td>".
                        "</tr>";
                    }
                    echo "</table>";
                ?>
                    
                </div> 
            </div> 

        </div>
    </body>
</html>