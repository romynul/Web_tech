<?php

	include 'db_connection.php';
	$conn = OpenCon();

	$sql = "SELECT id, country_id, title, description FROM tour";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$dom = new DOMDocument();

		$dom->encoding = 'utf-8';

		$dom->xmlVersion = '1.0';

		$dom->formatOutput = true;

		$xml_file_name = 'Tours_list.xml';

		$root = $dom->createElement('Tours');

   
    while($row = $result->fetch_assoc()) {
		$t_id=$row["id"];
		$country_id = $row["country_id"];
		$title=$row["title"];
		$description= $row["description"];
		
			
		$tour_node = $dom->createElement('tour');

		$child_node_id = $dom->createElement('id', $t_id);

		$tour_node->appendChild($child_node_id);

		$child_node_country = $dom->createElement('CountryID', $country_id);

		$tour_node->appendChild($child_node_country);

		$child_node_title = $dom->createElement('Title', htmlspecialchars($title));

		$tour_node->appendChild($child_node_title);

		$child_node_description = $dom->createElement('description', $description);

		$tour_node->appendChild($child_node_description);

		$root->appendChild($tour_node);

		
    }
	$dom->appendChild($root);
	$dom->save($xml_file_name);
} else {
    echo "0 results";
}
 




	echo "$xml_file_name has been successfully created";
	CloseCon($conn);
?>