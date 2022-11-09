<?php include 'server/server.php' ?>
<?php 
 $query = "SELECT * FROM tblposition ORDER BY `order`";
    $result = $conn->query($query);

    $position = array();
    while($row = $result->fetch_assoc()){
        $position[] = $row; 
    }
    $state = $_GET['state'];
     
    if($state=='z1'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Zone 01'";
        $result = $conn->query($query);
    }elseif($state=='z2'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Zone 02'";
        $result = $conn->query($query);
    }elseif($state=='z3'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Zone 03'";
        $result = $conn->query($query);
    }elseif($state=='z4'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Zone 04'";
        $result = $conn->query($query);
    }elseif($state=='b3'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 03'";
        $result = $conn->query($query);
    }elseif($state=='b4'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 04'";
        $result = $conn->query($query);
     }elseif($state=='b5'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 05'";
        $result = $conn->query($query);
     }elseif($state=='b6'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 06'";
        $result = $conn->query($query);
     }elseif($state=='b7'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 07'";
        $result = $conn->query($query);
     }elseif($state=='b8'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 08'";
        $result = $conn->query($query);
     }elseif($state=='b9'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 09'";
        $result = $conn->query($query);
     }elseif($state=='b10'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 10'";
        $result = $conn->query($query);
     }elseif($state=='b11'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 11'";
        $result = $conn->query($query);
     }elseif($state=='b12'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 12'";
        $result = $conn->query($query);
     }elseif($state=='b13'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 13'";
        $result = $conn->query($query);
     }elseif($state=='b14'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 14'";
        $result = $conn->query($query);
     }elseif($state=='b15'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Block 15'";
        $result = $conn->query($query);
    }elseif($state=='nawasa'){
        $query = "SELECT * FROM tblresident WHERE purok = 'Nawasa'";
        $result = $conn->query($query);

    }elseif($state=='voters'){
        $query = "SELECT * FROM tblresident WHERE voterstatus='Yes' AND resident_type=1";
        $result = $conn->query($query);

        $query1 = "SELECT * FROM tblresident WHERE voterstatus='Yes' AND identified_as='Positive' AND resident_type=1";
        $pos = $conn->query($query1)->num_rows;

        $query2 = "SELECT * FROM tblresident WHERE voterstatus='Yes' AND identified_as='Negative' AND resident_type=1";
        $nega = $conn->query($query2)->num_rows;

        $query3 = "SELECT * FROM tblresident WHERE voterstatus='Yes' AND identified_as='Unidentified' AND resident_type=1";
        $unid = $conn->query($query3)->num_rows;

       
    }else{
        $query = "SELECT * FROM tblresident";
        $result = $conn->query($query);
    }
	
    $resident = array();
	while($row = $result->fetch_assoc()){
		$resident[] = $row; 
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/js/plugin/datatables/Buttons-1.6.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="assets/js/plugin/datatables/Buttons-1.6.1/css/buttons.dataTables.min.css">
	<?php include 'templates/header.php' ?>
	<title>Block 3 Residents of Camp Tinio </title>
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
								<h2 class="text-white fw-bold"><?php if($state == 'voters'){ echo 'Voters Information'; }elseif($state == 'non_voters'){ echo 'Voters Information'; }else{ echo 'Resident Information'; }?></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-<?php echo $_SESSION['success']; ?> <?= $_SESSION['success']=='danger' ? 'bg-danger text-light' : null ?>" role="alert">
                            <?php echo $_SESSION['message']; ?>
                        </div>
                    <?php unset($_SESSION['message']); ?>
                    <?php endif ?>
                    <?php if($state == 'voters' && isset($_SESSION['role']) && isset($_SESSION['role']) =='administrator'):?>
                    <div class="row mt--2">
                        <div class="col">
                            <div class="card card-stats card-success card-round">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="icon-big text-center">
                                                    <i class="fas fa-fingerprint"></i>
                                                </div>
                                            </div>
                                            <div class="col-3 col-stats">
                                            </div>
                                            <div class="col-6 col-stats">
                                                <div class="numbers">
                                                    <p class="card-category">All Voters</p>
                                                    <h4 class="card-title"><?= number_format(count($resident)) ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col">
                            <div class="card card-stats card-primary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center"> 
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Positive Voters</p>
                                                <h4 class="card-title"><?= number_format($pos) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-stats card-secondary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center"> 
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Negative Voters</p>
                                                <h4 class="card-title"><?= number_format($nega) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-stats card-warning card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center"> 
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                        <div class="col-2 col-stats">
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Unidentified Voters</p>
                                                <h4 class="card-title"><?= number_format($unid) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col">
                            <div class="card card-stats card-danger card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center"> 
                                                <i class="fas fa-fingerprint"></i>
                                            </div>
                                        </div>
                                        <div class="col-3 col-stats">
                                        </div>
                                        <div class="col-6 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Total Non Voters</p>
                                                <h4 class="card-title"><?= number_format($non) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <?php endif ?>
                    <div class="row mt--1">
                        <div class="col-md-<?= $state != 'voters' ? '9' : '12' ?>">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">
                                            <?php 
                                                if($state=='age1'){
                                                    echo 'All Preschool: 1-5 ages';
                                                }elseif($state=='age2'){
                                                    echo 'All Gradeschooler: 6-12 ages';
                                                }elseif($state=='age3'){
                                                    echo 'All Teen: 13-18 ages';
                                                }elseif($state=='age4'){
                                                    echo 'All Young Adult: 19-21 ages';
                                                }elseif($state=='age5'){
                                                    echo 'All Adult: 22-59 ages';
                                                }elseif($state=='age6'){
                                                    echo 'All Senior Citizen';
                                                }else{
                                                    echo 'All Resident';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="residenttable" class="display table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                     <th scope="col">Fullname</th>
                                                     <th scope="col">Purok</th>
                                                     
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                      
                                              <?php if(!empty($resident)): ?>
                                                    <?php $no=1; foreach($resident as $row): ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td>
                                                            <div class="avatar avatar-xs">
                                                                <img src="<?= preg_match('/data:image/i', $row['picture']) ? $row['picture'] : 'assets/uploads/resident_profile/'.$row['picture'] ?>" alt="Resident Profile" class="avatar-img ">
                                                            </div>
                                                            <p></p>
                                                            <?= ucwords($row['lastname'].', '.$row['firstname'].' '.$row['middlename']) ?>
                                                        </td>
                                                          <td><?= $row['purok'] ?></td>
                                                        
                                                    </tr>
                                                    <?php $no++; endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                            
                                        </table>
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
    <script src="assets/js/plugin/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugin/datatables/Buttons-1.6.1/js/buttons.print.min.js"></script>
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <script src="assets/js/plugin/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugin/datatables/Buttons-1.6.1/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#residenttable').DataTable();
        });
        var table = $('#residenttable').DataTable({
                "order": [[ 0, "asc" ]],
                dom: 'Bfrtip',
                buttons: [
                    'print'
                ]
                });
    </script>
     
</body>
</html>