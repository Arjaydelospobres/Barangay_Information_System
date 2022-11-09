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
	<title>Death Certificate of Barangay Camp Tinio</title>
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
								<h2 class="text-white fw-bold">Generate Permit</h2>
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
										<div class="card-title">Barangay Death Certificate</div>
										<div class="card-tools">
											<button class="btn btn-info btn-border btn-round btn-sm" onclick="printDiv('printThis')">
												<i class="fa fa-print"></i>
												Print Certificate
											</button>
										</div>
									</div>
								</div>
								<div class="card-body m-5" id="printThis">
                                    <div class="d-flex flex-wrap justify-content-around" style="border-bottom:3px solid black">
                                        <div class="text-center">
                                            <img src="assets/uploads/cab.png" class="img-fluid" width="200">
										</div>
										<div class="text-center">
                                            <h3 class="fw-bold mb-0" style="font-size:30px;">Republika ng Pilipinas</h3>
                                            <h3 class="fw-bold mb-0" style="font-size:30px;">Lalawiagan ng Nueva Ecija</h3>
											<h3 class="fw-bold mb-0"style="font-size:30px;">Lungsod ng Cabanatuan</h3>
											<h1 class="fw-bold mb-0" style="font-size:30px;">BARANGAY CAMP TINIO</i></h2><br></br>
                                            
										</div>
                                        <div class="text-center">
                                            <img src="assets/uploads/<?= $brgy_logo ?>" class="img-fluid" width="200">
										</div>
            <h1 class="fw-bold mb-0" style="font-size:30px;">TANGGAPAN NG PUNONG BARANGAY</i></h2>
									</div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            
                                            <div class="text-center">
                                                <h1 class="mt-4 fw-bold mb-5" style="font-size:38px;color:black">PAGPAPATUNAY</h1>
                                            </div>
                                            <h2 class="mt-5 ">Sa kinauukulan:</h2>
                                            




                                             <h2 class="mt-5" style="text-indent: 40px;">Ito ay pagpapatunay na batay sa talaan ng Tanggapan ng Punong Barangay na si <span class="fw-bold" style="font-size:35px"><?= ucwords($resident['firstname'].' '.$resident['middlename'].' '.$resident['lastname']) ?>,<?= ucwords($resident['age']) ?> </span>taong gulang at residente ng <span class="fw-bold" style="font-size:35px"><?= ucwords($resident['purok']) ?> </span>Camp Tinio, Cabanatuan City ay namatay sa kanilang bahay dahil sa sakit na<span class="fw-bold" style="font-size:35px"> _______________ </span>noong ika-<span class="fw-bold" style="font-size:35px">____ ng _______, __________</span>, sa ganap na alas <span class="fw-bold" style="font-size:35px">______</span> umaga/hapon/ gabi humigit kumulang.</h2>

                                             <h2 class="mt-5" style="text-indent: 40px;">Ginawad ang pagpapatunay na ito sa kahilingan ni<span class="fw-bold" style="font-size:35px"> ___________ </span>para magamit sa anu pamang legal na paggagamitan ngayon <span class="fw-bold" style="font-size:35px"><?= date('m/d/Y') ?></span> dito sa Tanggapan ng Punong Barangay.</h2>

                                             
                                            



                                             
                                            





                                           














                                   
                                        </div>
                                        <div class="col-md-12">
                                            <div class="p-3 text-right mr-5" style="margin-top:120px">
                                                <h1 class="fw-bold mb-0 text-uppercase" style="font-size:35px"><?= ucwords($captain['name']) ?></h1>
                                                <p class="fw-bold mr-5">PUNONG BARANGAY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                                            </div>
                                        </div>
                                        
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            
            <div class="modal fade" id="pment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Request Death Certificate</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/save_pment.php">
                                
                                <div class="form-group">
                                    <label>Date Issued</label>
                                    <input type="date" class="form-control" name="date" value="<?= date('Y-m-d') ?>">
                                </div>
                                <div class="form-group">
                                    <label>Requestes Form</label>
                                    <textarea class="form-control"  name="details">Death Certificate</textarea>

                                </div>
                                <div class="form-group">
                                    <label>Purpose</label>
                                    <input type="text" class="form-control" name="amount" placeholder="Enter the purpose" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" class="form-control" name="name" value="<?= ucfirst($permit['name']) ?>">
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