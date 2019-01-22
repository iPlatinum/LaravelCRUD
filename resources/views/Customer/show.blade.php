@foreach ($customer as $customer_list)

	{{$customer_list->customer_id}}</p>
	{{$customer_list->name}} <br>
	{{$customer_list->addres}} <br>

@endforeach

<br><a href="/Customer/create">Create Data</a>