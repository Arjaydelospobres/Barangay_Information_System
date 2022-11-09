<?php include 'server/server.php' ?>
<?php 
$query = "SELECT * FROM tblposition ORDER BY `order`";
    $result = $conn->query($query);

    $position = array();
    while($row = $result->fetch_assoc()){
        $position[] = $row; 
    }
	$query = "SELECT * FROM tblhouse";
    $result = $conn->query($query);

    $house = array();
	while($row = $result->fetch_assoc()){
		$house[] = $row; 
	}

    $query1 = "SELECT * FROM tblpurok ORDER BY `name`";
    $result1 = $conn->query($query1);

    $purok = array();
	while($row = $result1->fetch_assoc()){
		$purok[] = $row; 
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<title>Resident Certificate Issuance -  Barangay Management System</title>
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
								<h2 class="text-white fw-bold">Message/Report Incident</h2>
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
										<div class="card-title">All Message/Report Incident</div>
										<?php if(isset($_SESSION['username'])):?>
											
										<?php endif?>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">

										<table  class="display table table-striped">
											<thead >
												<tr>
													
													
													
													<th scope="col"> Name</th>
													
													
													
													<th scope="col">Number</th>
													
													<th scope="col">Message/Report</th>
											
													
													
													
												</tr>
											</thead>
										<tbody id="message">
												
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

			<!-- Modal -->
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create Households</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="model/save_house.php" >
                                
                                            <div class="form-group">
                                                <label>Blk/Zone</label>
                                                <select class="form-control" required name="blk">
                                                    <option disabled selected>Select Purok Name</option>
                                                    <?php foreach($purok as $row):?>
                                                        <option value="<?= ucwords($row['name']) ?>"><?= $row['name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        
                                <div class="form-group">
                                    <label>Head of the Family</label>
                                    <input type="text" class="form-control" placeholder="Enter head of the family" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Family Member</label>
                                    <br> 1
                                    <input type="text" class="form-control mb-2" placeholder="Enter Family Member" name="name1" required>
									<br> 2<input type="text" class="form-control" placeholder="Enter Family Member" name="name2">
									<br> 3<input type="text" class="form-control" placeholder="Enter Family Member" name="name3">
									<br> 4<input type="text" class="form-control" placeholder="Enter Family Member" name="name4">
									<br> 5<input type="text" class="form-control" placeholder="Enter Family Member" name="name5">
									<br> 6<input type="text" class="form-control" placeholder="Enter Family Member" name="name6">
									<br> 7<input type="text" class="form-control" placeholder="Enter Family Member" name="name7">
									<br> 8<input type="text" class="form-control" placeholder="Enter Family Member" name="name8">
									<br> 9<input type="text" class="form-control" placeholder="Enter Family Member" name="name9">
									<br> 10<input type="text" class="form-control" placeholder="Enter Family Member" name="name10">
									<br> 11<input type="text" class="form-control" placeholder="Enter Family Member" name="name11">
									<br> 12<input type="text" class="form-control" placeholder="Enter Family Member" name="name12">
									<br> 13<input type="text" class="form-control" placeholder="Enter Family Member" name="name13">
									<br> 14<input type="text" class="form-control" placeholder="Enter Family Member" name="name14">
									<br> 15<input type="text" class="form-control" placeholder="Enter Family Member" name="name15">
                                </div>
								
								
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

		</div>
	</div>
	<?php include 'templates/footer.php' ?>
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <script src="index1.js" type= "module"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</body>
</html>