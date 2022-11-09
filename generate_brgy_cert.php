<?php include 'server/server.php' ?>
<?php 
    $id = $_GET['id'];
	$query = "SELECT * FROM tblresident WHERE id='$id'";
    $result = $conn->query($query);
    $resident = $result->fetch_assoc();


    $query12 = "SELECT * FROM tblpayments WHERE amounts='Job Requirement ' or 'Bank Requirement' or 'NBI Clearance' or 
    'Police Clearance' or 'Postal ID' or 'UMID Card' or 'Driver’s License' or 'Business Requirement' or 'Indigent Certification for Philhealth'";
    $resultss = $conn->query($query12);
    $residentss = $resultss->fetch_assoc();

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
	<title>Barangay Clearance Certificate of Barangay Camp Tinio</title>
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
										<div class="card-title">Barangay Certificate</div>
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
                                            <img src="assets/uploads/cap.jpg" class="img-fluid" width="200">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="mb-0">Republika ng Pilipinas</h3>
                                            <h3 class="mb-0">Silangang Distrito</h3>
                                            <h3 class="mb-0">Bilang 021</h3>
                                            <h1 class="fw-bold mb-0" style="font-size:30px;">CAMP TINIO, LUNGSOD NG KABANATUAN</h2>
                                            <p>Tanggapan ng Punong Barangay</p>
                                        </div>
                                        <div class="text-center">
                                            <img src="assets/uploads/cab.png" class="img-fluid" width="200">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-3">
                                            

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                
                                            </div>
                                            <div class="text-center">
                                                <h1 class="mt-4 fw-bold mb-5">BARANGAY CLEARANCE</h1>
                                            </div>
                                            <h2 class="mt-5">SA KINAUUKULAN:</h2>
                                            <h2 class="mt-3" style="text-indent: 40px;">Ito ay isang pagpapatunay na si G./Gng./Bb. <span class="fw-bold" style="font-size:35px"><?= ucwords($resident['firstname'].' '.$resident['middlename'].' '.$resident['lastname']) ?></span> na may edad na <span class="fw-bold" style="font-size:35px"> <?= ucwords($resident['age']) ?> </span>taong gulang, may asawa/dalaga/binata at kasalukuyan naninirahan sa <span class="fw-bold" style="font-size:35px"> <?= ucwords($resident['purok']) ?> </span>Brgy. Camp. Tinio ay isang mabuti at tahimik na mamamayan dito sa aming Barangay.<br></br>
                                            <h2 class="mt-3" style="text-indent: 40px;">Ito ay iginawad para sa <span class="fw-bold" style="font-size:35px"> <?= ucwords($residentss['amounts']) ?></span> ngayong ika  <span class="fw-bold" style="font-size:35px"><?= date('m/d/Y') ?></span> dito sa Brgy. Camp. Tinio, Lungsod ng Kabanatuan.<br></br>


                                         <div class="col-md-12">
                                         <div class="p-3 mr-3" style="margin-top:100px">
                                            <div class= style="margin-top:50px">
                                            <h1 class=" mb-0" style="font-size:20px;">R.C. No. :  _____________<br></br></h2>
                                            <h1 class=" mb-0" style="font-size:20px;">Issued at: _____________<br></br></h2>
                                            <h1 class=" mb-0" style="font-size:20px;">Issued on: _____________<br></br></h2>
                                            <h1 class=" mb-0" style="font-size:20px;">O.R. No. :  _____________<br></br></h2>
                                             </div>
                                        </div>
                                        







                                            
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-3 text-right mr-3" style="margin-top:20px">

                                                <h2 class="mb-0 text-uppercase" style="font-size:35px"><u><?= ucwords($captain['name']) ?></u></h2>
                                                <p class="fw-bold mr-3">PUNONG BARANGAY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                                            </div>
                                            <div class="p-3 text-left">
                                                <h2 class="fw-bold mb-0 text-uppercase">__________________________</h2>
                                                <p class="fw-bold mr-3">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLagda</p>
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
            <div class="modal fade" id="pment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Request for Brgy. Certificate</h5>
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
                                    <textarea class="form-control"  name="details">Barangay Clearance</textarea>

                                </div>
                                <div class="form-group">
                                    <label>Purpose</label>
                                   
                                                <select class="form-control" name="amount">
                                                    <option disabled selected>Select Civil Status</option>
                                                     







        <option value="Police Clearance">Police Clearance</option>
                                                    <option value="Job Requirement">Job Requirement</option>
                                                    <option value="Bank Requirement">Bank Requirement</option>
                                                    <option value="NBI Clearance">NBI Clearance</option>
                                                    <option value="Police Clearance">Police Clearance</option>
                                                    <option value="Postal ID">Postal ID</option>
                                                    <option value="UMID Card">UMID Card</option>
                                                    <option value="Driver’s License">Driver’s License</option>
                                                    <option value="Business Requirement">Business Requirement</option>
                                                    <option value="Indigent Certification for Philhealth">Indigent Certification for Philhealth</option>

                                         
                                
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="name" value="<?= ucwords($resident['firstname'].' '.$resident['middlename'].' '.$resident['lastname']) ?>">
                            <button type="button" class="btn btn-secondary" onclick="goBack()">Close</button>
                            <button type="submit" class="btn btn-primary">Request</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
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