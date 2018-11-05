<?php 
    session_start();
    $user = "";
    if(empty($_SESSION['activeUser']))
    {
        header("location:register.php");
    }
    else
    {
        $user = $_SESSION['activeUser'];
        $file = "../xml/product.xml";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css"/>
</head>
<body>
<a href = "../index.php"> Home </a> | <a href = "logout.php"> Logout </a> | <a href = "seller.php"> Products </a> | <a href = "addProduct.php">Add Products </a>
    <div>
        User: <?php echo $user?>
    </div>
    <div class="box">
        <table>
        
            <tr>
                <td>Product ID</td>
                <td>Name</td>
                <td>Image</td>
                <td>Type</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Status</td>
            </tr>
            <?php 
                $dom = simplexml_load_file($file);

                foreach($dom->product as $p)
                {
                    if($p->username == $user)
                    {
                        echo "<tr>";
                        echo "<td>".$p->pid."</td>";
                        echo "<td>".$p->name."</td>";
                        echo "<td><img style='width: 80px;height:80px' src='"."../".$p->img."'></td>";
                        echo "<td>".$p->type."</td>";
                        echo "<td>".$p->price."</td>";
                        echo "<td>".$p->quantity."</td>";
                        echo "<td>".$p->status."</td>";
                        echo "</tr>";
                    }
                          
                }
            ?> 
        </table>    
    </div>
</body>
</html>