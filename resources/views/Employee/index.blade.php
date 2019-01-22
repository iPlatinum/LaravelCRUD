@foreach ($employee as $employee_list)

	{{$employee_list->employee_id}}</p>
	{{$employee_list->employee_name}} <br>
	{{$employee_list->employee_addres}} <br>
	{{$employee_list->employee_phone_number}}

	<a href="
	/Employee/{{$employee_list->employee_id}}">Show
	</a><br>

	<a href="
	/Employee/{{$employee_list->employee_id}}/edit">Edit
	</a><br>

	<form action="/Employee/{{$employee_list->employee_id}}" method="post">
		{{ csrf_field() }} {{ method_field('DELETE') }}
		<button>X</button>
	</form>

@endforeach

<br><a href="/Employee/create">Create Data</a>