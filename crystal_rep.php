<?php include 'server/server.php' ?>
<?php 

	$sql = "SELECT * FROM tblpayments ORDER BY `date` DESC";
    $result = $conn->query($sql);
	
	

 
	 $date = date('Y-m-d'); 
	$query8 = "SELECT * FROM tblpayments WHERE details ='Barangay Clearance'";
	$rev = $conn->query($query8)->num_rows;

	$query9 = "SELECT * FROM tblpayments WHERE details ='Barangay Indegency'";
	$revs = $conn->query($query9)->num_rows;

	$query10 = "SELECT * FROM tblpayments WHERE details ='Business Permit'";
	$reve = $conn->query($query10)->num_rows;

	$query11 = "SELECT * FROM tblpayments WHERE details ='Solo Parent'";
	$revee = $conn->query($query11)->num_rows;

	$query12 = "SELECT * FROM tblpayments WHERE details ='Endorsement'";
	$reveee = $conn->query($query12)->num_rows;

	$query13 = "SELECT * FROM tblpayments WHERE details ='Death Certificate'";
	$reveeee = $conn->query($query13)->num_rows;

	$query14 = "SELECT * FROM tblpayments WHERE details ='Guardian Certificate'";
	$reveeees = $conn->query($query14)->num_rows;

	$query15 = "SELECT * FROM tblpayments WHERE details ='Good Moral Certificate'";
	$reveeeess = $conn->query($query15)->num_rows;





    $revenue = array();
	while($row = $result->fetch_assoc()){
		$revenue[] = $row; 
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'templates/header.php' ?>
	<link rel="stylesheet" href="assets/js/plugin/dataTables.dateTime.min.css">
	<link rel="stylesheet" href="assets/js/plugin/datatables/Buttons-1.6.1/css/buttons.dataTables.min.css">
	<title>Barangay Crystal reports -  Barangay Management System</title>
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
								<h2 class="text-white fw-bold">Barangay Crystal Reports</h2>
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
										<div class="card-title">Crystal Reports</div>
									</div>
								</div>
								<div class="card-body">
									
									<div class="row">
						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Barangay Clearance</h4>
												<h3 class="fw-bold text-uppercase"><?= number_format($rev) ?></h3>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="goodpermit_info.php?state=age8" class="card-link text-light">View All Brgy. Clearance</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Certificate of Indigency</h4>
<h3 class="fw-bold text-uppercase"><?= number_format($revs) ?></h3>
												
											</div>
										</div>
									</div>
								</div>

								<div class="card-body">
									<a href="goodpermit_info.php?state=age7" class="card-link text-light">View All Certificate of Indigency </a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Business Permit</h4>
<h3 class="fw-bold text-uppercase"><?= number_format($reve) ?></h3>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="goodpermit_info.php?state=age6" class="card-link text-light">View All Business Permit </a>
								</div>
							</div>
						</div>
					</div>


					

















					<div class="row">
						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Solo Parent</h4>
												<h3 class="fw-bold text-uppercase"><?= number_format($revee) ?></h3>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="goodpermit_info.php?state=age5" class="card-link text-light">View All Solo Parent </a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Certificate of Endorsement</h4>
<h3 class="fw-bold text-uppercase"><?= number_format($reveee) ?></h3>
												
											</div>
										</div>
									</div>
								</div>

								<div class="card-body">
									<a href="goodpermit_info.php?state=age4" class="card-link text-light">View All Certificate of Endorsement </a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Death Certificate</h4>
<h3 class="fw-bold text-uppercase"><?= number_format($reveeee) ?></h3>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="goodpermit_info.php?state=age3" class="card-link text-light">View All Death Certificate </a>
								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Guardian Certificate</h4>
												<h3 class="fw-bold text-uppercase"><?= number_format($reveeees) ?></h3>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="goodpermit_info.php?state=age2" class="card-link text-light">View All Guardian Certificate </a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-stats card-primary card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="fas fa-list"></i>
											</div>
										</div>
										<div class="col-3 col-stats">
										</div>
										<div class="col-6 col-stats">
											<div class="numbers mt-4">
												<h4 class="fw-bold text-uppercase">Good Moral Certificate</h4>
<h3 class="fw-bold text-uppercase"><?= number_format($reveeeess) ?></h3>
												
											</div>
										</div>
									</div>
								</div>

								<div class="card-body">
									<a href="goodpermit_info.php?state=age1" class="card-link text-light">View All Good Moral Certificate </a>
								</div>
							</div>
						</div>


					



									<div class="table-responsive">
										<table id="revenuetable" class="display table table-striped">
											<thead>
												<tr>
													<th scope="col">Date</th>
													<th scope="col">Name</th>
													
													<th scope="col">Requested Form</th>
													<th scope="col">Purpose</th>
													
													
												</tr>
											</thead>
											<tbody>
												<?php if(!empty($revenue)): ?>
													<?php $no=1; foreach($revenue as $row): ?>
													<tr>
														<td><?= $row['date'] ?></td>
														<td><?= $row['name'] ?></td>
														
														<td><?= $row['details'] ?></td>
														<td><?= $row['amounts'] ?></td>
														
														
														
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
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<script src="assets/js/plugin/moment/moment.min.js"></script>
	<script src="assets/js/plugin/dataTables.dateTime.min.js"></script>
	<script src="assets/js/plugin/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
	<script src="assets/js/plugin/datatables/Buttons-1.6.1/js/buttons.print.min.js"></script>
    <script>
		var minDate, maxDate;
 
		// Custom filtering function which will search data in column four between two values
		$.fn.dataTable.ext.search.push(
			function( settings, data, dataIndex ) {
				var min = minDate.val();
				var max = maxDate.val();
				var date = new Date( data[0] );
		
				if (
					( min === null && max === null ) ||
					( min === null && date <= max ) ||
					( min <= date   && max === null ) ||
					( min <= date   && date <= max )
				) {
					return true;
				}
				return false;
			}
		);
        $(document).ready(function() {
			 // Create date inputs
			 minDate = new DateTime($('#min'), {
				format: 'MMMM Do YYYY'
			});
			maxDate = new DateTime($('#max'), {
				format: 'MMMM Do YYYY'
			});

            var table = $('#revenuetable').DataTable({
				"order": [[ 0, "desc" ]],
				dom: 'Bfrtip',
				buttons: [
					'print'
				]
				});

			// Refilter the table
			$('#min, #max').on('change', function () {
				table.draw();
			});
        });
    </script>
</body>
</html>