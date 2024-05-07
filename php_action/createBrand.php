<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$brandName = $_POST['brandName'];
  $brandStatus = $_POST['brandStatus']; 
  $regno = $_POST['regno'];
  $selectedOption = $_POST['driver'];
$insurance = $_POST['insurance'];
$insuredate = $_POST['insuredate'];
$inspection = $_POST['inspection'];
$governor = $_POST['governor'];
$consumption = $_POST['consumption'];
$selectedOption = $_POST['ownership'];
$assetdate = $_POST['assetdate'];
$assetcost = $_POST['assetcost'];
$service = $_POST['service'];
$mileage = $_POST['milage'];
$servedate = $_POST['servedate'];
$selectedOption = $_POST['etype'];
$selectedOption = $_POST['trans'];

	$sql = "INSERT INTO brands (`brandName`,`brandStatus`,`regno`,`driver`,`insurance`,`insuredate`,`inspection`,`governor`,`consumption`,`ownership`,`assetdate`,`assetcost`,`service`,`milage`,`servedate`,`etype`,`trans`) VALUES 
	                           ('$brandName', '$brandStatus','$regno','$driver','$insurance','$insuredate','$inspection','$governor','$consumption','$ownership','$assetdate','$assetcost','$service','$milage','$servedate','$etype','$trans')";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";
		header('location:fetchBrand.php');	
	}  
	  
     else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	 	header('location:../add-brand.php');
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST