<?php
	$patient_id = $_GET['patient'];

	if ( isset( $patient_id ) ) {
		$path = "$_SERVER[DOCUMENT_ROOT]/patients/$patient_id.php";

		if ( file_exists( $path ) ) {
			require_once( $path );
		} else {
			header( 'HTTP/1.0 404 Not Found' );
			include( "$_SERVER[DOCUMENT_ROOT]/404.php" );
	
			exit;
		}
	} else {
		header( 'HTTP/1.0 404 Not Found' );
		include( "$_SERVER[DOCUMENT_ROOT]/404.php" );

		exit;
	}

	$page = array( 'title' => $patient['name']['full'], 'title_joiner' => '|', 'login_required' => true );

	require_once( "$_SERVER[DOCUMENT_ROOT]/inc/header.php" );
?>
<div id="patient-overview" class="section grey">
	<div id="patient-details-summary" class="sub-section">
		<div class="wrap">
			<div class="header">
				<h2>Patient Details Summary</h2>
				<div class="updated note">Last Updated</div>
				<button type="button" id="edit-patient" class="edit-section-button icon" title="Edit" onclick="popup('edit-patient','<?php echo $patient_id; ?>')">Edit</button>
			</div>
	
			<div class="information-table">
				<div class="name cell">
					<span class="label">Name:</span> <span class="detail"><?php echo $patient['name']['full']; ?></span>
				</div>

				<div class="date_of_birth cell">
					<span class="label">Date of Birth:</span> <span class="detail"><?php echo $patient['date_of_birth']; ?></span>
				</div>

				<div class="gender cell">
					<span class="label">Gender:</span> <span class="detail"><?php echo $patient['gender']; ?></span>
				</div>

				<div class="scheme_id cell">
					<span class="label">Patient/Scheme ID:</span> <span class="detail"><?php echo $patient['scheme_id']; ?></span>
				</div>
			</div>
		</div>
	</div>


	<div id="diagnosis-summary" class="sub-section">
		<div class="wrap">
			<div class="header">
				<h2>Diagnosis Summary</h2>
				<div class="updated note">Last Updated</div>
				<button type="button" id="edit-diagnosis" class="edit-section-button icon" title="Edit" onclick="popup('edit-diagnosis','<?php echo $patient_id; ?>')">Edit</button>
			</div>
	
			<div class="information-table">
				<div class="primary_tumour cell">
					<span class="label">Primary Tumour:</span> <span class="detail"><?php echo $patient['diagnosis']['primary_tumour']; ?></span>
				</div>

				<div class="disease_stage cell">
					<span class="label">Disease Stage:</span> <span class="detail"><?php echo $patient['diagnosis']['disease_stage']; ?></span>
				</div>

				<div class="site_of_metastasis cell">
					<span class="label">Site of Metastasis:</span> <span class="detail"><?php echo $patient['diagnosis']['site_of_metastasis']; ?></span>
				</div>

				<div class="tumour_mutation cell">
					<span class="label">Tumour Mutation:</span> <span class="detail"><?php echo $patient['diagnosis']['tumour_mutation']; ?></span>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="patient-treatments" class="section">
	<div class="treatment">
		<div class="wrap">
			<div class="header has-controls">
				<h2><?php echo $patient['treatment']['title']; ?> - <?php echo $patient['treatment']['cycle_count']; ?> Cycles</h2>
				<div class="controls">
					<button type="button" class="add control icon" title="Add cycle">Add</button>
					<!-- <button type="button" class="pause control icon" title="Pause cycle">Pause</button> -->
					<button type="button" class="discontinue control icon" title="Discontinue cycle" onclick="popup('discontinue', '<?php echo $patient_id; ?>')">Discontinue</button>
				</div>
			</div>
	
			<div class="information-table">
				<div class="date_of_decision_to_treat cell">
					<div class="label">Date of Decision to Treat</div>
					<div class="detail"><?php echo $patient['treatment']['date_of_decision_to_treat']; ?></div>
				</div>
	
				<div class="intent cell">
					<div class="label">Treatment Intent</div>
					<div class="detail"><?php echo $patient['treatment']['intent']; ?></div>
				</div>
	
				<div class="pathway cell">
					<div class="label">Treatment Pathway</div>
					<div class="detail"><?php echo $patient['treatment']['pathway']; ?></div>
				</div>
	
				<div class="line_of_therapy cell">
					<div class="label">Line of Therapy</div>
					<div class="detail"><?php echo $patient['treatment']['line_of_therapy']; ?></div>
				</div>
			</div>
		</div>
	</div>
</div>



<div id="patient-plan" class="section grey">
	<div id="plan-chart" class="sub-section">
		<div class="wrap">
			<!-- CHART -->
		</div>
	</div>


	<div id="plan-table" class="sub-section">
		<div class="wrap">
			<!-- TABLE -->
		</div>
	</div>
</div>
<?php require_once( "$_SERVER[DOCUMENT_ROOT]/inc/popups.php" ); ?>
<?php require_once( "$_SERVER[DOCUMENT_ROOT]/inc/footer.php" ); ?>