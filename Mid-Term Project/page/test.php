<?php
$xml='<?xml version="1.0" encoding="ISO-8859-1"?>
<catalogue>
<music>

<cd id="0010">
<name>Album</name>
<price>10</price>
<quantity>100</quantity>
</cd>

<cd id="0011">
<name>Live EP</name>
<price>10</price>
<quantity>100</quantity>
</cd>

<cd id="0012">
<name>Single</name>
<price>2</price>
<quantity>100</quantity>
</cd>

<cd id="0013">
<name>B-Sides</name>
<price>5</price>
<quantity>100</quantity>
</cd>

</music>

<merchandise>
<shirt id="0001">
<name>Album Cover Shirt</name>
<price>9.99</price>
<sizes>
<size>small</size>
<quantity>10</quantity>
</sizes>
<sizes>
<size>medium</size>
<quantity>10</quantity>
</sizes>
<sizes>
<size>large</size>
<quantity>10</quantity>
</sizes>
</shirt>
</merchandise>

<merchandise> 
<shirt id="0002">
<name>Band Logo Shirt</name>
<price>9.99</price>
<sizes>
<size>small</size>
<quantity>10</quantity>
</sizes>
<sizes>
<size>medium</size>
<quantity>10</quantity>
</sizes>
<sizes>
<size>large</size>
<quantity>10</quantity>
</sizes>
</shirt>
</merchandise>

<merchandise> 
<shirt id="0003">
<name>Guitar Shirt</name>
<price>9.99</price>
<sizes>
<size>small</size>
<quantity>10</quantity>
</sizes>
<sizes>
<size>medium</size>
<quantity>10</quantity>
</sizes>
<sizes>
<size>large</size>
<quantity>10</quantity>
</sizes> 
</shirt>
</merchandise>

<merchandise>
<cap id="0004">
<name>Band Logo Cap</name>
<price>4.99</price>
<quantity>20</quantity>
</cap>
</merchandise>

<merchandise> 
<cap id="0005">
<name>Album Cover Cap</name>
<price>4.99</price>
<quantity>20</quantity>
</cap>
</merchandise>

<merchandise>
<cap id="0006">
<name>Guitar Cap</name>
<price>4.99</price>
<quantity>20</quantity>
</cap>
</merchandise>

<merchandise> 
<others id="0007">
<name>Band buttons</name>
<price>4.99</price>
<quantity>20</quantity>
</others>
</merchandise>

<merchandise> 
<others id="0008">
<name>Large Poster</name>
<price>10.99</price>
<quantity>20</quantity>
</others>
</merchandise>v

<merchandise>
<others id="0009">
<name>Guitar</name>
<description>Very Limited!</description>
<price>300</price>
<quantity>5</quantity>
</others>
</merchandise>
<tickets>

<ticket id="0014">
<location>Charles\'s Pub</location>
<city>Sliema</city>
<country>Malta</country>
<day>12</day>
<month>6</month>
<year>2013</year>
<price>15</price>
<quantity>200</quantity>
</ticket>

<ticket id="0015">
<location>Olympus</location>
<city>Valletta</city>
<country>Malta</country>
<day>23</day>
<month>6</month>
<year>2013</year>
<price>15</price>
<quantity>200</quantity>
</ticket>


<ticket id="0015">
<location>The Venue</location>
<city>Rome</city>
<country>Italy</country>
<day>5</day>
<month>7</month>
<year>2013</year>
<price>15</price>
<quantity>200</quantity>
</ticket>

</tickets>
</catalogue>';

$header='<!DOCTYPE html>
<html>
    <head>
        <title>Example Shop</title>
    </head>
    <body>';
$footer='   </body>
</html>';

$xml=simplexml_load_string($xml);

$store=array();

foreach($xml as $section=>$items) {
    $store[$section][]=$items;
}

$sections=array_keys($store);

foreach ($sections as $section) {
    if (isset($_GET[$section])) {
        echo $header;
        echo '<a href="'.$_SERVER["SCRIPT_NAME"].'">Back to Index</a>';
        foreach ($store[$section] as $items) {
            foreach ($items as $type=>$item) {
                if ($section=="music") {
                    echo "<h2>".$item->name."</h2>";
                    echo "Price: ".$item->price."<br>"; 
                    $attr=$item->attributes();
                    echo "ID: ".$attr['id'];
                }
                if ($section=="merchandise") {
                    echo "<h2>".$item->name."</h2>";
                    echo "Price: ".$item->price."<br>";
                    if (isset($item->sizes)) {
                        echo "<h3>Sizes:</h3>";
                        foreach ($item->sizes as $size) {
                            echo "<b>".$size->size."</b> Quantity: ".$size->quantity."<br>";
                        }
                    }
                    $attr=$item->attributes();
                    echo "ID: ".$attr['id'];
                }
                if ($section=="tickets") {
                    echo "<h2>".$item->location."</h2>";
                    echo "Country: ".$item->country."<br>";
                    echo "City: ".$item->city."<br>";
                    echo "Quantity: ".$item->quantity."<br>";
                    echo "Date: ".$item->month." ".$item->day.", ".$item->year."<br>";
                    echo "Price: ".$item->price."<br>";         
                    $attr=$item->attributes();
                    echo "ID: ".$attr['id'];
                }

            }

        }
        ?>
        <?php
        echo $footer;
        exit;
    }
}
echo $header;
?>
<h3>Please select a section to begin.</h3>
<?php
foreach ($sections as $section) {
    echo '<a href="?'.$section.'">'.ucfirst($section).'</a><br>';
}
echo $footer;
?>