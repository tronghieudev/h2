<?php
// function return json nhiều rows
function returnJsons($query) {
	$data = "";
	$x=1;
	// đếm tổng số rows
	$num = mysqli_num_rows($query);
	// đếm số field trong bảng
	$k =  mysqli_num_fields($query);
	if($num > 0) {
		while ($arr = mysqli_fetch_assoc($query)) {
			$data .= '{';
			// biến so sánh 
			$ss = 1;

			foreach ($arr as $key =>  $value) {
				//nếu biến so sánh hok bằng biến $k thì sẽ có nối dấu phẩy phía sau, còn bằng thì sẽ hok có
				/*
				 * {id : 1, Name : Quần, IsActive : 1}
				 */				
				if($k != $ss){
					$data .= $key .' : '. $value.', ';
				}else{
					$data .= $key .' : '. $value;
				}
				$ss++;
			}

			$data .= '}';

			if($x < $num){
				$data .= ',';
				$x++;
			}
		}
	}
	$response = '{"records":[' . $data . ']}'; 
	return $response;
} 

// function return 1 row

function returnJson($query) {
	$data = "";
	$x=1;
	// đếm tổng số rows
	$num = mysqli_num_rows($query);
	// đếm số field trong bảng
	$k =  mysqli_num_fields($query);
	if($num > 0) {
		while ($arr = mysqli_fetch_assoc($query)) {
			$data .= '{';
			// biến so sánh 
			$ss = 1;

			foreach ($arr as $key =>  $value) {
				//nếu biến so sánh hok bằng biến $k thì sẽ có nối dấu phẩy phía sau, còn bằng thì sẽ hok có
				/*
				 * {id : 1, Name : Quần, IsActive : 1}
				 */				
				if($k != $ss){
					$data .= $key .' : '. $value.', ';
				}else{
					$data .= $key .' : '. $value;
				}
				$ss++;
			}

			$data .= '}';

			if($x < $num){
				$data .= ',';
				$x++;
			}
		}
	}
	$response = '{"records":' . $data . '}'; 
	return $response;
}

// function select sản phẩm

function select($table, $id = null,$orderBy = 'ASC') {
	$sql = "SELECT * FROM ".$table;
	if(!empty( $id )) {
		$sql .= " WHERE id =" . $id;
	}
	$sql .= " ORDER BY id ".$orderBy;
	return $sql;
}

//function selectById($id) 