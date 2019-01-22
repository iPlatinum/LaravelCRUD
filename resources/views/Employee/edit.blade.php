@foreach ($employee as $employee_list)
			
	<form action="{{ route('Employee.update', $employee_list->employee_id) }}" method="post">
				
		{{ csrf_field() }} {{ method_field('PUT') }}


		<input type="text" name="txt_name" value="{{ $employee_list->employee_name }}"> <br>
		<input type="text" name="txt_address" value="{{ $employee_list->employee_address }}"> <br>
		<input type="text" name="txt_phone" value="{{ $employee_list->employee_phone_number }}"> <br>

		<button type="submit">Submit</button> <br>

	</form>

	<a href="{{ url('Employee') }}">Index</a>

@endforeach