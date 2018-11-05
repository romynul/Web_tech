<?php 
    session_start();

    if(empty($_SESSION['activeUser']))
    {
        header("location:register.php");
    }
    else
    {
        $user = $_SESSION['activeUser'];
        $file = "../xml/cart.xml";
    }
?>
<!DOCTYPE html>
<html>
	
	<title> E-Shop </title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
		
		<head>
		</head>
	<body>
			<h1>E-Shop</h1>
		
		
		| <a href = "../index.php"> Home </a> | <a href = "reg.php"> Register </a> | <a href = "loginForm.php"> Login </a> |
	
			    <div class="box">
        <table>
        <a href="../index.php" class="button">Continue Shopping</a>
            <tr>
				 <td>Product Name</td>
                <td>Name</td>
                <td>Product Id</td>
                <td>Quantity</td>
				<td>Action</td>
            </tr>
            <?php 
                $dom = simplexml_load_file($file);
				
                foreach($dom->product as $p)
                {
					if($p->name == $user)
					{
						$dom1 = simplexml_load_file("../xml/product.xml");
						
						foreach($dom1->product as $d)
						{
							
							if($d->pid == $p-> product_id ){
								 echo "<tr>";
								echo "<td>".$d->name."</td>";
								
							}
						}
						
                        echo "<td>".$p->name."</td>";
                        echo "<td>".$p->product_id."</td>";
                        echo "<td>".$p->quantity."</td>";
						//echo "<button type='submit' formaction='page/cart.php' name='add' value=".$p->pid.">Add To Cart</button>";
						echo "<td><form action='removecart.php' method='post'><button type='submit' name='del' value=".$p->product_id.">Remove</button></form></td>";
                    echo "</tr>";
					}
                   
                }
            ?> 
			
        </table>    
    </div>
			
		
	</body>
</html>