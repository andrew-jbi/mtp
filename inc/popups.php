<script type="template/javascript" id="popup-template-edit-patient">
	<form onsubmit="">
		<div class="header">
			<h2>Edit Patient</h2>
		</div>
		<div class="form-table">
			<div class="first_name form-row">
				<div class="label form-cell">
					<label for="form-first_name">First Name</label>
				</div>
				<div class="field form-cell small">
					<input type="text" value="{{name.first}}" id="form-first_name">
				</div>
			</div>
			<div class="last_name form-row">
				<div class="label form-cell">
					<label for="form-last_name">Last Name</label>
				</div>
				<div class="field form-cell small">
					<input type="text" value="{{name.last}}" id="form-last_name">
				</div>
			</div>
		</div>
		<div class="footer clear">
			<div class="cancel left">
				<button type="button" class="button ghost" onclick="close_popup()">Cancel</button>
			</div>
			<div class="update right">
				<button type="submit" class="button">Update</button>
			</div>
		</div>
	</form>
</script>

<script type="template/javascript" id="popup-template-discontinue">
	<form onsubmit="">
		<div class="header">
			<h2>Discontinue Treatment Plan</h2>
		</div>
		<div class="form-table">
			<div class="date_of_this_event form-row">
				<div class="label form-cell">
					<label for="form-date_of_this_event">Date of this Event</label>
				</div>
				<div class="field form-cell small">
					<input type="text" value="{{date_of_this_event}}" placeholder="DD/MM/YYYY" id="form-date_of_this_event">
				</div>
			</div>
			<div class="date_of_decision_to_discontinue form-row">
				<div class="label form-cell">
					<label for="form-date_of_decision_to_discontinue">Date of Decision to Discontinue</label>
				</div>
				<div class="field form-cell small">
					<input type="text" value="{{date_of_decision_to_discontinue}}" placeholder="DD/MM/YYYY" id="form-date_of_decision_to_discontinue">
				</div>
			</div>
			<div class="reason_to_discontinue form-row">
				<div class="label form-cell">
					<label for="form-reason_to_discontinue">Reason to Discontinue</label>
				</div>
				<div class="field form-cell">
					<select id="form-reason_to_discontinue" onchange="if(['1','2'].indexOf($( this ).val())>-1){$('.create_a_new_treatment_plan').show()}else{$('.create_a_new_treatment_plan').hide()}">
						<option disabled selected>Please Select</option>
						<option value="1">Side Effects</option>
						<option value="2">Absence of Response</option>
						<option value="3">Patient Choice to Suspend Treatment</option>
						<option value="4">Treatment Stopped</option>
						<option value="5">Treatment on Hold</option>
					</select>
				</div>
			</div>
			<div class="create_a_new_treatment_plan form-row" style="display:none">
				<div class="label form-cell">
					<label>Create a New Treatment Plan</label>
				</div>
				<div class="field form-cell small">
					<div class="radio-row">
						<input type="radio" name="create_a_new_treatment_plan" value="yes" id="create_a_new_treatment_plan_yes">
						<label for="create_a_new_treatment_plan_yes">Yes</label>
					</div>
					<div class="radio-row">
						<input type="radio" name="create_a_new_treatment_plan" value="no" id="create_a_new_treatment_plan_no">
						<label for="create_a_new_treatment_plan_no">No</label>
					</div>
				</div>
			</div>
		</div>
		<div class="footer clear">
			<div class="cancel left">
				<button type="button" class="button ghost" onclick="close_popup()">Cancel</button>
			</div>
			<div class="update right">
				<button type="submit" class="button" disabled>Update</button>
			</div>
		</div>
	</form>
</script>

<script type="template/javascript" id="popup-template-dispense">
	<form onsubmit="">
		<div class="header">
			<h2>Dispense</h2>
		</div>
		<div class="form-table">
			<div class="drug form-row">
				<div class="label form-cell">
					<label for="form-drug">Drug</label>
				</div>
				<div class="field form-cell">
					<input type="text" value="{{drug}}" id="form-drug">
				</div>
			</div>
			<div class="date_of_dispense form-row">
				<div class="label form-cell">
					<label for="form-date_of_dispense">Date of Dispense</label>
				</div>
				<div class="field form-cell small">
					<input type="text" value="{{date_of_dispense}}" placeholder="DD/MM/YYYY" id="form-date_of_dispense">
				</div>
			</div>
			<div class="dose_strength form-row">
				<div class="label form-cell">
					<label for="form-dose_strength">Dose Strength</label>
				</div>
				<div class="field form-cell small">
					<input type="text" value="{{dose_strength}}" id="form-dose_strength">
					<div class="aside">mg/kg</div>
				</div>
			</div>
			<div class="patient_weight form-row">
				<div class="label form-cell">
					<label for="form-patient_weight">Patient Weight</label>
				</div>
				<div class="field form-cell small">
					<input type="text" value="{{patient_weight}}" id="form-patient_weight">
					<div class="aside">kg</div>
				</div>
			</div>
			<div class="vial_type form-row">
				<div class="label form-cell">
					<label for="form-vial_type">Vial Type</label>
				</div>
				<div class="field form-cell">
					<select>
					</select>
					<div class="aside">
						<button type="button" class="icon add">Add</button>
					</div>
				</div>
			</div>
			<div class="number_of_vials form-row">
				<div class="label form-cell">
					<label for="form-number_of_vials">Number of Vials</label>
				</div>
				<div class="field form-cell">
					<input type="text" value="{{number_of_vials}}" id="form-number_of_vials">
				</div>
			</div>
			<div class="barcode form-row">
				<div class="label form-cell">
					<label for="form-barcode">Barcode</label>
				</div>
				<div class="field form-cell">
					<input type="text" value="{{barcode}}" id="form-barcode">
				</div>
			</div>
		</div>
		<div class="footer clear">
			<div class="cancel left">
				<button type="button" class="button ghost" onclick="close_popup()">Cancel</button>
			</div>
			<div class="update right">
				<button type="submit" class="button">Update</button>
			</div>
		</div>
	</form>
</script>

<script type="template/javascript" id="popup-template-therapy_delivery">

</script>

<script type="template/javascript" id="popup-template-completion">

</script>