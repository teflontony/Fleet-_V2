<?php include('./constant/layout/head.php');?>
<!--  Author Name- Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website - milestm.web@gmail.com -->

<?php include('./constant/layout/header.php');?>

<?php //include('./constant/layout/sidebar.php');?>  

 
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Driver</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Add Driver</li>
                    </ol>
                </div>
            </div>
            
            
            <!--  Author Name: Tony Teflon. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at milestm.web@gmail.com  
 Visit website : milestm.web@gmail.com -->

<div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitProductForm" action="php_action/createclient.php" method="POST" enctype="multipart/form-data">

                                   <input type="hidden" name="currnt_date" class="form-control">

                                      
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="name" placeholder=" Name" name="name" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"> ID No.</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="idno" placeholder=" ID No" name="idno" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Gender</label>
                                                <div class="col-sm-9">
                                                                                                  <select class="form-control" id="brandName" name="gender">
                                                                                                    <option value="Female">Female</option>
                                                                                                    <option value="Male">Male</option>
</select></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Mobile No
</label>
                                                <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="0727598229" name="mob_no" autocomplete="off" required="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">License No.</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" placeholder="" name="reffering" autocomplete="off" required="" />

                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Home Address</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" placeholder="Kabati" name="address" autocomplete="off" required="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Next Of Kin</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" placeholder="" name="nextofkin" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Next Of Kin<br> Relationship</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" placeholder="" name="relation" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Next Of Kin <br> Mobile No.</label>
                                                <div class="col-sm-9">
                                                <input type="text" class="form-control" id="" placeholder="" name="kinmobile" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                  
                                        <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
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


