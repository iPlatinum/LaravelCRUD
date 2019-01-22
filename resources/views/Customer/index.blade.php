@foreach ($customer as $customer_list)

	{{$customer_list->customer_id}}</p>
	{{$customer_list->name}} <br>
	{{$customer_list->addres}} <br>

	<a href="
	/Customer/{{$customer_list->customer_id}}">Show
	</a><br>

	<a href="
	/Customer/{{$customer_list->customer_id}}/edit">Edit
	</a><br>

	<form action="/Customer/{{$customer_list->customer_id}}" method="post">
		{{ csrf_field() }} {{ method_field('DELETE') }}
		<button>X</button>
	</form>

@endforeach

<br><a href="/Customer/create">Create Data</a>