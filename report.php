<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	require("./head.php");
	?>
	<title>Report</title>

</head>

<body>

	<?php
	require("./nav.php");
	?>
	<section class="home">
		<div class="text">
			<div class="Manage border border-secondary">


				<center>
					<h1 class="display-4 mb-5">Report</h1>
				</center>

				<nav class="navbar navbar-light bg-light">
					<form>
						<div class="form-row align-items-center">
							<div class="col-auto">
								<label class="sr-only" for="inlineFormInput">From</label>
								<input type="date" class="form-control mb-2" id="inlineFormInput" placeholder="From" name="fromdate">
							</div>
							<div class="col-auto">
								<label class="sr-only" for="inlineFormInputGroup">To</label>
								<div class="input-group mb-2">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">@</div>
									</div> -->
									<input type="date" class="form-control" id="inlineFormInputGroup" placeholder="To" name="todate">
								</div>
							</div>
							<!-- <div class="col-auto">
								<div class="form-check mb-2">
									<input class="form-check-input" type="checkbox" id="autoSizingCheck">
									<label class="form-check-label" for="autoSizingCheck">
										Remember me
									</label>
								</div>
							</div> -->
							<div class="col-auto">
								<button type="submit" class="btn btn-primary mb-2" name="SubmitButton">Submit</button>
							</div>
						</div>
					</form>
				</nav>
				<?php
				if (isset($_GET['SubmitButton'])) { //check if form was submitted
					require("connect_testDb.php");
					$field1 = $con->real_escape_string($_GET['fromdate']);
					$field2 = $con->real_escape_string($_GET['todate']);
					$filter = "AND DATE(AddedDate) BETWEEN '$field1' AND '$field2'";
					$query1 = "SELECT * FROM table WHERE AddedDate=$filter";
					echo '<table class="table w-100"> 
				    <thead class="thead-dark">
				    <tr> 
				        <th> <font face="Arial">DATE</font> </th> 
				        <th> <font face="Arial">ITEM</font> </th> 
				        <th> <font face="Arial">ACTION</font> </th>
						<th> <font face="Arial">NUMBER</font> </th>
						<th> <font face="Arial">AVAILABILITY</font> </th>
				    </tr> </thead>
				    <tbody> ';
					$sql = "SELECT * FROM reportdata WHERE AddedDate BETWEEN '$field1' AND '$field2'";
					if ($result = $con->query($sql)) {
						// $result1 = $con->query($sql1);
						//while ($l <= $n) {
							while ($row = $result->fetch_assoc()) {
								$field1name = $row["AddedDate"];
								$field2name = $row["Item"];
								$field3name = $row["ActionDone"];
								$field4name = $row["NumberItem"];
								$field5name = $row["AvailabilityR"];
								echo '<tr> 
													<td>' . $field1name . '</td> 
													<td>' . $field2name . '</td> 
													<td>' . $field3name . '</td> 
													<td>' . $field4name . '</td>
													<td>' . $field5name . '</td>
												</tr>';
							}
						}
					}
				
				?>

				<?php

				?>



				<br>




			</div>
		</div>
	</section>
	<?php
	require("./footer.php");
	?>
</body>

</html>