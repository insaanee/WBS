 <?php require_once 'includes/header1.php'; ?>
 
  
 <div id="page-wrapper">
           
		   
		   
		   
		   
		   
		   
		   
		   
		   
		       <div class="row ">
            <div class="col-lg-10">
                <h2>Add Employee</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Hr</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Add new</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> Employee info</a></li>
                                
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                        <fieldset>
										
										<form action="insertpro.php" method="post" >
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Employee Name:</label>
                                                <div class="col-sm-10"><input type="text" name="name"class="form-control" placeholder="Employee name"></div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Employee salary:</label>
                                                <div class="col-sm-10"><input type="text" name="sal"class="form-control" placeholder="Enter salary"></div>
                                            </div>
											
											<div class="form-group row"><label class="col-sm-2 col-form-label">Designation:</label>
                                                <div class="col-sm-10"><input type="text" name="desg" class="form-control" placeholder="Designation"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Email:</label>
                                                <div class="col-sm-10"><input type="text" name="email" class="form-control" placeholder="Enter email"></div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Mobile:</label>
                                                <div class="col-sm-10"><input type="text" name="mobile" class="form-control" placeholder="Enter mobile"></div>
                                            </div>
                                            <div class="form-group row"><label class="col-sm-2 col-form-label">Address:</label>
                                                <div class="col-sm-10">
                                                    <div class="summernote">
                                                        <input type="text" name="address"class="form-control" placeholder="write ...">

                                                    </div>
                                                </div>
                                            </div>
											<div class="form-group row"><label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status" >
                                                        <option value="1">Available</option>
                                                        <option value="0">Unavailable</option>
														
                                                    </select>
                                                </div>
                                            </div>
											
											
											<div class="form-group row"><label class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-2"><input type="submit" name="submit1" class="form-control btn btn-success" placeholder="image name"></div>
                                            </div>
						

                                            
										</form>
                                        </fieldset>
										
										
                                    </div>
                                </div>
                                

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

  
                        <!-- /.panel-body -->
						
						
						
						 <?php require_once 'includes/footer1.php'; ?>
       
