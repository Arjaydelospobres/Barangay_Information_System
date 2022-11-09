<?php include 'server/server.php' ?>
<?php 
    $id = $_GET['id'];
	$query = "SELECT * FROM tblresident WHERE id='$id'";
    $result = $conn->query($query);
    $resident = $result->fetch_assoc();

    $query1 = "SELECT * FROM tblofficials JOIN tblposition ON tblofficials.position=tblposition.id WHERE tblposition.position NOT IN ('SK Chairrman','Secretary','Treasurer')
                AND `status`='Active' ORDER BY `order` ASC";
    $result1 = $conn->query($query1);
    $officials = array();
	while($row = $result1->fetch_assoc()){
		$officials[] = $row; 
	}

    
    

    $c = "SELECT * FROM tblofficials JOIN tblposition ON tblofficials.position=tblposition.id WHERE tblposition.position='Captain'";
    $captain = $conn->query($c)->fetch_assoc();
    $s = "SELECT * FROM tblofficials JOIN tblposition ON tblofficials.position=tblposition.id WHERE tblposition.position='Secretary'";
    $sec = $conn->query($s)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Certificate of Indigency of Barangay Camp Tinio</title>
    <style>
        @page  
        { 
            size: auto;   /* auto is the initial value */ 

            /* this affects the margin in the printer settings */ 
            margin: 20mm 20mm 20mm 20mm;  
        } 

    </style>
