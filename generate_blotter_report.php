<?php include 'server/server.php' ?>
<?php 
    $id = $_GET['id'];
	$query = "SELECT * FROM tblblotter WHERE id='$id'";
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
	<title>Blotter Report -  Barangay Management Systemm</title>
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
								<h2 class="text-white fw-bold">Generate Report</h2>
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
										<div class="card-title">Blotter Report</div>
										<div class="card-tools">
											<button class="btn btn-info btn-border btn-round btn-sm" onclick="printDiv('printThis')">
												<i class="fa fa-print"></i>
												Print Report
											</button>
										</div>
									</div>
								</div>
                            <br></br>
                            <br></br>
                            <br></br>
								<div class="card-body m-5" id="printThis">
                                    <div class="d-flex flex-wrap justify-content-around" style="border-bottom: none">
                                        <div class="text-center">
                                            <img src="assets/uploads/<?= $brgy_logo ?>" class="img-fluid" width="150">
                                        </div>
                                        <div class="text-center">
                                            <h3 class="fw-bold mb-0" style="font-size:45px;">Republika ng Pilipinas</h3>
                                            <h3 class="fw-bold mb-0" style="font-size:30px;">Lalawiagan ng Nueva Ecija</h3>
                                            <h3 class="fw-bold mb-0"style="font-size:30px;">Lungsod ng Cabanatuan</h3>
                                            <h1 class="fw-bold mb-0" style="font-size:30px;">BARANGAY CAMP TINIO</i></h2><br></br>
                                            
                                        </div>
                                        <div class="text-center">
                                            
                                        </div>
                </div>
                                <div class="text-right">
                                                <h1 class="mt-4 fw-bold mb-5" style="font-size:30px;color:black">Brgy. CASE: NO.<?= ucwords($resident['victim']) ?></h1>
                                            </div>
        <h2 class="mt-5 fw-bold mb-5" style="font-size:30px;color:black">Para kay:<br>               
       <u><?= ucwords($resident['respondent']) ?></u></br></h2>
                                            
                                  
                                            
                                            <div class="text-center">
                                                <h3 class="mb-0 fw-bold" style="font-size:48px "><u>PAANYAYA</u></h3>
                                                <p class="mr-3" style="font-size:28px ">(Summons)</p>

                                               
                                            </div>






                                            <h2 class="mt-5" style="text-indent: 40px;">Ikaw ay inaanyayahan na dummulog sa himpilan ng Barangay sa ika <?= date('F d, Y', strtotime($resident['date'])) ?> sa ganap na alas <?= date('h:i:s A', strtotime($resident['time'])) ?> ng umaga/tanghali/hapon dahil sa reklamong  inihain sa iyo ni Gng./Gno.<?= ucwords($resident['complainant']) ?>.</h2><br></br>





                                            <div class="text-left">
                                                <h1 class="mt-4 fw-bold mb-5" style="font-size:28px;color:black">Tumatanggap: <?= ucwords($resident['respondent']) ?></h1>
                                            </div><br></br>

                                            <div class="text-left">
                                                <h1 class="mt-4 fw-bold mb-5" style="font-size:28px;color:black">Bantay Bayan:_________</h1>
                                            </div><br></br>




                                            <div class="col-md-12">
                                            <div class="p-3 text-right mr-3">
                                                <h3 class="fw-bold mb-0" style="font-size:38px "><u>CARLOS F. AQUINO JR</u></h3>
                                                <p class="mr-3" style="font-size:20px ">Hepe&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                                            </div>

                                            <br></br>

  
                                        </div>
                                       <div class="col-md-12">
                                            <div class="p-3 text-right mr-5">
                                                <h3 class="fw-bold mb-0" style="font-size:38px "><u><?= ucwords($captain['name']) ?></u></h3>
                                                <p class="mr-3" style="font-size:20px ">PUNONG BARANGAY&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
                                            </div>
                                        </div>
                                         
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
    <script>
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