<?php include 'server/server.php' ?>
<?php
    $state = $_GET['state'];
    $purok = array();

    if($state=='purok'){
        $query = "SELECT * FROM tblpurok ORDER BY `name`";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()){
            $purok[] = $row; 
        }
    }else{
        $query = "SELECT * FROM tblprecinct";
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()){
            $purok[] = $row; 
        }
    }
    

    $querys = "SELECT * FROM tblresident WHERE purok = 'Zone 01'";
    $results = $conn->query($querys);
    $totals = $results->num_rows;

    $query52 = "SELECT * FROM tblresident WHERE purok = '525th'";
    $result52 = $conn->query($query52);
    $zone52 = $result52->num_rows;

    $query1 = "SELECT * FROM tblresident WHERE purok = 'Zone 02'";
    $result1 = $conn->query($query1);
    $zone2 = $result1->num_rows;

       $query2 = "SELECT * FROM tblresident WHERE purok = 'Zone 03'";
    $result2 = $conn->query($query2);
    $zone3 = $result2->num_rows;

       $query3 = "SELECT * FROM tblresident WHERE purok = 'Zone 04'";
    $result3 = $conn->query($query3);
    $zone4 = $result3->num_rows;

        

       $query4 = "SELECT * FROM tblresident WHERE purok = 'Block 03'";
    $result4 = $conn->query($query4);
    $block3 = $result4->num_rows;

       $query5 = "SELECT * FROM tblresident WHERE purok = 'Block 04'";
    $result5 = $conn->query($query5);
    $block4 = $result5->num_rows;

           $query6 = "SELECT * FROM tblresident WHERE purok = 'Block 05'";
    $result6 = $conn->query($query6);
    $block5 = $result6->num_rows;

           $query7 = "SELECT * FROM tblresident WHERE purok = 'Block 06'";
    $result7 = $conn->query($query7);
    $block6 = $result7->num_rows;

           $query8 = "SELECT * FROM tblresident WHERE purok = 'Block 07'";
    $result8 = $conn->query($query8);
    $block7 = $result8->num_rows;

           $query9 = "SELECT * FROM tblresident WHERE purok = 'Block 08'";
    $result9 = $conn->query($query9);
    $block8 = $result9->num_rows;

           $query10 = "SELECT * FROM tblresident WHERE purok = 'Block 09'";
    $result10 = $conn->query($query10);
    $block9 = $result10->num_rows;

           $query11 = "SELECT * FROM tblresident WHERE purok = 'Block 10'";
    $result11 = $conn->query($query11);
    $block10 = $result11->num_rows;

           $query12 = "SELECT * FROM tblresident WHERE purok = 'Block 11'";
    $result12 = $conn->query($query12);
    $block11 = $result12->num_rows;

           $query13 = "SELECT * FROM tblresident WHERE purok = 'Block 12'";
    $result13 = $conn->query($query13);
    $block12 = $result13->num_rows;

           $query14 = "SELECT * FROM tblresident WHERE purok = 'Block 13'";
    $result14 = $conn->query($query14);
    $block13 = $result14->num_rows;

           $query15 = "SELECT * FROM tblresident WHERE purok = 'Block 14'";
    $result15 = $conn->query($query15);
    $block14 = $result15->num_rows;
    
           $query16 = "SELECT * FROM tblresident WHERE purok = 'Block 15'";
    $result16 = $conn->query($query16);
    $block15 = $result16->num_rows;

    $query30 = "SELECT * FROM tblresident WHERE purok = 'Block 16'";
    $result30 = $conn->query($query30);
    $block16 = $result30->num_rows;

          
    
    
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Barangay Purok -  Barangay Management System</title>
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
								<h2 class="text-white fw-bold"><?= $state=='purok' ? 'Purok' : 'Precint' ?></h2>
							</div>
						</div>
					</div>

				</div>

				<div class="page-inner">
					<div class="row mt--2">
						<div class="col-md-9">
                            <?php if(isset($_SESSION['message'])): ?>
                                <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                                    <?php echo $_SESSION['message']; ?>
                                </div>
                            <?php unset($_SESSION['message']); ?>
                            <?php endif ?>
                            <div class="card card-stats card-round" style="<?= $state=='purok' ? 'background-color:#880a14; color:#fff' : 'background-color:#a349a3; color:#fff' ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                
                                            </div>
                                            <div class="col-3 col-stats">
                                            </div>
                                            <div class="col-6 col-stats ">
                                                <div class="numbers">
                                                    <p class="card-category text-light"><?= $state=='purok' ? 'Total BLK/Zone' : 'Total Precint' ?></p>
                                                    <h4 class="card-title text-light"><?= number_format(count($purok)) ?></h4>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            <div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title"><?= $state=='purok' ? 'Purok Information' : 'Precint Information' ?></div>
									</div>

								</div>

								<div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col"><?= $state=='purok' ? 'Blk/Zone' : 'Precint No.' ?></th>
                                                    <th scope="col">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(!empty($purok)): ?>
                                                    <?php $no=1; foreach($purok as $row): ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $state!='purok' ? $row['precinct'] : $row['name'] ?></td>
                                                        <td><?= $row['details'] ?></td>
                                                    </tr>
                                                    <?php $no++; endforeach ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="4" class="text-center">No Available Data</td>
                                                    </tr>
                                                <?php endif ?>
                                            </tbody>
                                            
                                        </table>
                                    </div>
								</div>
							</div>
						</div>
                        <div class="col-md-3">

                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">525th</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($zone52) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="b52feet_info.php?state=f22" class="card-link text-light">All Resident in 525th</a>
                                </div>
                            </div>


                                 <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Zone 01</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($totals) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="b_info.php?state=z1" class="card-link text-light">All Resident in Zone 01</a>
                                </div>
                            </div>
                        
                         <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Zone 02</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($zone2) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="b2_info.php?state=z2" class="card-link text-light">All Resident in Zone 02</a>
                                </div>
                            </div>
                        
                            <div class="card card-stats card-secondary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Zone 03</h4>
                                                <h3 class="fw-bold"><?= number_format($zone3) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="purok3.php?state=z3" class="card-link text-light">All Resident in Zone 03</a>
                                </div>
                            </div>
                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Zone 04</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($zone4) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="b4_info.php?state=z4" class="card-link text-light">All Resident in Zone 04</a>
                                </div>
                            </div>



                                








































                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 03</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block3) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block3_info.php?state=b3" class="card-link text-light">All Resident in Block 03</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 04</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block4) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block4_info.php?state=b4" class="card-link text-light">All Resident in Block 04</a>
                                </div>
                            </div>

                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 05</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block5) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block5_info.php?state=b5" class="card-link text-light">All Resident in Block 05</a>
                                </div>
                            </div>
                        
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 06</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block6) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block6_info.php?state=b6" class="card-link text-light">All Resident in Block 06</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 07</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block7) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block7_info.php?state=b7" class="card-link text-light">All Resident in Block 07</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 08</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block8) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block8_info.php?state=b8" class="card-link text-light">All Resident in Block 08</a>
                                </div>
                            </div>
                        
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 09</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block9) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block9_info.php?state=b9" class="card-link text-light">All Resident in Block 09</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 10</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block10) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block10_info.php?state=b10" class="card-link text-light">All Resident in Block 10</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 11</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block11) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block11_info.php?state=b11" class="card-link text-light">All Resident in Block 11</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 12</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block12) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block12_info.php?state=b12" class="card-link text-light">All Resident in Block 12</a>
                                </div>
                            </div>

                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 13</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block13) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block13_info.php?state=b13" class="card-link text-light">All Resident in Block 13</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 14</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block14) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block14_info.php?state=b14" class="card-link text-light">All Resident in Block 14</a>
                                </div>
                            </div>
                        <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 15</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block15) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block15_info.php?state=b15" class="card-link text-light">All Resident in Block 15</a>
                                </div>
                            </div>
                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <i class="icon-direction"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Block 16</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($block16) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="block16_info.php?state=b16" class="card-link text-light">All Resident in Block 16</a>
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
</body>
</html>