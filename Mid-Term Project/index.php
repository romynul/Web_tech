<?php 
    session_start();

    if(empty($_SESSION['activeUser']))
    {
        header("location:page/reg.php");
    }
    else
    {
		
        $user = $_SESSION['activeUser'];
		//$type = $_SESSION['usertype'];
        $file = "xml/product.xml";
		$fileU = "xml/ClientData.xml";
    }
	
	
?>

<?php 
                $dom = simplexml_load_file($fileU);

                foreach($dom->data as $p)
                {
                       if($user == $p->userName )
							{
								$type=$p->type;
			
				break;
				}
                }
            ?> 
<!DOCTYPE html>
<html>
	
	<title> E-Shop </title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
	
	<style>
	.item {
		width: 18%;
		position: relative;
		float: left;
		display: block;
		margin: auto;
		margin-bottom: 5%;
		border: 2px solid #b7b7b7;
		padding: 2%;
		margin-right: 2%;
		}
		
		.product_row {
		width: 70%;
		display: block;
		margin: auto;
		}
		
		button.p_button {
		padding: 3% 24%;
		background: #000;
		color: white;
		}
	</style>
		
		<head>
		</head>
	<body>
			<h1>E-Shop</h1>
		
		<?php 
				if($type == "Seller")
				{
						echo "| <a href = 'index.php'> Home </a> | <a href = 'page/logout.php'> Logout </a> | <a href = 'page/seller.php'> Products </a> | <a href = 'page/addProduct.php'>Add Products </a>";
			
				}else{
					echo "| <a href = 'index.php'> Home </a> | <a href = 'page/logout.php'> Logout </a>  | <a href = 'page/cartp.php'> Cart </a>";
			
				}
				
			
			
		?>
		
	
			   
	
	<div class="product_row">
	
	<h1 style="text-align:center;">Here All Products</h1>
		
		<?php 
                $dom = simplexml_load_file($file);

                foreach($dom->product as $p)
                {
                        echo "<div class='item'>";
                        echo "<img style='width: 160px;height:160px' src='".$p->img."'><br>";
						echo $p->name."<br>";
                        echo $p->price;
						echo "<form action='page/cart.php' method='post'>";
						//echo "<input type='hidden' name='toName' value = '$p->name'";
						echo "<button class='p_button' type='submit' name='add' value=".$p->pid.">Add to Cart</button></form>";
                    echo "</div>";
                }
            ?> 
	
	
	
	
	</div>
			
		
	</body>
</html>