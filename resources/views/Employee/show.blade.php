@foreach ($employee as $employee_list)

	{{$employee_list->employee_id}}</p>
	{{$employee_list->employee_name}} <br>
	{{$employee_list->employee_address}} <br>
	{{$employee_list->employee_phone_number}} <br>

@endforeach

<br><a href="/Employee/create">Create Data</a>