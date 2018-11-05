<?php

$doc = new DOMDocument; 
$file = "../xml/cart.xml";

$xml = simplexml_load_file($file);

$cart_p = $_POST['del'];
//figure out which ones you want -- assign it to a variable (ie: $nodeToRemove )
$nodeToRemove = null;
$count = 0;
$node = 0;

foreach($xml->product as $p){
  if ($p->product_id == $cart_p) 
  {
	//$dom=dom_import_simplexml($file);
	//$dom->productList->removeChild($dom);
	unset($xml->product[$count]);
	break;
  }$count++;
}
	
echo $doc->saveXML(); 
?>