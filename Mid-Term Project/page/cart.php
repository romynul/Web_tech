<?php

 session_start();
    //Check if logged in
    if(empty($_SESSION['activeUser']))
    {
        header("location:register.php");
    }else
    {
        //check if submit
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
			$cart_p = $_POST['add'];
			$cart_name = $_POST['toName'];
            //$user = $_SESSION['activeUser'];
            $file = "../xml/cart.xml";
            
            $xml = simplexml_load_file($file);
	
			$product = $xml->addChild('product');
            $product->addChild('name', $user);
			$product->addChild('pname', $cart_name);
            //$product->addChild('product_id', $cart_p);
			$product->addChild('quantity', '1');
            $product->addChild('status', "pending");
            

		 $dom = new DOMDocument('1.0');
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            $dom->loadXML($xml->asXML());
            $dom->save($file);
			echo "Product Succesfully Added";

           header("location:cartp.php");

            
        }

        
    }
	
	?>