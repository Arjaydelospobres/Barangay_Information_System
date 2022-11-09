<?php include 'server/server.php' ?>
<?php 
 $query = "SELECT * FROM tblposition ORDER BY `order`";
    $result = $conn->query($query);

    $position = array();
    while($row = $result->fetch_assoc()){
        $position[] = $row; 
    }
    $state = $_GET['state'];
     
    if($state=='age1'){
        $query = "SELECT * FROM tblresident WHERE age BETWEEN 1 AND 5";
        $result = $conn->query($query);
    }elseif($state=='age2'){
        $query = "SELECT * FROM tblresident WHERE age BETWEEN 6 AND 12";
        $result = $conn->query($query);
    }elseif($state=='age3'){
        $query = "SELECT * FROM tblresident WHERE age BETWEEN 13 AND 18";
        $result = $conn->query($query);
    }elseif($state=='age4'){
        $query = "SELECT * FROM tblresident WHERE age BETWEEN 19 AND 21";
        $result = $conn->query($query);
    }elseif($state=='age5'){
        $query = "SELECT * FROM tblresident WHERE age BETWEEN 22 AND 59";
        $result = $conn->query($query);
    }elseif($state=='age6'){
        $query = "SELECT * FROM tblresident WHERE age BETWEEN 60 AND 150";
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
	<?php include 'templates/header.php' ?>
    <link rel="stylesheet" href="assets/js/plugin/datatables/Buttons-1.6.1/css/buttons.dataTables.min.css">
	<title>Age 1 to 5 Residents of Camp Tinio </title>
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
                                                     <th scope="col">Age</th>
                                                     
                                                    
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
                                                          <td><?= $row['age'] ?></td>
                                                        
                                                    </tr>
                                                    <?php $no++; endforeach ?>
                                                <?php endif ?>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php if($state != 'voters'):?>
                        <div class="col-md-3">
                            <div class="card card-stats card-<?php 
                                                    if($state=='age1'){
                                                        echo 'secondary';
                                                    }elseif($state=='age2'){
                                                        echo 'warning';
                                                     }elseif($state=='age3'){
                                                        echo 'warning';
                                                     }elseif($state=='age4'){
                                                        echo 'warning';
                                                    }elseif($state=='age5'){
                                                        echo 'warning';
                                                    }elseif($state=='age6'){
                                                        echo 'warning';
                                                    }else{
                                                        echo 'primary';
                                                    }?> card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="icon-big text-center">
                                                <?php 
                                                    if($state=='age1'){
                                                        echo '<i class="flaticon-users"></i>';
                                                    }elseif($state=='age2'){
                                                        echo ' <i class="flaticon-user"></i>';
                                                    }elseif($state=='age3'){
                                                        echo ' <i class="flaticon-user"></i>';
                                                     }elseif($state=='age4'){
                                                        echo ' <i class="flaticon-user"></i>';
                                                     }elseif($state=='age5'){
                                                        echo ' <i class="flaticon-user"></i>';
                                                     }elseif($state=='age6'){
                                                        echo ' <i class="flaticon-user"></i>';
                                                    }else{
                                                        echo '<i class="flaticon-users"></i>';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-4 col-stats">
                                        </div>
                                        <div class="col-5 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">
                                                <?php 
                                                    if($state=='age1'){
                                                        echo 'All 1-5 ages';
                                                    }elseif($state=='age2'){
                                                        echo 'All 6-12 ages';
                                                    }elseif($state=='age3'){
                                                        echo 'All 13-18 ages';
                                                    }elseif($state=='age4'){
                                                        echo 'All 19-21 ages';
                                                    }elseif($state=='age5'){
                                                        echo 'All 22-59 ages';
                                                    }elseif($state=='age6'){
                                                        echo 'All Senior Citizen';
                                                    }else{
                                                        echo 'All Resident';
                                                    }
                                                ?>
                                                </p>
                                                <h4 class="card-title"><?= number_format(count($resident)) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                    </div>
				</div>
			</div>

			<!-- Main Footer -->
			<?php include 'templates/main-footer.php' ?>
			<!-- End Main Footer -->
			
		</div>
		
	</div>
	<?php include 'templates/footer.php' ?>
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