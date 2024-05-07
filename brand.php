<?php include('./constant/layout/head.php');?>
<!--  Author Name- Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website - milestm.web@gmail.com -->

<?php include('./constant/layout/header.php');?>

<?php //include('./constant/layout/sidebar.php');?>   
<?php include('./constant/connect');
$sql = "SELECT brand_id, brand_name, brand_active, brand_status FROM brands WHERE brand_status = 1";
$result = $connect->query($sql);
//echo $sql;exit;

?>
       <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Vehicle</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Vehicle</li>
                    </ol>
                </div>
            </div>
            
            
            <!--  Author Name: Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website : milestm.web@gmail.com -->

<div class="container-fluid">
                
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                            <a href="add-brand.php"><button class="btn btn-primary">Add Vehicle</button></a>
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>#</th>
                                                <th>Vehicle Name</th>
                                                <th>Driver</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                        <?php
foreach ($result as $row) {
    ?>
                                        <tr>
                                            <td><?php echo $row['brand_id'] ?></td>
                                            <td><?php echo $row['brand_name'] ?></td>
                                            <td><?php echo $row['driver'] ?></td>
                                            
                                            <td>
            
                                                <a href="editbrand.php?id=<?php echo $row['brand_id']?>"><button type="button" class="btn btn-xs btn-primary" ><i class="fa fa-pencil"></i></button></a>
                                              

             
                                                <a href="php_action/removeBrand.php?id=<?php echo $row['brand_id']?>" ><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash"></i></button></a>
                                           
                                                
                                                </td>
                                        </tr>
                                      
                                    </tbody>
                                   <?php    
}
?>
                               </table>
                                </div>
                            </div>
                        </div>

<!--  Author Name: Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website : milestm.web@gmail.com -->
<?php include('./constant/layout/footer.php');?>


