<?php include('./constant/layout/head.php');?>
<!--  Author Name- Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website - milestm.web@gmail.com -->

<?php include('./constant/layout/header.php');?>

<?php// include('./constant/layout/sidebar.php');?>   
 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Vehicle Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Vehicle</li>
                    </ol>
                </div>
            </div>
            
            
            <!--  Author Name: Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website : milestm.web@gmail.com -->

<div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/createBrand.php" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Vehicle Name</label>
                                                <div class="col-sm-4">
                                                  <input type="text"  class="form-control"id="brandName" placeholder="Vehicle Name" name="brandName"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Regisration No.</label>
                                                <div class="col-sm-4">
                                                  <input type="text"  class="form-control"id="regno" placeholder="KAA 001A" name="regno"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Driver</label>
                                                <div class="col-sm-4">
                                                <select class="form-control" id="driver" name="driver">
                                                <option value="">~~SELECT~~</option>
                                                   <?php                                                 
                                                   $sql = "SELECT * FROM tbl_client WHERE delete_status =0";
                                                   $result = $connect->query($sql);
                                                   while($row = $result->fetch_array()) {
                                                   echo "<option value='".$row['id']."'>".$row['name']."</option>";
                                                   } // while                                
                                                  ?>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Insurance Cost</label>
                                                <div class="col-sm-4">
                                                  <input type="text"  class="form-control"id="insurance" placeholder="" name="insurance"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Insurance Date</label>
                                                <div class="col-sm-4">
                                                  <input type="date"  class="form-control"id="insuredate" placeholder="" name="insuredate"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Inspection Date</label>
                                                <div class="col-sm-4">
                                                  <input type="date"  class="form-control"id="inspection" placeholder="" name="inspection"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Governor Date</label>
                                                <div class="col-sm-4">
                                                  <input type="date"  class="form-control"id="governor" placeholder="" name="governor"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Consumption(Km/L)</label>
                                                <div class="col-sm-4">
                                                  <input type="text"  class="form-control"id="consumption" placeholder="" name="consumption"  required="" />
                                                </div>
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                        <div class="row">
                                                <label class="col-sm-2 control-label">Ownership</label>
                                                <div class="col-sm-4">
                                                     <select class="form-control" id="ownership" name="ownership">
                                                     <option value="">~~SELECT~~</option>
                                                     <option value="1">Fully Owned</option>
                                                     <option value="2">On Loan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Acquisation Date</label>
                                                <div class="col-sm-4">
                                                  <input type="date"  class="form-control"id="assetdate" placeholder="" name="assetdate"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Asset Cost</label>
                                                <div class="col-sm-4">
                                                  <input type="text"  class="form-control"id="assetcost" placeholder="" name="assetcost"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Service Cost</label>
                                                <div class="col-sm-4">
                                                  <input type="text"  class="form-control"id="service" placeholder="" name="service"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Service Milage</label>
                                                <div class="col-sm-4">
                                                  <input type="text"  class="form-control"id="milage" placeholder="" name="milage"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Next Service <br> Date</label>
                                                <div class="col-sm-4">
                                                  <input type="date"  class="form-control"id="servedate" placeholder="" name="servedate"  required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">
                                                <label class="col-sm-2 control-label">Engine Type</label>
                                                <div class="col-sm-4">
                                                     <select class="form-control" id="etype" name="etype">
                                                     <option value="">~~SELECT~~</option>
                                                     <option value="1">Diesel</option>
                                                     <option value="2">Petrol</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="row">
                                                <label class="col-sm-2 control-label">Transmission</label>
                                                <div class="col-sm-4">
                                                     <select class="form-control" id="trans" name="trans">
                                                     <option value="">~~SELECT~~</option>
                                                     <option value="1">Manual</option>
                                                     <option value="2">Automatic</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">
                                        <div class="row">
                                                <label class="col-sm-2 control-label">Status</label>
                                                <div class="col-sm-4">
                                                     <select class="form-control" id="brandStatus" name="brandStatus">
                                                     <option value="">~~SELECT~~</option>
                                                     <option value="1">Inservice</option>
                                                     <option value="2">Grounded</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" name="create" id="createBrandBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<!--  Author Name: Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website : milestm.web@gmail.com -->
<?php include('./constant/layout/footer.php');?>


