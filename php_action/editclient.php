<?php 	

require_once 'core.php';

//$valid['success'] = array('success' => false, 'messages' => array());
$id = $_GET['id'];
//echo $brandId;exit;
if($_POST) {
    $name = $_POST['name']; 
    $reffering = $_POST['reffering']; 
    $address = $_POST['address']; 
    $gender = $_POST['gender']; 
    $mob_no = $_POST['mob_no']; 
	$mob_no = $_POST['idno']; 
	$mob_no = $_POST['nextofkin']; 
	$mob_no = $_POST['relation']; 
	$mob_no = $_POST['kinmobile']; 


//echo $brandId;exit;
	$sql = "UPDATE tbl_client SET name = '$name', reffering = '$reffering',address = '$address', gender = '$gender',mob_no = '$mob_no',idno='$idno',nextofkin='$nextofkin',relation='$relation',kinmobile='$kinmobile' WHERE id = '$id'";
//echo $sql;exit;
	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";
		header('location:../client.php');	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST