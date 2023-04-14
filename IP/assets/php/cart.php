<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <?php include 'dbconnect.php';?>
    <?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
  ?>   

            <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);
            $len=count($queries);
            for($i=0;$i<=$len-1;$i++){
                $id = $_GET[$i];
                $sql = "SELECT * FROM `addcart` WHERE product_id = $id"; 
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $title = $row['product_name'];
                    echo '<h1>'.$title.'</h1>';
                }
            }
                
            ?>
    
    </body>
</html>