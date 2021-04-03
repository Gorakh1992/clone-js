<?php 

function get_category_list($conn){
	$sql = "SELECT * FROM test_category_details";
	$result = $conn->query($sql);
	$data = array();
	if ($result->num_rows > 0) {

	  while($row = $result->fetch_assoc()) {
		$data[] = $row;
	  }
	} else {
	  echo "0 results";
	}
	
	return $data;
	
}

function get_question_banks_details($conn){
	$sql = "SELECT * FROM question_bank join test_category_details on test_category_details.id =question_bank.category_id";
	$result = $conn->query($sql);
	$data = array();
	if ($result->num_rows > 0) {

	  while($row = $result->fetch_assoc()) {
		$data[] = $row;
	  }
	} else {
	  echo "0 results";
	}
	
	return $data;
}