</head>
<body>
<?php include 'templates/loading_screen.php' ?>
	<div class="wrapper">
		<!-- Main Header -->
		<?php include 'templates/main-header.php' ?>
		<!-- End Main Header -->

		<!-- Sidebar -->
		<?php include 'templates/sidebar.php' ?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white fw-bold">Generate Certificate</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<div class="row mt--2">
						<div class="col-md-12">

                            <?php if(isset($_SESSION['message'])): ?>
                                <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php unset($_SESSION['message']); ?>
                            <?php endif ?>

                            <div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Certificate of Indigency</div>
										<div class="card-tools">
											<button class="btn btn-info btn-border btn-round btn-sm" onclick="printDiv('printThis')">
												<i class="fa fa-print"></i>
												Print Certificate
											</button>
										</div>
									</div>
								</div>
								<div class="card-body m-5" id="printThis">
                                    <div class="d-flex flex-wrap justify-content-around" style="border-bottom: none">
                                        <div class="text-center">
                                            <img src="assets/uploads/cap.jpg" class="img-fluid" width="150">
										</div>
										<div class="text-center">
                                            <h3 class="mb-0">Republika ng Pilipinas</h3>
                                            
											<h3 class="mb-0">City of Cabanatuan</h3>
											<h1 class="fw-bold mb-0" style="font-size:30px;">BARANGAY CAMP TINIO</i></h2><br></br>
										</div>
                                        <div class="text-center">

                                            
										</div>
									</div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <div class="text-center mt-5" style="font-size:30px;">
                                                <u>OFFICE OF THE BARANGAY CAPTAIN</u>
                                            </div>

                                         <div class="col-md-9">
                                            <div class="text-center">
                                                <h1 class="mt-4 fw-bold mb-5" style="font-size:30px;">CERTIFICATE OF INDIGENCY</h1>
                                            </div>



                                          <div class="row">
                                                <div class="col">
                                                    <div class="form-group row">
                                                        <h3 class="mt-5 col-lg-4 col-md-4 col-sm-4 mt-sm-2 text-left"></h3>
                                                        <div class="col-lg-8 col-md-8 col-sm-8" style="border-bottom:1px solid black; margin:0 !important">
                                                            <span class="fw-bold" style="font-size:20px;">Name of Client:&nbsp&nbsp&nbsp<?= ucwords($resident['firstname'].' '.$resident['middlename'].' '.$resident['lastname']) ?></span></h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <h3 class="mt-5 col-lg-4 col-md-4 col-sm-4 mt-sm-2 text-left"></h3>
                                                        <div class="col-lg-8 col-md-8 col-sm-8" style="border-bottom:1px solid black">
                                                            <span class="fw-bold" style="font-size:20px">Address:&nbsp&nbsp&nbsp<?= ucwords($resident['address']) ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <h3 class="mt-5 col-lg-4 col-md-4 col-sm-4 mt-sm-2 text-left"></h3>
                                                        <div class="col-lg-8 col-md-8 col-sm-8" style="border-bottom:1px solid black">
                                                            <span class="fw-bold" style="font-size:20px">Date of Birth:&nbsp&nbsp&nbsp<?= ucwords($resident['birthdate']) ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <h3 class="mt-5 col-lg-4 col-md-4 col-sm-4 mt-sm-2 text-left"></h3>
                                                        <div class="col-lg-8 col-md-8 col-sm-8" style="border-bottom:1px solid black">
                                                            <span class="fw-bold" style="font-size:20px">Civil Status:&nbsp&nbsp&nbsp<?= ucwords($resident['civilstatus']) ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <h3 class="mt-5 col-lg-4 col-md-4 col-sm-4 mt-sm-2 text-left"></h3>
                                                        <div class="col-lg-8 col-md-8 col-sm-8" style="border-bottom:1px solid black">
                                                            <span class="fw-bold" style="font-size:20px">Purpose:&nbsp&nbsp&nbsp </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                    
                                                    </div>

                                              
                                            <h3 class="mt-5 fw-bold">TO WHOM IT MAY CONCERN:</h3>
                                            <h3 class="mt-3" style="text-indent: 40px;">This is to certify that <span class="fw-bold" style="font-size:20px"><?= ucwords($resident['firstname'].' '.$resident['middlename'].' '.$resident['lastname']) ?></span> whose signature appears below has undergone the identification process of this office thus family belongs to low income that could not meet their financial necessities.<br><br>

                                            Given this <span class="fw-bold" style="font-size:15px"><?= date('m/d/Y') ?></span> at the office of the Punong Barangay, Barangay Camp Tinio</span>.</h3>
                                            </div>
                                              <div class="col-md-12">
                                            <div class="p-3 text-left mr-5">
                                                <h3 class="fw-bold mb-0 text-uppercase">______________________</h3>
                                                <p class="mr-3" style="font-size:15px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSignature</p>
                                            </div>
 
                                        <div class="col-md-12">
                                            <div class="p-3 text-right mr-5" >
                                            <p class="mr-3">Approved by:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                                                <h3 class="fw-bold mb-0 text-uppercase"><?= ucwords($captain['name']) ?></h3>
                                                <p class="mr-3">PUNONG BARANGAY</p>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Modal -->
            <div class="modal fade" id="pment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Request For Brgy. Indigency</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/save_pment.php" >
                                
                                <div class="form-group">
                                    <label>Date Issued</label>
                                    <input type="date" class="form-control" name="date" value="<?= date('Y-m-d') ?>">
                                </div>
                                <div class="form-group">
                                    <label>Requestes Form</label>
                                    <textarea class="form-control"  name="details">Barangay Indegency</textarea>

                                </div>
                                <div class="form-group">
                                    <label>Purpose</label>
                                    <input type="text" class="form-control" name="amount" placeholder="Enter the purpose" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" class="form-control" name="name" value="<?= ucwords($resident['firstname'].' '.$resident['middlename'].' '.$resident['lastname']) ?>">
                            <button type="button" class="btn btn-secondary" onclick="goBack()">Close</button>
                            <button type="submit" class="btn btn-primary">Request</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
			<!-- Main Footer -->
			
			<!-- End Main Footer -->
			<?php if(!isset($_GET['closeModal'])){ ?>
            
                <script>
                    setTimeout(function(){ openModal(); }, 1000);
                </script>
            <?php } ?>
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
    <script>
            function openModal(){
                $('#pment').modal('show');
            }
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
    </script>
</body>
</html>