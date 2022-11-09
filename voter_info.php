<?php include 'server/server.php' ?>
<?php 
 $query = "SELECT * FROM tblposition ORDER BY `order`";
    $result = $conn->query($query);

    $position = array();
    while($row = $result->fetch_assoc()){
        $position[] = $row; 
    }
    $state = $_GET['state'];
    
    if($state=='male'){
        $query = "SELECT * FROM tblresident WHERE gender='Male' AND resident_type=1";
        $result = $conn->query($query);
    }elseif($state=='female'){
        $query = "SELECT * FROM tblresident WHERE gender='Female' AND resident_type=1";
        $result = $conn->query($query);
    }elseif($state=='non_voters'){
        $query = "SELECT * FROM tblresident WHERE voterstatus='No' AND resident_type=1";
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


    $query = "SELECT * FROM tblresident WHERE resident_type=1";
    $result = $conn->query($query);
    $total = $result->num_rows;

    $query1 = "SELECT * FROM tblresident WHERE gender='Male' AND resident_type=1";
    $result1 = $conn->query($query1);
    $male = $result1->num_rows;

    $query2 = "SELECT * FROM tblresident WHERE gender='Female' AND resident_type=1";
    $result2 = $conn->query($query2);
    $female = $result2->num_rows;

    $query3 = "SELECT * FROM tblresident WHERE voterstatus='Yes' AND resident_type=1";
    $result3 = $conn->query($query3);
    $totalvoters = $result3->num_rows;

    $query4 = "SELECT * FROM tblresident WHERE voterstatus='No' AND resident_type=1";
    $non = $conn->query($query4)->num_rows;

    $query5 = "SELECT * FROM tblpurok";
    $purok = $conn->query($query5)->num_rows;

    $query6 = "SELECT * FROM tblprecinct";
    $precinct = $conn->query($query6)->num_rows;

    $query7 = "SELECT * FROM tblblotter";
    $blotter = $conn->query($query7)->num_rows;

    $date = date('Y-m-d'); 
    $query8 = "SELECT SUM(amounts) as am FROM tblpayments WHERE `date`='$date'";
    $revenue = $conn->query($query8)->fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'templates/header.php' ?>
    <title>Resident Information -  Barangay Management System</title>
</head>
<body>
<?php include 'templates/loading_screen.php' ?>
    <div class="wrapper">
        <!-- Main Header -->
        <?php include 'templates/main-header.php' ?>
        

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
                  
                       
                    </div>
                    <?php endif ?>
                    <div class="row mt--2">
                        <div class="col-md-<?= $state != 'voters' ? '9' : '12' ?>">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">
                                            <?php 
                                                if($state=='male'){
                                                    echo 'All Male Resident';
                                                }elseif($state=='female'){
                                                    echo 'All Female Resident';
                                                }elseif($state=='voters'){
                                                    echo 'All Voters';
                                                }elseif($state=='non_voters'){
                                                    echo 'All Non Voters';
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
                                                     <th scope="col">Voter Status</th>
                                                    
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

                                                            <td><?= $row['voterstatus'] ?></td>
                                                        
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

                            <div class="card card-stats card-warning card-round">
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
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Voters</h4>
                                                <h3 class="fw-bold text-uppercase"><?= number_format($totalvoters) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="allvoters.php?state=voters" class="card-link text-light">All Voter Resident </a>
                                </div>
                            </div>
                        
                         
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
                                            <div class="numbers mt-4">
                                                <h4 class="fw-bold text-uppercase">Non-Voters</h4>
                                                <h3 class="fw-bold"><?= number_format($non) ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="nonvoters_info.php?state=non_voters" class="card-link text-light">All Non-Voter Resident </a>
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
    <script>
        $(document).ready(function() {
            $('#residenttable').DataTable();
        });
    </script>
</body>
</html>
