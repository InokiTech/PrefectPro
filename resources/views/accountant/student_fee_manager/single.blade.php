<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('accountant.create.fee_manager', ['value' => 'single']) }}">
	@csrf 
	<div class="form-row">
		<div class="fpb-7">
			<label for="class_id_on_create" class="eForm-label">{{ get_phrase('Class') }}</label>
			<select name="class_id" id="class_id_on_create" class="form-select eForm-select eChoice-multiple-with-remove"  required onchange="classWiseStudentOnCreate(this.value)">
				<option value="">{{ get_phrase('Select a class') }}</option>
				@foreach($classes as $class)
			  		<option value="{{ $class['id'] }}">{{ $class['name'] }}</option>
				@endforeach
			</select>
		</div>

		<div class="fpb-7">
		  <label for="student_id_on_create" class="eForm-label">{{ get_phrase('Select student') }}</label>
		  <div id = "student_content">
		    <select name="student_id" id="student_id_on_create" class="form-select eForm-select eChoice-multiple-with-remove" required >
		      	<option value="">{{ get_phrase('Select a student') }}</option>
		    </select>
		  </div>
		</div>

		<div class="fpb-7">
			<label for="title" class="eForm-label">{{ get_phrase('Invoice title') }}</label>
			<input type="text" class="form-control eForm-control" id="title" name = "title" required>
		</div>

		<div class="fpb-7">
			<label for="total_amount" class="eForm-label">{{ get_phrase('Total amount').'('.school_currency().')' }}</label>
			<input type="number" class="form-control eForm-control" id="total_amount" name = "total_amount" required>
		</div>

		<div class="fpb-7">
			<label for="paid_amount" class="eForm-label">{{ get_phrase('Paid amount').'('.school_currency().')' }}</label>
			<input type="number" class="form-control eForm-control" id="paid_amount" name = "paid_amount" required>
		</div>

		<div class="fpb-7">
			<label for="status" class="eForm-label">{{ get_phrase('Status') }}</label>
			<select name="status" id="status" class="form-select eForm-select eChoice-multiple-with-remove" required >
				<option value="">{{ get_phrase('Select a status') }}</option>
				<option value="paid">{{ get_phrase('Paid') }}</option>
				<option value="unpaid">{{ get_phrase('Unpaid') }}</option>
			</select>
		</div>

		<div class="fpb-7">
			<label for="payment_method" class="eForm-label">{{ get_phrase('Payment method') }}</label>
			<select name="payment_method" id="payment_method" class="form-select eForm-select eChoice-multiple-with-remove">
				<option value="">{{ get_phrase('Select a payment method') }}</option>
				<option value="cash">{{ get_phrase('Cash') }}</option>
				<option value="paypal">{{ get_phrase('Online') }}</option>
			</select>
		</div>

	</div>
	<div class="form-group  col-md-12">
		<button class="btn-form" type="submit">{{ get_phrase('Create invoice') }}</button>
	</div>
</form>

<script type="text/javascript">

  "use strict";

	
	function classWiseStudentOnCreate(classId) {
		let url = "{{ route('class_wise_student', ['id' => ":classId"]) }}";
    	url = url.replace(":classId", classId);
		$.ajax({
			url: url,
			success: function(response){
		  		$('#student_id_on_create').html(response);
			}
		});
	}

	$(document).ready(function () {
    $(".eChoice-multiple-with-remove").select2();
  });

</script>