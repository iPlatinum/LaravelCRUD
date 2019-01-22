@foreach ($customer as $customer_list)
			
	<form action="{{ route('Customer.update', $customer_list->customer_id) }}" method="post">
				
		{{ csrf_field() }} {{ method_field('PUT') }}


		<input type="text" name="txt_name" value="{{ $customer_list->name }}"> <br>
		<input type="text" name="txt_address" value="{{ $customer_list->addres }}"> <br>

		<button type="submit">Submit</button> <br>

	</form>

	<a href="{{ url('Customer') }}">Index</a>

@endforeach